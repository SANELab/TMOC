
<?php
  $title = 'TMOC';
  include('head.php');
  include('navbar.php');
  include('dbconn.php');
  include('meta_conn_account.php');

  if(!isset($_SESSION['id'])){
    echo "<script>location.href='./login.php';</script>";
  }

  include('dbconn.php'); // for counting rows
  $numrowsql = "select * from tmoc_attacklibrary";
  $result = mysqli_query($dbconn, $numrowsql);
  $count = mysqli_num_rows($result);
?>
<head>
  <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/sha256.js"></script><!-- CryptoJS -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/sha256-min.js"></script><!-- CryptoJS -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/lib-typedarrays-min.js"></script><!-- CryptoJS -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script><!-- CryptoJS -->
  <script type="text/javascript" src="./js/lib/web3-light@0.20.6.js"></script>
  <script type="text/javascript" src="./js/lib/moment.js"></script>
  <script type="text/javascript" src="./js/lib/moment_locale.js"></script>
  <script type="text/javascript" src="./js/abi.js"></script>
  <script type="text/javascript" src="./js/meta_app_connect.js"></script>
  <script type="text/javascript" src="./js/meta_app_submit.js"></script>
  <script type="text/javascript">
    web3.eth.getAccounts((err, res) => {                   
      $("#account").val(res[0]);
      //console.log(res[0]);
    });
	</script>
</head>
<body>
	<main role="main">
		<div class="jumbotron">
			<div class="container">
				<h1>Attack Library</h1>
        <h6>Write down what threats will exist against the components within the DFD.</h6>
			</div>
		</div>
    <!-- 수정중 -->
    
    <!-- app_library.js 파일에서 불러올 수 있도록 각 항목마다 id 값을 부여  -->
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
        <label>
          Library Number
          <small class="form-text text-muted">
            This field is filled in automatically
          </small>
        </label>
        <input class="form-control" type="text" id="no" placeholder="Library Number" title="This field is filled in automatically" value="<?php echo $count+1; ?>" readonly required />
      </div>
      <div class="form-group">
        <label>
          Related Component
          <small class="form-text text-muted">
            Input software/hardware component name related with this attack(ex. Apache2, Web Server, Active Directory, Shared Directory, etc)
          </small>
        </label>
        <input class="form-control" type="text" id="lib_element" placeholder="Related Component" required />
      </div>
      <div class="form-group">
        <label>
          Attack Type
          <small class="form-text text-muted">
            Select STRIDE (If you want to make multiple selections, Use the CTRL key.)
          </small>
        </label>
        <select class="form-control custom-select" multiple="multiple" type="text" id="stride" size="6">
          <option value="S">S (Spoofing)</option>
          <option value="T">T (Tampering)</option>
          <option value="R">R (Repudiation)</option>
          <option value="I">I (Information Disclosure)</option>
          <option value="D">D (Denial of Service)</option>
          <option value="E">E (Elevation of Privilege)</option>
        </select>
      </div>
      <div class="form-group">
        <label>
          Library Contents
          <small class="form-text text-muted">
            Detailed description for the attack
          </small>
        </label>
        <textarea class="form-control" type="text" id="contents" rows="5" placeholder="Library Contents" required ></textarea>
      </div>
      <div class="form-group">
        <label>
          Reference URL
          <small class="form-text text-muted">
            Input reference URL
          </small>
        </label>
        <input class="form-control" type="text" id="url" placeholder="https://" required >
      </div>
      <div class="form-group">
        <label>
          Library Writer
          <small class="form-text text-muted">
            This field is filled in automatically
          </small>
        </label>
        <input class="form-control" type="text" id="lib_writer" value="<?php echo $_SESSION['id'] ?>" title="" readonly required /></td>
      </div>
      <?php #app_library.js의 addLibrary()함수를 이용하여 입력된 항목을 블록으로 전송 ?>
      <button class="btn btn-md btn-primary btn-outlined float-right" onClick="addLibrary()">Library Submit</button>
      </div>
    </div>
  </div>
	</main>
</body>
<?php include('tail.php'); ?>
