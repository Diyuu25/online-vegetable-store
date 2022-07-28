<?php
include("header.php");
$fl="";
if(isset($_GET["flavour"]))
$fl=$_GET["flavour"];
?>
<img src="images\desktopbanner.png" width=100%>
<h1 align=center><?php echo ucfirst($fl); ?> </h1>
<div class="row">

<?php
include("connection.php");
$rs=pg_query($cn,"select * from veg where vtype='$fl'");
$i=0;
while($a=pg_fetch_assoc($rs))
{
$im=$a["vimg"];
$fl=$a["vtype"];
$pr=$a["price"];
$vn=$a["vname"];
echo "<div class='col-md-3'>";
echo "<div class=\"thumbnail\">";
echo "<a href=\"images/$im\" target=\"_blank\">";
echo"<img src=\"images/$im\" class=\"img-responsive\" width=100% height=80%>";
echo "<div class=\"caption\">";
echo"<b>$vn </b></div></a></div></div>";
$i++;
if($i==3)
{
echo "</div>";
echo "<div class=\"row\">";
$i=0;
}

}
?>
</div>
<?php
include("footer.php");
?>

