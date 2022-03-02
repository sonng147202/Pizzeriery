<template>
    <div id="main">
        <Header/>
        <div class="container">
            
        </div>
        <Footer/>
    </div>
</template>

<script>
    import Header from '../components/HeaderComponent.vue';
    import Footer from '../components/FooterComponent.vue';

    export default {
        components: {
            Header,
            Footer
        }
    };
</script>

<style>
#main > .container{
    margin-top: 100px;
}
</style>