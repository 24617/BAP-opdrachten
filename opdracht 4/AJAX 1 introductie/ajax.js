function loadDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('demo').innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "ajax_info.txt", true);
  xmlhttp.send();
}
