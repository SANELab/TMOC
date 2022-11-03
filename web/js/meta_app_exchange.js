function init() {
  $("#account").val(web3.eth.accounts[0]);
  moment.locale();
}

function exchange() {
  smartContract.sol_addExchange(
    $("#point").val(),
    $("#coin").val(),
    $("#remaining").val(),
    { from: $("#account").val(), gas: 3000000 },
    (err, result) => {
      if (!err) {
        alert("Transaction success: " + result);
        var exchangepoint = Number($("#coin").val().replace(/[^0-9]/g,''));
        var remainingpoint = Number($("#remaining").val().replace(/[^0-9]/g,''));
        exchange_db('./meta_exchange_db',{point:exchangepoint, remaining:remainingpoint});
      }
    }
  );
}

function exchange_db(path, params, method='post'){
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

$(document).ready(function() {
  var elem = $('#point');

  // Save current value of element
  elem.data('oldVal', elem.val());

  // Look for changes in the value
  elem.bind("propertychange change paste", function(event){
    // If value has changed...
    elem.val(elem.val().replace(/[^0-9]/g,''));
    // Do action
    var currentVal = Number(elem.val());
    var maxVal = Number($('#maximumpoint').text());
    if(currentVal > maxVal){
      alert("Maximum exchangable point: " + String(maxVal));
      elem.val('');
      currentVal = 0;
    } else if(elem.val() == null || elem.val() == 'NaN points' || elem.val() == ''){
      currentVal = 0;
    }
    elem.val(String(currentVal) + " points");
    $('#coin').val(String(currentVal / 10) + " tmoc");
    $('#remaining').val(String(maxVal - currentVal) + " points");
  });

  // Initialize input box when focused
  elem.bind("focusin", function(event){
    elem.val('');
    elem.bind("focusout", function(event){
      if(elem.val() == '' || elem.val() == null){
        var tmoc = $('#coin').val();
        tmoc = Number(tmoc.replace(/[^0-9]/g,''));
        elem.val(String(tmoc*10) + " points");
      }
    })
  });
});