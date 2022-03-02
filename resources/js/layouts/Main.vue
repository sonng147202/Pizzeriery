<template>
    <div id="main">
        <Header 
        :toggleAuth="isToggleAuth"
        @toggleAuthWasEdit="isToggleAuth = $event"
        />
        <div class="body-text">
			<h1>Code Pen Challenge</h1>
			<h2>January 2019</h2>
			<p>Made with love (and pure CSS)</p>
		</div>
        <Auth
        :toggleAuth="isToggleAuth"
        />
    </div>
</template>

<script>
    import '../../css/app.css';
    import Header from '../components/HeaderComponent.vue';
    import Auth from '../components/AuthModalComponent.vue';

    export default {
        data: () => {
            return {
                isToggleAuth: false
            }
        },
        components: {
            Header,
            Auth
        }
    };
</script>

<style>

</style>