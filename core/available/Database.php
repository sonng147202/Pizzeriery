<?php

// namespace Core\Available;

class DB
{
    private $conn;
    
    function __construct()
    {
        $this->connection(func_get_args());
    }

    public function connection($db)
    {
        $this->conn = new mysqli($db[0], $db[1], $db[2], $db[3]);
    }

    public static function query($query_string) 
    {
        $result = mysqli_query($this->conn, $query_string);
        if (!$result) {
            $this->sql_error('Query Error', $query_string);
        }
        return $result;
    }

    public static function fetch_row($query_string) {
        $result = [];
        $mysqli_result = self::query($query_string);
        $result = mysqli_fetch_assoc($mysqli_result);
        mysqli_free_result($mysqli_result);
        return $result;
    }

    public static function fetch_array($query_string) {
        $result = [];
        $mysqli_result = self::query($query_string);
        while ($row = mysqli_fetch_assoc($mysqli_result)) {
            $result[] = $row;
        }
        mysqli_free_result($mysqli_result);
        return $result;
    }

    public static function insert($table, $data) 
    {
        $fields = "(" . implode(", ", array_keys($data)) . ")";
        $values = "";
        foreach ($data as $field => $value) {
            if ($value === NULL)
                $values .= "NULL, ";
            else
                $values .= "'" . $this->escape_string($value) . "', ";
        }
        $values = substr($values, 0, -2);
        self::query("
                INSERT INTO $table $fields
                VALUES($values)
            ");
        return mysqli_insert_id($this->conn);
    }

    public static function update($table, $data, $where) {
        $sql = "";
        foreach ($data as $field => $value) {
            if ($value === NULL)
                $sql .= "$field=NULL, ";
            else
                $sql .= "$field='" . $this->escape_string($value) . "', ";
        }
        $sql = substr($sql, 0, -2);
        self::query("
                UPDATE $table
                SET $sql
                WHERE $where
       ");
        return mysqli_affected_rows($this->conn);
    }

    public static function delete($table, $where) {
        $query_string = "DELETE FROM " . $table . " WHERE $where";
        self::query($query_string);
        return mysqli_affected_rows($this->conn);
    }

    public function escape_string($str) 
    {
        return mysqli_real_escape_string($this->conn, $str);
    }

    public function sql_error($message, $query_string = "") 
    {
        $sqlerror = "<table width='100%' border='1' cellpadding='0' cellspacing='0'>";
        $sqlerror.="<tr><th colspan='2'>{$message}</th></tr>";
        $sqlerror.=($query_string != "") ? "<tr><td nowrap> Query SQL</td><td nowrap>: " . $query_string . "</td></tr>\n" : "";
        $sqlerror.="<tr><td nowrap> Error Number</td><td nowrap>: " . mysqli_errno($this->conn) . " " . mysqli_error($this->conn) . "</td></tr>\n";
        $sqlerror.="<tr><td nowrap> Date</td><td nowrap>: " . date("D, F j, Y H:i:s") . "</td></tr>\n";
        $sqlerror.="<tr><td nowrap> IP</td><td>: " . getenv("REMOTE_ADDR") . "</td></tr>\n";
        $sqlerror.="<tr><td nowrap> Browser</td><td nowrap>: " . getenv("HTTP_USER_AGENT") . "</td></tr>\n";
        $sqlerror.="<tr><td nowrap> Script</td><td nowrap>: " . getenv("REQUEST_URI") . "</td></tr>\n";
        $sqlerror.="<tr><td nowrap> Referer</td><td nowrap>: " . getenv("HTTP_REFERER") . "</td></tr>\n";
        $sqlerror.="<tr><td nowrap> PHP Version </td><td>: " . PHP_VERSION . "</td></tr>\n";
        $sqlerror.="<tr><td nowrap> OS</td><td>: " . PHP_OS . "</td></tr>\n";
        $sqlerror.="<tr><td nowrap> Server</td><td>: " . getenv("SERVER_SOFTWARE") . "</td></tr>\n";
        $sqlerror.="<tr><td nowrap> Server Name</td><td>: " . getenv("SERVER_NAME") . "</td></tr>\n";
        $sqlerror.="</table>";
        $msgbox_messages = "<meta http-equiv=\"refresh\" content=\"9999\">\n<table class='smallgrey' cellspacing=1 cellpadding=0>" . $sqlerror . "</table>";
        echo $msgbox_messages;
        exit;
    }
}
