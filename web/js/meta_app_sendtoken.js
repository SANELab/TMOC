function init() {
    $("#account").val(web3.eth.accounts[0]);
    moment.locale();
  }
  
  function sendToken() {
    smartContract.sol_sendtoken(
    $("#coin").val(),
    { from: $("#account").val(), gas: 3000000 },
      (err, result) => {
        if (!err) {
          alert("The transaction was sent successfully.\n" + result);
          console.log(result);
        }
      }
    );
  }