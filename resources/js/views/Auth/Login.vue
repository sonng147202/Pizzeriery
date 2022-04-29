<template>
<form>
    <div class="mb-3">
        <label for="txtEmail" class="form-label">Email address</label>
        <input type="text" class="form-control" id="txtEmail" v-model="form.email">
    </div>
    <div class="mb-3">
        <label for="txtPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="txtPassword" v-model="form.password">
    </div>
    <button class="btn btn-danger" @click="AUTH_REQUEST(form)">Submit</button>
</form>
</template>

<script>
import { mapActions } from 'vuex';
export default {
    data() {
        return {
            form: {
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
