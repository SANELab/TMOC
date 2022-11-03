<?php $title = 'TMOC'; ?>
<?php include('main/head.php'); ?>
<?php include('main/navbar.php'); ?>
<?php 
    include('main/dbconn.php');
    $id=$_SESSION[id];
    $sql="SELECT u_id FROM members WHERE u_id='$id'";
    $result=mysqli_query($dbconn, $sql);
    $record=mysqli_fetch_array($result);
?>
<body>
<div class="row">
    <div class="col-md-6 offset-md-3">
        <img class="w-100 mx-auto d-block" style="padding: 15px;padding-top: 14vh;" src="./img/tmoc.jpg" />
        <h3 class="text-center">
            <p>TMoC : Threat Modelers on Chain</p>
        </h3>
        <br>
        <?php
                if(!$record) { # if logged in
        ?>
        <h4 class="text-center">
            <a href="./member/login.php">Click here</a> to login
        </h4>
        <?php
        }
        ?>
    </div>
</div>
</body>
<?php include('main/tail.php'); ?>
