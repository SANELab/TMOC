function init() {
  $("#account").val(web3.eth.accounts[0]);
  moment.locale();
}

function loadFile(input)
{
  var file = input.files[0]; 

  var name = document.getElementById('chooseFile');
  name.textContent = file.name;
   
    var newImage = document.createElement("img");
  newImage.setAttribute("class", 'img');

    newImage.src = URL.createObjectURL(file);

  newImage.style.width = "70%";
  newImage.style.height = "70%";
  newImage.style.visibility = "hidden";
  newImage.style.objectFit = "contain";

    var container = document.getElementById('image-show');
  container.appendChild(newImage);  
};


function showImage()
{
  var newImage = document.getElementById('image-show').lastElementChild;
  newImage.style.visibility = "visible";
  var file = $("#chooseFile")[0].files[0];
  get_hash(file);
}

function get_hash(file) {
  var reader = new FileReader();
  if(!file) {
    alert("No file readed!");
    return;
  }
  reader.onload = function(){
    var file_res = this.result;
    var file_wordArr = CryptoJS.lib.WordArray.create(file_res); // Convert to string
    var hash_res = CryptoJS.SHA256(file_wordArr).toString(); // Calculate Result

    var hashDiv = document.getElementById("hashDiv");
    var hashElement = document.createElement("input");
    hashElement.setAttribute("type", "text");
    hashElement.setAttribute("id", "imageHash");
    hashElement.setAttribute("name", "imageHash");
    hashElement.setAttribute("value", hash_res);
    hashElement.style.visibility = "hidden";
    hashDiv.appendChild(hashElement);
  }
  reader.readAsArrayBuffer(file);
}

function addTree() {
  smartContract.sol_addTree(
    $("#tree_number").val(),
    $("#imageHash").val(),
    $("#tree_uploader").val(),
    { from: $("#account").val(), gas: 3000000 },
    (err, result) => {
      if (!err) {
        alert("Transaction success: " + result);
        addTree_db('./meta_attacktree_db',{tree_number:$("#tree_number").val(), tree_hash:$("#imageHash").val(), tree_uploader:$("#tree_uploader").val()});
      }
    }
  );
}

function addTree_db(path, params, method='post'){
  const form = document.createElement('form');
  form.method = method;
  form.action = path;
  form.enctype = "multipart/form-data";
  for (const key in params) {
    if (params.hasOwnProperty(key)) {
      const hiddenField = document.createElement('input');
      hiddenField.type = 'hidden';
      hiddenField.name = key;
      hiddenField.value = params[key];
      form.appendChild(hiddenField);
    }
  }

  const file = document.getElementById("chooseFile");
  const file_clone = file.cloneNode();
  console.log(file_clone+" : "+file_clone.name+" : "+file_clone.type+" : "+file_clone.value);
  form.appendChild(file_clone);

  document.body.appendChild(form);
  form.submit();
}

$(function() {
  init();
});
