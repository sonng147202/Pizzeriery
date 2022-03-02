<template>
	<div id="main">
		<Header />
		<div class="body-text">
            <router-view></router-view>
        </div>
		<Auth />
	</div>
</template>

<script>
import "../../css/app.css";
import Header from "../components/HeaderComponent.vue";
import Auth from "../components/AuthModalComponent.vue";

export default {
	components: {
		Header,
		Auth,
	},
};
</script>

<style>
</style>