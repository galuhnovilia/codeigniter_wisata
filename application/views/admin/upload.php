<?php
//$target_dir ="../uploads/";
//$target_dir ="D://FOLDER GALUH/uploads/";
$target_dir ="C://xampp/htdocs/wisataCilacap/foto_profil/";

$target_file = $target_dir.basename($_FILES["foto"]["name"]);
$uploadOk=1;
$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
//check if image file is actual image or fake image

if(isset($_POST["submit"]))
{
	$check=getimagesize($_FILES["foto"]["tmp_name"]);
	if($check !== false)
	{
		echo "File is an image -".$check["mime"].".";
		$uploadOk=1;
	}
	else
	{
		echo "File is not an image.";
		$uploadOk=0;
	}
}

//check if file already exists
if(file_exists($target_file))
{
	echo "Sorry, file already exists";
	$uploadOk=0;
}
//check file size
if ($imageFileType !="jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif" )
 {
	echo "Sorry, only JPG, JPEG, PNG, & GIF files are allowed";
	$uploadOk=0;
}

//check if $uploadOk is set to 0 by an error
if($uploadOk == 0)
{
	echo "Sorry, your file was not uploaded";

	//if everything is ok, try to upload file
}
else
{
	if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) 
	{
		echo "The file".basename($_FILES["foto"]["name"])." has been uploaded.";
	}
	else
	{
		echo "Sorry, there was an error uploading your file";
	}
}
?>