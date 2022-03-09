<template>
	<div id="main">
		<Header />
		<div class="body-text">
			<h1>{{this.$store.state.token}}</h1>
            <router-view></router-view>
        </div>
		<div v-if="!this.$store.state.token">
			<Auth />
		</div>
	</div>
</template>

<script>
import "../../css/app.css";
import Header from "../components/HeaderComponent.vue";
import Auth from "../components/AuthModalComponent.vue";

export default {
	mounted() {
		this.$store.state.token = this.$cookies.get('token');
	},
	beforeUpdate() {
        console.log(this.$store.state.token);
    },
	components: {
		Header,
		Auth,
	},
};
</script>

<style>
</style>