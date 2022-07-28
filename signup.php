<?php
include("header.php");
?>

<h1 align=center>Register Here</h1>
<div class="row">
<form id=frmreg method="post" name="myForm">
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input ng-model="name" id="nm" type="text" class="form-control" name="nm" placeholder="Name" pattern="\D+" required>
 
  </div>

<br>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
    <input ng-model="address" id="address" type="text" class="form-control" name="address" placeholder="Address" required>

  </div>

<br>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
    <input ng-model="contact" id="contact" type="text" class="form-control" name="contact" placeholder="Contact No" pattern="\d{10}" required>
  </div>

<br>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input ng-model="unm" id="unm" type="text" class="form-control" name="unm" placeholder="UserName" required>

  </div>

<br>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input ng-model="pass" id="pass" type="password" class="form-control" name="pass" placeholder="Password" required>
  </div>

<br>
        <button type="submit" class="btn btn-primary" id="btnsub" name=btnsub>Submit</button>
        <button type="reset" class="btn btn-danger" id="btnres">Reset</button>

</form>




</div>


<?php
include("footer.php");
if(isset($_POST['btnsub']))
{
$nm=$_POST['nm'];
$add=$_POST['address'];
$con=$_POST['contact'];
$unm=$_POST['unm'];
$pass=$_POST['pass'];
include("connection.php");
$q="insert into register values('$nm','$add','$con','$unm','$pass')";
pg_query($q);

echo"<script>alert('registration succsefull');window.location='signin.php'</script>";
}

?>

