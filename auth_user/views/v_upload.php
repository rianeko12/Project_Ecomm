<head>
	<title>Upload</title>
</head>
	<body><center><h1>Upload File Dengan CodeIgniter</h1></center>
	<?php echo $error;?>
	Pilih file<?php echo form_open_multipart('upload/aksi_upload');?>
	<input type="file" name="berkas" /><br /><br />
	<input type="submit" value="upload" />
	</form>
	</body>
</html>