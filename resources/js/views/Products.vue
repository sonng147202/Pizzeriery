<template>
    <div>
        <ProductComp />
    </div>
</template>

<script>
    import axios from 'axios';

    import ProductComp from '../components/ProductComp/IndexComponent.vue'

    export default {
        data() {
            return {
                posts: [],
            }
        },
        components: {
            ProductComp
        },
        created() {
            axios.get(`/get_products`)
            .then(response => {
                console.log(response.data);
            })
            .catch(e => {
                console.error(e);
            })
        }
    };
</script>

<style>

</style>