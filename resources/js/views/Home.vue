<template>
    <div>
        <h1>Home</h1>
        <img :src="image" alt="" width="50" height="50">
    </div>
</template>

<script>
    import Img from '../../img/avatar_default.png';
    export default {
        data: () => {
            return {
                image: Img
            }
        }
    }
</script>

<style>

</style>