<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Upload</title>
	</head>
	<body>
		<form action="upload.php" method="post" enctype="multipart/form-data">
			Select a file to upload:
			<input type="file" name="fileToUpload" id="fileToUpload">
			<input type="submit" value="Upload File" name="submit">
		</form>
	</body>
</html>

<?php
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	if(isset($_POST["submit"])) {
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
			}else{
			$uploadOk = 1;
			
		}
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
			} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
	}
?>	