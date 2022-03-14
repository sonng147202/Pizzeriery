<template>
<div>
    <Header/>

    <div class="body-text container">
        <router-view></router-view>
	</div>

    <div v-if="!this.$store.state.token">
        <Auth />
    </div>
</div>
</template>

<script>
// ICON
import 'boxicons/css/boxicons.min.css'
// Bootstrap
import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap/dist/css/bootstrap-grid.min.css"
import "bootstrap/dist/js/bootstrap.bundle.min.js"
// CSS all
import '../css/index';
// Simple Notify
import 'simple-notify/dist/simple-notify.min.css'

import Header from "../components/HeaderComponent.vue";
import Slider from "../components/SliderComponent.vue";
import Auth from "../components/AuthModalComponent.vue";

export default {
	computed: {
		isToggleSidebar() {
			return this.$store.state.isToggleSidebar;
		}
	},
	data() {
		return {
		}
	},
    mounted() {
        this.$store.state.token = this.$cookies.get('token');
    },
    beforeUpdate() {
        this.$store.state.token;
    },
    components: {
        Header,
		Slider,
        Auth,
    },
};
</script>

<style>
</style>
