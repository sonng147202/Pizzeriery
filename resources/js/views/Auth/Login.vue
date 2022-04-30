<template>
<form method="post" @submit.prevent="AUTH_REQUEST(formData)">
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
import { mapActions } from 'vuex';
export default {
    data() {
        return {
            formData: {
                email: '',
                password: '',
            }
        }
    },
    methods: {
        ...mapActions(['AUTH_REQUEST'])
    }
}
</script>

<style>

</style>
