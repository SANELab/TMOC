<!DOCTYPE html>
<?php
$title = 'TMOC';
include('head.php');
include('navbar.php');
include('dbconn.php');
include('meta_conn_account.php');
?>
<?php
    if(!isset($_SESSION['id'])){
        echo "<script>location.href='./login.php';</script>";
	}
?>

<html>
<head>
  <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="./js/lib/web3-light@0.20.6.js"></script>
  <script type="text/javascript" src="./js/lib/moment.js"></script>
  <script type="text/javascript" src="./js/lib/moment_locale.js"></script>
  <script type="text/javascript" src="./js/abi.js"></script>
  <script type="text/javascript" src="./js/meta_app_connect.js"></script>
  <script type="text/javascript" src="./js/app_evaluate.js"></script>
</head>
<body>
  <main role="main">
    <div class="jumbotron">
        <div class="container">
            <h1>Evaluate</h1>
        </div>
    </div>
    <div class="container">
      <div class="form-group">
        <label>
          Cryptocurrency Wallet Account
          <small class="form-text text-muted">
            This field is filled in automatically
          </small>
        </label>
        <input class="form-control" type="text" id="account" value="<?php echo $record["u_walletaddress"]; ?>" placeholder="Metamask wallet address" required />
      </div>
      <div class="form-group">
        <!-- 여기에 각 항목에 대한 평가 기능 추가 -->
        <label>
          Input Evaluator ID
        </label>
        <input class="form-control" type="text" id="eval_user_id" placeholder="User ID" required />
      </div>
      <div class="form-group">
        <label>
        Evaluate Threat
        </label>
        <div class="row">
          <div class="col-md-4">
            <input class="form-control" type="text" id="eval_threat_number" placeholder="Threat Number" />
          </div>
          <div class="col-md-3">
            <select class="form-control custom-select d-inline-block" id="eval_threat_score" name="Threat Score">
              <option value='0'>0 point</option>
              <option value='1'>1 point</option>
              <option value='2'>2 point</option>
            </select>
          </div>
          <div class="col-md-5">
            <div class="form-group">
              <div class="d-inline-block float-right">
                <button class="btn-sm btn-primary float-right" onClick="addThreatScore()"><h6>Threat Score Submit</h6></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>
        Evaluate Attack Library
        </label>
        <div class="row">
          <div class="col-md-4">
            <input class="form-control" type="text" id="eval_lib_number" placeholder="Library Number" />
          </div>
          <div class="col-md-3">
            <select class="form-control custom-select d-inline-block" id="eval_lib_score" name="Library Score">
              <option value='0'>0 point</option>
              <option value='1'>1 point</option>
              <option value='2'>2 point</option>
            </select>
          </div>
          <div class="col-md-5">
            <div class="form-group">
              <div class="d-inline-block float-right">
                <button class="btn-sm btn-primary float-right" onClick="addLibraryScore()"><h6>Attack Library Score</h6></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>
        Evaluate Attack Tree
        </label>
        <div class="row">
          <div class="col-md-4">
            <input class="form-control" type="text" id="eval_tree_number" placeholder="Tree Number" />
          </div>
          <div class="col-md-3">
            <select class="form-control custom-select d-inline-block" id="eval_tree_score" name="Tree Score">
              <option value='0'>0 point</option>
              <option value='1'>1 point</option>
              <option value='2'>2 point</option>
            </select>
          </div>
          <div class="col-md-5">
            <div class="form-group">
              <div class="d-inline-block float-right">
                <button class="btn-sm btn-primary float-right" onClick="addTreeScore()"><h6>Attack Tree Score Submit</h6></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
