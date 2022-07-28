<?php
include("header1.php");
?>

<h1 align=center>Add Vegetables Here</h1>
<div class="row">
<div class="col-sm-offset-2 col-sm-8">
<form id=frmreg method="post" name="myForm" enctype="multipart/form-data">
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
    <input ng-model="contact" id="price" type="text" class="form-control" name="vnm" placeholder="Vegetable Name"  required>
  </div>
<br>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-filter"></i></span>
   <select name="flavour" class="form-control">
<option>--select type--</option>
<option value="leafy">Leafy</option>
<option value="cru">Cruciferous</option>
<option value="root">Root</option>
<option value="marrow">Marrow</option>
</select>
  </div>

<br>


<br>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></span>
    <input ng-model="address" id="address" type="file" class="form-control" name="file1" placeholder="Select image" required>

  </div>

<br>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
    <input ng-model="contact" id="price" type="text" class="form-control" name="price" placeholder="Price" pattern="\d+" required>
  </div>





<br>
        <button type="submit" class="btn btn-primary" id="btnsub" name=btnsub>Submit</button>
        <button type="reset" class="btn btn-danger" id="btnres">Reset</button>

</form>
</div>

</div>


<?php
include("footer.php");
if(isset($_POST['btnsub']))
{
$fl=$_POST['flavour'];
$vn=$_POST['vnm'];

$pr=$_POST['price'];
//code for image uploading
$fn=$_FILES['file1']['name'];
$s=$_FILES['file1']['size'];
$tnm=$_FILES['file1']['tmp_name'];

$ptr1=fopen($tnm,"r");
$ptr2=fopen("../images/$fn","w");

$data=fread($ptr1,$s);
fwrite($ptr2,$data);
fclose($ptr1);
fclose($ptr2);
//end of image uploading
include("../connection.php");
$q="insert into veg(vtype,vimg,price,vname) values('$fl','$fn',$pr,'$vn')";
pg_query($q);

echo"<script>alert('Vegetable Added Successfully');window.location='addveg.php'</script>";
}

?>

