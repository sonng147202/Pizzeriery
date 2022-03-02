<template>
	<div class="auth-modal">
		<input id="modal-toggle" type="checkbox" :checked="toggleAuth">
		<label class="modal-backdrop" for="modal-toggle"></label>
		<div class="modal-content">
		<label class="modal-close-btn" for="modal-toggle">
			<svg width="50" height="50">
			<line x1="10" y1="10" x2="40" y2="40" />
			<line x1="40" y1="10" x2="10" y2="40" />
			</svg>
		</label>
		<div class="tabs">
			<!--  LOG IN  -->
			<input class="radio" id="tab-1" name="tabs-name" type="radio" checked>
			<label for="tab-1" class="table"><span>Login</span></label>
			<div class="tabs-content">
			<div class="login_socnet">
				<a href="" class="fa fa-vk" aria-hidden="true"></a>
				<a href="" class="fa fa-google-plus" aria-hidden="true"></a>
				<a href="" class="fa fa-facebook" aria-hidden="true"></a>
			</div>
			<form action="">
				<input type="email" placeholder="Email" required>
				<input type="password" placeholder="Password" required>
				<input type="submit" value="Log In">
			</form>
			<form class="forgot-password" action="">
				<input id="forgot-password-toggle" type="checkbox">
				<label for="forgot-password-toggle">forgot password?</label>
				<div class="forgot-password-content">
				<input type="email" placeholder="enter your email" required>
				<input type="submit" value="go">
				</div>
			</form>
			</div>
			<!--  SIGN UP  -->
			<input class="radio" id="tab-2" name="tabs-name" type="radio">
			<label for="tab-2" class="table"><span>Sign up</span></label>
			<div class="tabs-content">
			<div class="login_socnet">
				<a href="" class="fa fa-vk" aria-hidden="true"></a>
				<a href="" class="fa fa-google-plus" aria-hidden="true"></a>
				<a href="" class="fa fa-facebook" aria-hidden="true"></a>
			</div>
			<form action="">
				<input type="email" placeholder="Email" required>
				<input type="password" placeholder="Password" required>
				<input type="password" placeholder="Confirm password" required>
				<input type="submit" value="Sign Up">
			</form>
			</div>
		</div>
		</div>
	</div>

</template>

<script>
import '../../css/auth.css';
export default {
	props: {
		toggleAuth: Boolean
	},
};
</script>

<style>
</style>