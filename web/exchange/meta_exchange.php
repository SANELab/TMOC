<?php
  $title = 'TMOC';
  include('head.php');
  include('navbar.php');
  include('meta_conn_account.php');

  if(!isset($_SESSION['id'])){
    echo "<script>location.href='./login';</script>";
  }

  include('dbconn.php'); // for counting rows
  $sql = "select * from members where u_id='".$_SESSION['id']."'";
  $query = mysqli_query($dbconn, $sql);
  $point = mysqli_fetch_assoc($query);
?>

<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
<script type="text/javascript" src="./js/lib/web3-light@0.20.6.js"></script>
<script type="text/javascript" src="./js/lib/moment.js"></script>
<script type="text/javascript" src="./js/lib/moment_locale.js"></script>
<script type="text/javascript" src="./js/abi.js"></script>
<script type="text/javascript" src="./js/meta_app_connect.js"></script>
<script type="text/javascript" src="./js/meta_app_exchange.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/sha256.js"></script><!-- CryptoJS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/sha256-min.js"></script><!-- CryptoJS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/lib-typedarrays-min.js"></script><!-- CryptoJS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script><!-- CryptoJS -->
<script type="text/javascript">
  web3.eth.getAccounts((err, res) => {                   
    $("#account").val(res[0]);
    //console.log(res[0]);
  });
</script>

<body>
  <main role="main">
    <div class="jumbotron">
        <div class="container">
            <h1>Point Exchange</h1>
            <h6>You can exchange your point to tmoc coin in this page.</h6>
        </div>
    </div>
  <div class="container">
    <!-- 사용자의 지갑 주소 입력 -->
    <!-- 이미지를 업로드 받은 뒤, app_tree.js 파일의 addTree() 함수를 이용하여 블록으로 전송 -->
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
      <label>
        Exchange points  (Maximum: <?php echo $point["u_point"] ?> points)
        <small class="form-text text-muted">
          Write amount of point you want to exchange
        </small>
      </label>
      <br/>
      <input class="form-control" style="width:45%;float:left" type="text" id="point" placeholder="0 points" required />
      <b><label class="form-text" style="width:10%;text-align:center;float:left">to</label></b>
      <input class="form-control" style="width:45%;float:right" type="text" id="coin"  placeholder="0 tmoc" readonly required />
    </div>
    <br/><br/><br/>
    <div class="form-group">
      <label>
        Remaining points
        <small class="form-text text-muted">
          Remaining points after exchange is done
        </small>
      </label>
      <input class="form-control" style="width:45%" type="text" id="remaining" value="<?php echo $point["u_point"] ?> points" title="" readonly required />
    </div>
    <button class="btn btn-md btn-primary btn-outlined float-right" onClick="exchange()">Let's go!</button>
  </div>
</main>
</body>
<label id="maximumpoint" style="visibility:hidden"><?php echo $point["u_point"] ?></label>
<?php include('tail.php'); ?>