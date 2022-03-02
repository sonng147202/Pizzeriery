<template>
	<div class="col-lg-8 mx-auto p-3 shadow-4">
		<!-- Pills navs -->
		<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
			<li class="nav-item" role="presentation">
				<a
				class="nav-link active"
				id="tab-login"
				data-mdb-toggle="pill"
				href="#pills-login"
				role="tab"
				aria-controls="pills-login"
				aria-selected="true"
				>Login</a
				>
			</li>
			<li class="nav-item" role="presentation">
				<a
				class="nav-link"
				id="tab-register"
				data-mdb-toggle="pill"
				href="#pills-register"
				role="tab"
				aria-controls="pills-register"
				aria-selected="false"
				>Register</a
				>
			</li>
		</ul>
		<!-- Pills navs -->

		<!-- Pills content -->
		<div class="tab-content">
			<div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
				<form>
					<!-- Email input -->
					<div class="form-outline mb-4">
						<input type="email" id="loginName" class="form-control" />
						<label class="form-label" for="loginName">Email or username</label>
					</div>

					<!-- Password input -->
					<div class="form-outline mb-4">
						<input type="password" id="loginPassword" class="form-control" />
						<label class="form-label" for="loginPassword">Password</label>
					</div>

					<!-- Submit button -->
					<button type="submit" class="btn btn-warning text-dark btn-block mb-2">Sign in</button>
				</form>
			</div>
			<div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
				<form>
					<!-- Name input -->
					<div class="form-outline mb-4">
						<input type="text" id="registerName" class="form-control" />
						<label class="form-label" for="registerName">Name</label>
					</div>

					<!-- Username input -->
					<div class="form-outline mb-4">
						<input type="text" id="registerUsername" class="form-control" />
						<label class="form-label" for="registerUsername">Username</label>
					</div>

					<!-- Email input -->
					<div class="form-outline mb-4">
						<input type="email" id="registerEmail" class="form-control" />
						<label class="form-label" for="registerEmail">Email</label>
					</div>

					<!-- Password input -->
					<div class="form-outline mb-4">
						<input type="password" id="registerPassword" class="form-control" />
						<label class="form-label" for="registerPassword">Password</label>
					</div>

					<!-- Repeat Password input -->
					<div class="form-outline mb-4">
						<input type="password" id="registerRepeatPassword" class="form-control" />
						<label class="form-label" for="registerRepeatPassword">Repeat password</label>
					</div>

					<!-- Submit button -->
					<button type="submit" class="btn btn-warning text-dark btn-block mb-2">Sign up</button>
				</form>
			</div>
		</div>
		<!-- Pills content -->
	</div>
</template>

<script>
	export default {
		
	};
</script>

<style lang="sass" scoped>

</style>