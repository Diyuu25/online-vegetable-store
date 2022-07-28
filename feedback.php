<?php
include("header.php");

?>
<img src="images\desktopbanner.png" width=100%>
<h1 align=center>Valuable Feedback</h1>


<?php
include("connection.php");
$rs=pg_query($cn,"select * from feedback");
while($a=pg_fetch_assoc($rs))
{
$im=$a["emailid"];
$fl=$a["fdet"];

echo "<div class=\"row\"><div class='col-md-6'>";
echo "<div class=\"thumbnail\">";


echo "<div class=\"caption\">";
echo"<b>$im</b><br>$fl</div></div></div></div>";

}
?>
<?php
include("footer.php");
?>

