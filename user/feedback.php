<?php
include("header.php");
?>
<div class=main>
<h1 class=hd-1>Give Feedback Here </h1>
<form method="post">
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input ng-model="address" id="price" type="text" class="form-control" name="txtcon" placeholder="Email Id" required >

  </div>


<br><br>
<textarea name=txtf class="form-control" placeholder="Your feedback">
</textarea><br>


<input type=Submit name=btnsub value=submit>
<input type=Reset name=btnres value=reset ><br>
</form>
</div>

<?php
include("footer.php");
if(isset($_POST['btnsub']))
{
$con=$_POST['txtcon'];
$d=$_POST['txtf'];
include("../connection.php");
$q="insert into feedback values('$con','$d')";
pg_query($q);

echo"<script>alert('Thank you for feedback')</script>";
}


?>
