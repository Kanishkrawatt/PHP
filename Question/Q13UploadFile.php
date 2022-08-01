<html>
<head>
<title>Upload Image</title>
</head>
<body>

<form action="" enctype="multipart/form-data" method="post">
Select image :
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name="submit"> <br/>


</form>
<?php
if(isset($_POST['submit']))
{ 
$filepath = "uploads/" . $_FILES['file']['name'];

if(move_uploaded_file($_FILES['file']['tmp_name'],$filepath)) 
{
echo"File Uploaded successfully<br>";    
echo "<img src=".$filepath." height=400 width=500 /><br>";
} 
else 
{
echo "Error !!";
}
} 
?>
<a download="<?php echo $_FILES['file']['name'];?>" href="uploads/<?php 
echo $_FILES['file']['name'];?>">Click here to download</a>

</body>
</html>


