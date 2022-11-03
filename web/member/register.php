<?php $title = 'TMOC'; ?>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>
<body>
	<main role="main">
		<div class="jumbotron">
			<div class="container">
				<h1>Register</h1>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<!-- {% include "components/errors.html" %} -->
					
					<form method="post" accept-charset="utf-8" autocomplete="off" role="form" action="./register_chk.php">
						<div class="form-group">
							<b><label for="id">ID</label></b>
							<input class="form-control" id="id" name="id" required type="text" value="">
							<small class="form-text text-muted">
								Your ID on the site
							</small>
						</div>
						<div class="form-group">
							<b><label for="pw">Password</label></b>
							<input class="form-control" id="pw" name="pw" required type="password" value="">
							<small class="form-text text-muted">
								Password used to log into your account
							</small>
						</div>
						<div class="form-group">
							<b><label for="name">Name</label></b>
							<input class="form-control" id="name" name="name" required type="text" value="">
							<small class="form-text text-muted">
								Never shown to the public
							</small>
						</div>
						<div class="form-group">
							<b><label for="wallet_address">Wallet Address</label></b>
							<input class="form-control" id="wallet_address" name="wallet_address" required type="text" value="">
							<small class="form-text text-muted">
								Your Cryptocurrency wallet address
							</small>
						</div>
						<div class="row pt-3">
							<div class="col-md-12">
								<input class="btn btn-md btn-primary btn-outlined float-right" id="_submit" name="_submit" type="submit" value="Submit">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>
</body>
<?php include('tail.php'); ?>
