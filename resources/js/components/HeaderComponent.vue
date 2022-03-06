<template>
	<div class="menu-container">
		<input type="checkbox" id="openmenu" class="hamburger-checkbox">
		
		<div class="hamburger-icon">
			<label for="openmenu" id="hamburger-label">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			</label>    
		</div>

		<ul class="menu-mini">
			<li class="mm-sub btn-auth">
				<button @click="changeToggleAuth" class="mm-link btn rounded-pill bg-dark text-white me-3">
					Login & SignUp
				</button>
			</li>
			<li class="mm-sub">
				<a href="#" class="mm-link cart-icon">
					<box-icon name='cart-alt'></box-icon>
					<span class="num-cart">9+</span>
				</a>
			</li>
		</ul>

		<div class="menu-pane">
			<ul class="menu-links">
				<li>
					<router-link tag="a" to="/">
						<h3>Home</h3>
					</router-link>
				</li>
				<li>
					<router-link tag="a" to="/products">
						<h3>Menu</h3>
					</router-link>
				</li>
			</ul>
		</div>
		
	</div>
</template>

<script>
    import '../../css/header.css';
	import 'boxicons';

export default {
	// computed: {
	// 	toggleAuth(){
	// 		return this.$store.state.isToggleAuth
	// 	}
	// },
	methods: {
		changeToggleAuth() {
			this.$store.state.isToggleAuth = !this.$store.state.isToggleAuth;
		}
	}
}
</script>

<style>

</style>