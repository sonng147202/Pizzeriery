<template>
	<div id="main">
		<Header />
		<div class="body-text">
            
        </div>
		<Slider />
		<Auth />
	</div>
</template>

<script>
import "../../css/app.css";
import Header from "../components/HeaderComponent.vue";
import Auth from "../components/AuthModalComponent.vue";
import Slider from "../components/SliderComponent.vue";

export default {
	components: {
		Header,
		Auth,
		Slider,
	},
};
</script>

<style>
</style>