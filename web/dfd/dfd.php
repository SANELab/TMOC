<?php $title = 'TMOC'; ?>
<?php include('../main/head.php'); ?>
<?php include('../main/navbar.php'); ?>
<?php
    if(!isset($_SESSION['id'])){
        echo "<script>location.href='./login.php';</script>";
    }
    else{
?>
<body>
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1>Data Flow Diagram</h1>
                <br/>
                <h6>Diagram showing the internal data flow of an analysis target.</h6>
                <h6>It is used in attack library and threat elicitation.</h6>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <img class="w-100 mx-auto" src="./../img/dfd_level0.png" />
                </div>
            </div>
        </div>
    </main>
</body>
<?php
    }
?>
<?php include('../main/tail.php'); ?>
