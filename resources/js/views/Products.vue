<template>
    <div>
        <!-- <ul v-if="posts && posts.length">
            <li v-for="post of posts" :key="post.id">
                <h1><strong>{{post.id}}</strong></h1>
                <h3>{{post.name}}</h3>
            </li>
        </ul> -->
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        data() {
            return {
                posts: [],
            }
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