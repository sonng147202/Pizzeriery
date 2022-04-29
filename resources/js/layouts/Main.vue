<template>
<div>
    <Header/>

    <div class="body-text container">
        <router-view></router-view>
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

export default {
    components: {
        Header,
		Slider,
    },
};
</script>

<style>
</style>
