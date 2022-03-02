<template>
    <div>
        <ul v-if="posts && posts.length">
            <li v-for="post of posts" :key="post.id">
                <p><strong>{{post.id}}</strong></p>
                <p>{{post.name}}</p>
            </li>
        </ul>
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
            axios.get(`/data`)
            .then(response => {
                this.posts = response.data
            })
            .catch(e => {
                console.error(e);
            })
        }
    };
</script>

<style>

</style>