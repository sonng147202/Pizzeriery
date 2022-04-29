<template>
<form method="post" @submit.prevent="register"> 
    <div class="mb-3">
        <label for="txtUser" class="form-label">Username</label>
        <input type="text" class="form-control" id="txtUser" v-model="formData.username">
    </div>
    <div class="mb-3">
        <label for="txtEmail" class="form-label">Email address</label>
        <input type="text" class="form-control" id="txtEmail" v-model="formData.email">
    </div>
    <div class="mb-3">
        <label for="txtPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="txtPassword" v-model="formData.password">
    </div>
    <button class="btn btn-danger" type="submit">Submit</button>
</form>
</template>

<script>
import axios from 'axios';

export default {
data() {
        return {
            formData: {
                username: '',
                email: '',
                password: '',
            }
        }
    },
    methods: {
        register() {
            const data = new FormData();
            data.append('username', this.formData.username);
            data.append('email', this.formData.email);
            data.append('password', this.formData.password);

            axios.post('/auth/register', data)
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
        }
    }
}
</script>

<style>

</style>
