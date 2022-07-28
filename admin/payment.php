<?php
include("header1.php");
?>

<h1 align=center>Recent Payment</h1>
 <table class="table">
    <thead>
      <tr>
        <th>Username</th>
        <th>Amount</th>
        <th>Mode</th>
<th>CardNumber</th>
        
      </tr>
    </thead>
    <tbody>
<?php
include("../connection.php");

$rs=pg_query($cn,"select * from payment");
while($a=pg_fetch_assoc($rs))
{
  $un=$a["username"];
$id=$a["amount"];
  $price=$a["mode"];
$wt=$a["num"];

echo "<tr><td>$un</td><td>$id</td><td>$price</td><td>$wt</td></tr>";
}
?>
    </tbody>
  </table>
<?php
include("footer.php");
?>

