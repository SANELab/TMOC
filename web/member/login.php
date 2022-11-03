<?php session_start(); ?>
<?php $title = 'TMOC'; ?>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>
<body>
	<main role="main">
<?php
	if(isset($_SESSION['id'])){
		echo "<script>alert('Already logged in');history.back()</script>";
	}
	if(!isset($_SESSION['id'])){
?>
		<div class="jumbotron">
			<div class="container">
				<h1>Login</h1>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<!-- {% include "components/errors.html" %} -->

					<form method="post" accept-charset="utf-8" autocomplete="off" action="./login_chk.php">
						<div class="form-group">
							<b><label for="id">ID</label></b>
							<input class="form-control" id="id" name="id" required type="text" value="">
						</div>
						<div class="form-group">
							<b><label for="pw">Password</label></b>
							<input class="form-control" id="pw" name="pw" required type="password" value="">
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
<?php } ?>
	</main>
</body>
<?php include('tail.php'); ?>
