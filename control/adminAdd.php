<!DOCTYPE html>
<html lang="en">
<head>

<!-- mdb cdn -->
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
  rel="stylesheet"
/>

<link rel="stylesheet" href = "../css/style.css">
<link rel="stylesheet" href = "../css/admin.css">

<style>
        .myDiv {
        border: 5px outset red;
        background-color: lightblue;
        text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
            <div class="container-fluid">
                <ul>
                    <li class="dropdown">
                        <a class="dropbtn" href="#">Account</a>
                            <div class="dropdown-content">
                                <a href="../control/buyerUpdate.php">Edit Account</a>
                                <a href="../view/ProjectLogin.php">Logout</a>
                            </div>
                        </li>
                            
                        <li class="dropdown">
                            <a class="dropbtn" href="#">About</a>
                                <div class="dropdown-content">
                                    <a href="help.php">Help</a>
                                </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropbtn" href="#">Manage</a>
                                <div class="dropdown-content">
                                    <a href="adminInsert.php">Add User</a>
                                    <a href="../control/adminRemove.php">Remove User</a>
                                    <a href="../control/cancelTicket.php">Cancel Tickets</a>
                                </div>
                        </li>
                    <li class="dropdown"><a class="dropbtn" href="../view/admin.php">Home</a></li>   
                </ul>
            </div>
    </nav>
    

    <div id="intro" class="bg-image shadow-2-strong">
        <!-- <div class="mask d-flex align-items-center h-50" style="background-color: red;"> -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-md-8">
                        <form action="http://localhost/TicketingSystem/control/adminInsert.php" method="post" class="bg-white  rounded-5 shadow-5-strong p-5" enctype ="multipart/form-data">     
                        
                            <div class="form-outline mb-4">
                            <label class="form-label" for="name" >Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Type your name"/> 
                            </div>
                            <div class="form-outline mb-4">
                            <label class="form-label" for="phone">Phone</label>
                                <input type="text" name="phone" id="phone"  class="form-control" placeholder="Type your Phone"/> 
                            </div>
                            <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control"placeholder="Type your Email"/> 
                            </div>
                            <div class="form-outline mb-4">
                            <label class="form-label" for="cat">Catagory</label>
                                <input type="text" name="cat" id="cat"  class="form-control" placeholder="Type your Category"/> 
                            </div>
                            <div class="form-outline mb-4">
                            <label class="form-label" for="dob">Date of birth</label>
                                <input type="date" name="dob" id="dob" class="form-control" placeholder="Type your DOB"/> 
                            </div>
                            <div class="form-outline mb-4">
                            <label class="form-label" for="passwords">Password</label>
                                <input type="text" name="passwords" id="passwords" class="form-control" placeholder="Type your Password"/> 
                            </div>
                            <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example1">Confirm Password</label>
                                <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="retype password"/> 
                            </div>
                            <div class="form-outline mb-4">
                            <input style="margin-right: 40px; height: 30px; width: 70px" type="Submit" value= "Register">
                            </div>
                        
                        <!-- <div>phone<input type="text" name="phone" id="phone" placeholder="Type your name"><br></div>
                        <div>email<input type="text" name="email" id="email" placeholder="Type your name"><br></div>
                        <div>catagory<input type="text" name="cat" id="cat" placeholder="Type your name"><br></div>
                        <div>date of birth<input type="date" name="dob" id="dob" placeholder="Type your name"><br></div>
                        <div>password<input type="password" name="passwords" id="passwords" placeholder="Type your name"><br></div>
                        <div>cpassword<input type="password" name="cpassword" id="cpassword" placeholder="Type your name"><br></div>
                        <div><input style="margin-right: 40px; height: 30px; width: 70px" type="Submit" value= "Register"><br></div> -->
                        </form>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>   

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"
></script>
<body>

