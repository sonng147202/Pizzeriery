<template>
<form>
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
    <button class="btn btn-danger" @click="register">Submit</button>
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
        async register() {
            const _this = this;
            try {
                const response = await axios({
                    method: "post",
                    url: "/auth/register",
                    data: _this.formData,
                });
                console.log(response);
                //this.$router.push({ name: 'Login' });

            } catch(error) {
                console.log(error)
            }
        }
    }
}
</script>

<style>

</style>
