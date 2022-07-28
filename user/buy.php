<?php
session_start();
include("header.php");
$id=0;
$price=0;
$fl="";

$im="";
$unm=$_SESSION["username"];
if(isset($_GET["vid"]))
{
$id=$_GET["vid"];
$price=$_GET["price"];
}
include("../connection.php");
$rs=pg_query($cn,"select * from veg where vid=$id");
if($a=pg_fetch_assoc($rs))
{
  $fl=$a["vtype"];
$im=$a["vimg"];
$price=$a["price"];
}
?>

<h1 align=center>Order Details</h1>
<div class="row">
<form id=frmreg method="post" name="myForm">
  <div class="input-group">
<?php
echo "<center><img src=\"../images/$im\" width=200 height=200></center></div>";
?>
<br>

  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
    <input ng-model="address" id="Flavour" type="text" class="form-control" name="flavour" placeholder="Type" value="<?php echo $fl; ?>" required readonly>

  </div>
<br>

  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
    <input ng-model="address" id="price" type="text" class="form-control" name="price" placeholder="Price" value="<?php echo $price; ?>" required readonly>

  </div>
<br>

  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-shopping-cart"></i></span>
    <select id=wt name=wt onchange="cal()" class="form-control">
<option>--select weight--</option>
<option value="0.5">Half Kg</option>
<option value="1">1 Kg</option>
<option value="2">2 Kg</option>
<option value="3">3 Kg</option>
<option value="4">4 Kg</option>
<option value="5">5 Kg</option>
</select>
 <script>
function cal()
{
  var p,w,a;
 p=document.getElementById("price").value;
 w=document.getElementById("wt").value;
a=p*w;
document.getElementById("amt").value=a;
}
</script>
  </div>

<br>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
    <input ng-model="address" id="amt" type="text" class="form-control" name="amt" placeholder="0" required readonly>

  </div>

<br>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
    <input ng-model="contact" id="addr" type="text" class="form-control" name="addr" placeholder="Delivery Address" required>
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

$wt=$_POST['wt'];
$am=$_POST['amt'];
$add=$_POST['addr'];

include("../connection.php");
$q="insert into buy(username,vid,price,weight,amount,deladdr) values('$unm',$id,$price,$wt,$am,'$add')";
pg_query($q);

echo"<script>window.location='payment.php?amount=$am'</script>";
}

?>

