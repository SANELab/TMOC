function init() {
  $("#account").val(web3.eth.accounts[0]);
  moment.locale();
}


function addLibrary() {
  hash_element = CryptoJS.SHA256($("#lib_element").val()).toString();
  hash_contents = CryptoJS.SHA256($("#contents").val()).toString();
  hash_url = CryptoJS.SHA256($("#url").val()).toString();
  
  smartContract.sol_addLibrary(
  $("#no").val(),
  hash_element,
  $("#stride").val().toString(),
  hash_contents,
  hash_url,
  $("#lib_writer").val(),
    { from: $("#account").val(), gas: 3000000 },
    (err, result) => {
      if (!err) {
        alert("The transaction was sent successfully.\n" + result);
        console.log(result);
        var stride_str = $("#stride").val().toString(); // Convert to string
        addLibrary_db('./meta_lib_db',{no:$("#no").val(), lib_element:$("#lib_element").val(),
        stride:stride_str, contents:$("#contents").val(), url:$("#url").val(),lib_writer:$("#lib_writer").val()}); // 트랜잭션 성공 시 DB에 해당 위협 정보 등록
      }
    }
  );
}

function addLibrary_db(path, params, method='post') {
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

function addThreat() {
  hash_element = CryptoJS.SHA256($("#threat_element").val()).toString();
  hash_detail = CryptoJS.SHA256($("#threat_detail").val()).toString();
  hash_reason = CryptoJS.SHA256($("#threat_reason").val()).toString();

  smartContract.sol_addThreat(
  $("#threat_number").val(),
  hash_element,
  hash_detail,
  hash_reason,
  $("#lib_number").val(),
  $("#threat_writer").val(),
    { from: $("#account").val(), gas: 3000000 },
    (err, result) => {
      if (!err) {
        alert("The transaction was sent successfully.\n" + result);
        addThreat_db('./meta_threats_db',{threat_number:$("#threat_number").val(), threat_element:$("#threat_element").val(),
        threat_detail:$("#threat_detail").val(), threat_reason:$("#threat_reason").val(), lib_number:$("#lib_number").val(), 
        threat_writer:$("#threat_writer").val()}); 
      }
    }
  );
}

function addThreat_db(path, params, method='post') {
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

