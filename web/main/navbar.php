<?php 
    include('dbconn.php');
    $id=$_SESSION['id'];
    $sql="SELECT u_id FROM members WHERE u_id='$id'";
    $result=mysqli_query($dbconn, $sql);
    $record=mysqli_fetch_array($result);
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container">
        <a href="./" class="navbar-brand">
            TMoC
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#base-navbars"
                aria-controls="base-navbars" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="base-navbars">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./dfd/dfd">DFD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./meta_lib">Attack Library</a>
                </li>
                <li class="nav-item">
		            <a class="nav-link" href="./meta_threats">Threat</a>
		        </li>
                <li class="nav-item">
                    <a class="nav-link" href="./meta_attacktree">Attack Tree</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./history">History</a>
                </li>
            </ul>
            <hr class="d-sm-flex d-md-flex d-lg-none">

            <ul class="navbar-nav ml-md-auto d-block d-sm-flex d-md-flex">
            <?php
                if($record) { # if logged in
                    if($record['u_id']=="test") { # admin only
            ?>
            <li class="nav-item">
                <a class="nav-link" href="./evaluate">
                    <span class="d-block" data-toggle="tooltip" data-placement="bottom" title="Admin Panel">
                        <i class="fas fa-wrench d-none d-md-block d-lg-none"></i>
                    </span>
                    <span class="d-sm-block d-md-none d-lg-block">
                        <i class="fas fa-wrench pr-1"></i>Evaluate
                    </span>
                </a>
            </li>
<?php
        }
?>
            <li class="nav-item">
                <a class="nav-link" href="./meta_exchange">
                    <span class="d-block" data-toggle="tooltip" data-placement="bottom" title="Exchange">
                        <i class="fas d-none d-md-block d-lg-none"><img src="./img/exchange.png" style="height:19px" /></i>
                    </span>
                    <span class="d-sm-block d-md-none d-lg-block">
                        <i class="fas pr-1"><img src="./img/exchange.png" style="height:19px" /></i>Exchange
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./member/profile">
                    <span class="d-block" data-toggle="tooltip" data-placement="bottom" title="Profile">
                        <i class="fas fa-user-circle d-none d-md-block d-lg-none"></i>
                    </span>
                    <span class="d-sm-block d-md-none d-lg-block">
                        <i class="fas fa-user-circle pr-1"></i>Profile
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./member/logout">
                    <span class="d-block" data-toggle="tooltip" data-placement="bottom" title="Logout">
                        <i class="fas fa-sign-out-alt d-none d-md-block d-lg-none"></i>
                    </span>
                    <span class="d-sm-block d-md-none d-lg-block">
                        <i class="fas fa-sign-out-alt pr-1"></i><span class="d-lg-none">Logout</span>
                    </span>
                </a>
            </li>
<?php
    }
    else {
?>
                    <li class="nav-item">
                        <a class="nav-link" href="./member/register">
                            <span class="d-block" data-toggle="tooltip" data-placement="bottom" title="Register">
                                <i class="fas fa-user-plus d-none d-md-block d-lg-none"></i>
                            </span>
                            <span class="d-sm-block d-md-none d-lg-block">
                                <i class="fas fa-user-plus pr-1"></i>Register
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./member/login">
                            <span class="d-block" data-toggle="tooltip" data-placement="bottom" title="Login">
                                <i class="fas fa-sign-in-alt d-none d-md-block d-lg-none"></i>
                            </span>
                            <span class="d-sm-block d-md-none d-lg-block">
                                <i class="fas fa-sign-in-alt pr-1"></i>Login
                            </span>
                        </a>
                    </li>
<?php
    }
?>
            </ul>
        </div>
    </div>
</nav>

