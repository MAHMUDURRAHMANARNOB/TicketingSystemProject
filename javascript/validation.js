function SellerValidateForm()
{
    var from = document.getElementById("from").value;
    var to = document.getElementById("to").value;
    var date = document.getElementById("date").value;
    var seat = document.getElementById("seat").value;
    var bus = document.getElementById("bus").value;
    

    if (from == "" || to == "" || date == "" || seat == "" || bus == "" ) {
      alert("Pleas fill up all the fields");
      return false;
    }
}

function RegValidateForm()
{
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var cat = document.getElementById("cat").value;
    var dob = document.getElementById("dob").value;
    var password = document.getElementById("password").value;
    var cpassword = document.getElementById("cpassword").value
    
   

    if (name=="" || phone == "" ||  email == "" ||   cat == "" ||   dob == "" ||  password == "" || cpassword=="" ) {
      alert("Pleas fill up all the fields");
      return false;
    }

    if(password != cpassword)
    {
      alert("Passwprd Didn't match");
      return false;
    }
}


