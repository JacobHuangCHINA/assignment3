window.onload = function(){
  prepareListener();
}
function prepareListener(){
  var droppy;
  droppy = document.getElementById("pickaCustomer");
  droppy.addEventListener("change",getArt);
}

function getArt(){
  this.form.submit();
}
