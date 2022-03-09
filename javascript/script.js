function ajaxC() {
  let a = document.getElementById("catagory").value;

  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../control/catagorysearch.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      //var  xyz = JSON.parse(this.responseText);
      //alert(xyz.deptdata);
      document.getElementById("heading03").innerHTML = this.responseText;
    }
  };

  xhttp.send("mydata=" + a);
}

function ajax1() {
  let a = document.getElementById("regtable").value;

  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../control/regtableshow.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      //var  xyz = JSON.parse(this.responseText);
      //alert(xyz.deptdata);
      document.getElementById("heading02").innerHTML = this.responseText;
    }
  };

  xhttp.send("mydata=" + a);
}

function ajax2() {
  let a = document.getElementById("ticket").value;

  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../control/tickettableshow.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      //var  xyz = JSON.parse(this.responseText);
      //alert(xyz.deptdata);
      document.getElementById("heading02").innerHTML = this.responseText;
    }
  };

  xhttp.send("mydata=" + a);
}

function ajax3() {
  let a = document.getElementById("reviews").value;

  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../control/reviewsshow.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      //var  xyz = JSON.parse(this.responseText);
      //alert(xyz.deptdata);
      document.getElementById("heading02").innerHTML = this.responseText;
    }
  };

  xhttp.send("mydata=" + a);
}

function ajaxB() {
  let a = document.getElementById("departure").value;
  let b = document.getElementById("destination").value;
  let c = document.getElementById("date").value;

  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../control/ticketsearch.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      //var  xyz = JSON.parse(this.responseText);
      //alert(xyz.deptdata);
      document.getElementById("heading02").innerHTML = this.responseText;
    }
  };

  xhttp.send("mydata=" + a + "&mydata2=" + b + "&mydata3=" + c);
}

function ajaxS() {
  let a = document.getElementById("date_of_journey").value;

  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../control/ticketdatesearch.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      //var  xyz = JSON.parse(this.responseText);
      //alert(xyz.deptdata);
      document.getElementById("heading03").innerHTML = this.responseText;
    }
  };

  xhttp.send("mydata=" + d);
}
