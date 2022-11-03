<?php $title = 'TMOC'; ?>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>
<?php
    if(!isset($_SESSION['id'])){
        echo "<script>location.href='./login';</script>";
    }
    else{
?>
<body>
	<main role="main">
		<div class="jumbotron">
			<div class="container">
				<h1>Profile</h1>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-2 offset-md-1">
					<div class="nav flex-column nav-pills" role="tablist">
						<a class="nav-link active" id="settings-profile-tab" data-toggle="pill" href="#profile" role="tab">Profile</a>
					</div>
				</div>
				<div class="col-md-8">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="profile" role="tabpanel">
							<!-- {% include "components/errors.html" %} -->
							<form id="user-profile-form" method="post" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" action="./profile_chk.php">
								<div class="form-group">
									<b><label for="id">ID</label></b>
									<input class="form-control" id="name" name="name" type="text" value="<?php echo $id;?>">
								</div>

								<hr>

								<div class="form-group">
									<b><label for="current_password">Current Password</label></b>
									<input class="form-control" id="current_password" name="current_password" type="password" value="">
								</div>
								<div class="form-group">
									<b><label for="password">New Password</label></b>
									<input class="form-control" id="pw" name="pw" type="password" value="">
								</div>
								<div class="form-group">
									<b><label for="password_confirm">Password Confirm</label></b>
									<input class="form-control" id="pw_confirm" name="pw_confirm" type="password" value="">
								</div>

								<hr>

								<div class="form-group">
									<b><label for="name">Name</label></b>
									<input class="form-control" id="name" name="name" type="text" value="<?php echo $name;?>">
								</div>
								<div class="form-group">
									<b><label for="wallet_address">Wallet Address</label></b>
									<input class="form-control" id="wallet_address" name="wallet_address" type="text" value="<?php echo $wallet_address;?>">
								</div>

								<hr>

								<div id="results" class="form-group">
								</div>

								<div class="form-group">
									<input class="btn btn-md btn-primary btn-outlined float-right" id="_submit" name="_submit" type="submit" value="Submit">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>
<?php } ?>
<?php include('tail.php'); ?>