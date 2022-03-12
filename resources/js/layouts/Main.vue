<template>
<!--wrapper start-->
<div class="wrapper" :class="{ 'slip': isToggleSidebar }">
    <Header/>
    <Slider/>
    <!--main container start-->
    <div class="main-container">
        <router-view></router-view>
    </div>
    <!--main container end-->

    <!-- auth start -->
    <div v-if="!this.$store.state.token">
        <Auth />
    </div>
    <!-- auth end -->
</div>
<!--wrapper end-->
</template>

<script>
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
