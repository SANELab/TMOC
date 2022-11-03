<?php
  $title = 'TMOC';
  include('head.php');
  include('navbar.php');
  include('meta_conn_account.php');

  if(!isset($_SESSION['id'])){
    echo "<script>location.href='./login';</script>";
  }

  include('dbconn.php'); // for counting rows
  $numrowsql = "select * from tmoc_attacktree";
  $result = mysqli_query($dbconn, $numrowsql);
  $count = mysqli_num_rows($result);
?>

<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
<script type="text/javascript" src="./js/lib/web3-light@0.20.6.js"></script>
<script type="text/javascript" src="./js/lib/moment.js"></script>
<script type="text/javascript" src="./js/lib/moment_locale.js"></script>
<script type="text/javascript" src="./js/abi.js"></script>
<script type="text/javascript" src="./js/meta_app_connect.js"></script>
<script type="text/javascript" src="./js/meta_app_tree.js"></script>
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
            <h1>Attack Tree</h1>
            <h6>Create an Attack Tree according to the collection results of the Attack Library and threat tab and how to create an Attack tree.</h6>
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
        Tree Number
        <small class="form-text text-muted">
          This field is filled in automatically
        </small>
      </label>
      <input class="form-control" type="text" id="tree_number" placeholder="Attack Tree Number" value="AT<?php echo $count+1; ?>" readonly required />
    </div>
    <div class="form-group">
      <label>
        Tree Uploader
        <small class="form-text text-muted">
          This field is filled in automatically
        </small>
      </label>
      <input class="form-control" type="text" id="tree_uploader" value="<?php echo $_SESSION['id'] ?>" title="" readonly required />
    </div>
    <div class="form-group">
      <label>
        File
        <small class="form-text text-muted">
          Upload the attack tree file
        </small>
      </label>
      <input class="form-control" type="file" name="file" id="chooseFile" accept="image/*" onchange="loadFile(this);showImage()">
    </div>
    <button class="btn btn-md btn-primary btn-outlined float-right" onClick="addTree()">Tree Submit</button>
  </div>
  <div class="container text-center" id="image-show"></div>
  <div class="container" id="hashDiv"></div>
</main>
</body>
<?php include('tail.php'); ?>