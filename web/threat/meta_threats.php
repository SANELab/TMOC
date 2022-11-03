
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
  $numrowsql = "select * from tmoc_threat";
  $result = mysqli_query($dbconn, $numrowsql);
  $count = mysqli_num_rows($result);
?>
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
<body>
	<main role="main">
		<div class="jumbotron">
			<div class="container">
				<h1>Threats</h1>
        <h6>Based on the collected attack library information, what threats can occur to the components in the DFD.</h6>
			</div>
		</div>
    <!-- 수정중 -->
    <!-- 사용자의 지갑 주소 입력 -->
    <!-- app_threat.js 파일에서 불러올 수 있도록 각 항목마다 id 값을 부여  -->
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
          Threat Number
          <small class="form-text text-muted">
            This field is filled in automatically
          </small>
        </label>
        <input class="form-control" type="text" id="threat_number" placeholder="Threat Number" value="<?php echo $count+1; ?>" readonly required />
      </div>
      <div class="form-group">
        <label>
          Threat Element
          <small class="form-text text-muted">
            Input element name in DFD that this attack is targeting(ex. E1.1 or P2.3.1)
          </small>
        </label>
        <input class="form-control" type="text" id="threat_element" placeholder="Element Name" required />
      </div>
      <div class="form-group">
        <label>
          Threat Contents
          <small class="form-text text-muted">
            Detailed description for threat
          </small>
        </label>
        <textarea class="form-control" type="text" id="threat_detail" rows="5" placeholder="Threat Contents" required ></textarea>
      </div>
      <div class="form-group">
        <label>
          Threat Reason
          <small class="form-text text-muted">
            Explain why this threat can occur in that element
          </small>
        </label>
        <textarea class="form-control" type="text" id="threat_reason" rows="5" placeholder="Threat Reason" required ></textarea>
      </div>
      <div class="form-group">
        <label>
          Attack Library Number
          <small class="form-text text-muted">
            List related attack library ID(number). This can be an evidence of your threat
          </small>
        </label>
        <input class="form-control" type="text" id="lib_number" placeholder="Attack Library Number" required >
      </div>
      <div class="form-group">
        <label>
          Library Writer
          <small class="form-text text-muted">
            This field is filled in automatically
          </small>
        </label>
        <input class="form-control" type="text" id="threat_writer" value="<?php echo $_SESSION['id'] ?>" title="" readonly required /></td>
      </div>
      <button class="btn btn-md btn-primary btn-outlined float-right" onClick="addThreat()">Threat Submit</button>
      </div>
    </div>
  </div>
</main>
</body>
<?php include('tail.php'); ?>
