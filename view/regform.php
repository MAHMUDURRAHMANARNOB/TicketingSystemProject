<!DOCTYPE html>
<html lang = "en">
<head>
<title>Ticketing System</title>
<center>
<tittle><h1 style= " font-family:Times New Roman;">REGISTRATION FORM</h1><br></tittle>

</head>

<body style = "background: url(https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80) ; background-size: 100% ;">
  


<form action="http://localhost/TicketingSystem/control/insert.php" onsubmit="return RegValidateForm()" method="post" enctype ="multipart/form-data"> 
  <table border= "2" height ="400px" width="30%">
  <tr bgcolor = Harlequin>
        <th colspan="2">SIGN UP</th>
      </tr>
      
      <tr bgcolor="beige">
        <td>User Name</td>
        
        <td><input type="text" name="name" id="name" placeholder="Type your name"></td>
      </tr>

      <tr bgcolor="beige">
        <td>Phone</td>
        
        <td>
        +880 <input type="text" name="phone" id="phone" placeholder="Type your contact number"></td>
      </tr>

      <tr bgcolor="beige">
        <td>Email</td>
        
        <td><input type="text" name="email"  id="email" placeholder="Type your email "></td>
      </tr>

      <tr bgcolor="beige">

        <td>Catagory</td>
        <td><select name="cat" id="cat">
        
        <option> Seller</option> 
        <option> Buyer</option>
        
        
        </select></td>
      </tr>

      <tr bgcolor="beige">
        <td>Date of Birth</td>
        
        <td><input type ="date" name="dob" id="dob"> </td>
      </tr>

      <tr bgcolor="beige">
        <td>Password</td>
        
        <td><input type="password" name="passwords" id = "password" placeholder="Enter you password"></td>
      </tr>

      <tr bgcolor="beige">
      <td>Confirm Password</td>
        
      <td><input type="password"name="cpassword" id="cpassword" placeholder="Confirm password "></td>
      </tr>

     
         

      <tr bgcolor = Harlequin>
      <td colspan="2">
      <input style="margin-right: 40px; height: 30px; width: 70px" type="Submit" value= "Register">
      <input style= "margin-right: 40px;height: 31px; width: 70px" type="Reset" value= "Clear">
      <a href="ProjectLogin.php"><input style= " height: 31px; width: 70px" type="button" value= "Back"></a>
      <a href="tearmscond.php"><input style= " margin-left: 40px; height: 31px; width: 100px" type="button" value= "Tearm & Cond."></a>
      </td>
      </tr>

   

   </table>
   </center>
   <script src = "../javascript/validation.js"></script>
</body>
</html>