<template>
<!--header menu start-->
<div class="header">
	<div class="header-menu">
		<div class="title">Shop <span>Pizzeriery</span></div>
		<div class="sidebar-btn" @click="toggleSidebar">
			<i class="icofont-navigation-menu"></i>
		</div>
		<ul>
			<li><a href="#"><i class="icofont-cart-alt"></i></a></li>
			<li @click="changeToggleAuth"><a href="#"><i class="icofont-user"></i></a></li>
		</ul>
	</div>
</div>
<!--header menu end-->
</template>

<script>

export default {
	computed: {
		tokenUser() {
            return this.$store.state.token;
        },
	},
	methods: {
		changeToggleAuth() {
			this.$store.state.isToggleAuth = !this.$store.state.isToggleAuth;
		},
		toggleSidebar() {
			this.$store.state.isToggleSidebar = !this.$store.state.isToggleSidebar;
		}
	}
}
</script>

<style>

</style>