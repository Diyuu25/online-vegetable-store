<?php
session_start();
include("header.php");
$am=0;


if(isset($_GET["amount"]))
{
$am=$_GET["amount"];

}
include("../connection.php");

?>

<h1 align=center>Payment Details</h1>
<div class="row">
<form id=frmreg method="post" name="myForm">
 

  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
    <input ng-model="address" id="Flavour" type="text" class="form-control" name="amount" placeholder="Amount" value="<?php echo $am; ?>" required readonly>

  </div>
<br>

 

  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-shopping-cart"></i></span>
    <select id=wt name=mode class="form-control">
<option>--select payment mode--</option>
<option value="COD">Cash on Delivery</option>
<option value="CreditCard">Credit Card</option>
<option value="DebitCard">Debit card</option>

</select>

  </div>

<br>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
    <input ng-model="address" id="num" type="text" class="form-control" name="num" placeholder="0" value="0" required>

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
$unm=$_SESSION['username'];

$wt=$_POST['mode'];
$am=$_POST['amount'];
$add=$_POST['num'];

include("../connection.php");
$q="insert into payment values($am,'$wt',$add,'$unm')";
pg_query($q);

echo"<script>alert('Thank You for ordering');</script>";
}

?>

