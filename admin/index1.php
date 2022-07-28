<?php
include("header1.php");
?>

<h1 align=center>Recent Orders</h1>
 <table class="table">
    <thead>
      <tr>
        <th>Username</th>
        <th>Name</th>
        <th>Type</th>
<th>Weight</th>
        <th>Amount</th>
        <th>Delivery Address</th>
      </tr>
    </thead>
    <tbody>
<?php
include("../connection.php");

$rs=pg_query($cn,"select * from buy order by vid desc");
while($a=pg_fetch_assoc($rs))
{
  $un=$a["username"];
$id=$a["vid"];
$rs1=pg_query($cn,"select * from veg where vid=$id");
$n="";
$t="";
if($a1=pg_fetch_assoc($rs1))
{
 
$t=$a1["vtype"];
$n=$a1["vname"];
}
  $price=$a["price"];
$wt=$a["weight"];
$amt=$a["amount"];
$add=$a["deladdr"];
echo "<tr><td>$un</td><td>$n</id><td>$t</td><td>$wt</td><td>$amt</td><td>$add</td></tr>";
}
?>
    </tbody>
  </table>
<?php
include("footer.php");
?>

