function init() {
  // Get metamask account address
  web3.eth.getAccounts((err, res) => {                   
    $("#account").val(res[0]);
    console.log(res[0]);
  });
}

function addThreatScore() {
  smartContract.sol_addThreatScore(
  $("#eval_user_id").val(),
  $("#eval_threat_number").val(),
  $("#eval_threat_score").val(),
    { from: $("#account").val(), gas: 3000000 },
    (err, result) => {
      if (!err) {
        alert("Transaction Success.\n" + result);
        addScore_db('./evaluate_threat_db',{eval_threat_score:$("#eval_threat_score").val(), eval_threat_number:$("#eval_threat_number").val()});
    }
  }
  );
}

function addLibraryScore(){
  smartContract.sol_addLibraryScore(
  $("#eval_user_id").val(),
  $("#eval_lib_number").val(),
  $("#eval_lib_score").val(),
    { from: $("#account").val(), gas: 3000000 },
    (err, result) => {
      if (!err) {
        alert("Transaction Success.\n" + result);
        addScore_db('./evaluate_lib_db',{eval_lib_score:$("#eval_lib_score").val(), eval_lib_number:$("#eval_lib_number").val()}); 
        // 트랜잭션 성공 시 DB에 해당 위협 정보 등록
      }
    }
  );
}

function addTreeScore(){
  smartContract.sol_addTreeScore(
  $("#eval_user_id").val(),
  $("#eval_tree_number").val(),
  $("#eval_tree_score").val(),
    { from: $("#account").val(), gas: 3000000 },
    (err, result) => {
      if (!err) {
        alert("Transaction Success.\n" + result);
        addScore_db('./evaluate_tree_db',{eval_tree_score:$("#eval_tree_score").val(), eval_tree_number:$("#eval_tree_number").val()});
    }
    }
  );
}

function addScore_db(path, params, method='post') {
  const form = document.createElement('form');
  form.method = method;
  form.action = path;
  for (const key in params) {
    if (params.hasOwnProperty(key)) {
      const hiddenField = document.createElement('input');
      hiddenField.type = 'hidden';
      hiddenField.name = key;
      hiddenField.value = params[key];
      form.appendChild(hiddenField);
    }
  }
  document.body.appendChild(form);
  form.submit();
}

$(function() {
  init();
});
