<?php
session_start();
include("header.php");
?>

<h1 align=center>Login Here</h1>
<div class="row">
<?php
if(isset($_POST['btnsub']))
{
$unm=$_POST['unm'];
$pass=$_POST['pass'];
include("connection.php");
$q="select * from register where username='$unm' and         password='$pass'";
$result=pg_query($cn,$q);
if($a=pg_fetch_assoc($result))
{
$_SESSION['username']=$unm;
echo "<script>window.location='user/index.php'</script>";
}
else
echo "<center><b><font color=red>Incorrect username or password</font></b></center>";
mysqli_close($cn);
}
?>
<form id=frmreg method="post" name="myForm">
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


?>

