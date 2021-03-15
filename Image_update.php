//Image Update
<input type="file" name="new_pic" value="pic">
<input type="hidden" name="old_pic" value="<?php echo $pic; ?>">

<?php
if(empty($_FILES["new_pic"]["name"]))
{
	$pic=$_POST["old_pic"];
}
else
{
  //agar file choose kar raha hai tab
  //file upload ka full code yaha rahega 
}
?>
