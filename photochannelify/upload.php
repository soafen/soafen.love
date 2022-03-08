<!DOCTYPE html><html>
	<head>
			<meta charset="utf-8">
			<title>PhotoChannelify</title>
			<link rel="stylesheet" href="../css/photochannelify.css">
	</head>
	<body>
		<div class="banner">
			<h1>PhotoChannelify<span style="font-size:20px;">v3</span></h1>
		</div><br>
		<div class="main-page">
			<div class="main-page-content">
				<?php
					shell_exec('rm ./uploads/*');
					$target_dir = "uploads/";
					$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
					$uploadOk = 1;
					if(isset($_POST["submit"])) {
						if (stristr(mime_content_type($_FILES["fileToUpload"]["tmp_name"]), 'video')) {
							echo "File is a video - " . mime_content_type($_FILES["fileToUpload"]["tmp_name"]) . "<br>";
							$uploadOk = 1;
							if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
								echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
								shell_exec("mv ./uploads/" . basename( $_FILES["fileToUpload"]["name"]) . " ./uploads/unconverted");
								$output = (shell_exec("ffmpeg -i ./uploads/unconverted -vcodec mjpeg -ar 44100 -ac 2 -b:a 64k -acodec pcm_s16le -vf fps=fps=30,scale=-1:480 ./uploads/out.avi 2>&1"));
								echo "<div style=\"max-width:800px;\"><pre style=\"background-color:#000;font-size:5px;color:#fff;\">$output</pre></div><br>";
								echo "<div style=\"text-align:center;\">it worked! maybe! <a href=\"//soafen.love/photochannelify/uploads/out.avi\"><button>Download</button></a></div>";					
							} else {
								echo "Sorry, there was an error uploading your file.";
							}
						} else {
							echo "File is not a video.";
							$uploadOk = 0;
						}
					}
				?><br><a href="index.html"><div style="text-align:center;"><button>Another!</button></div></a>
			</div>
		</div><br><div style="text-align:center;"><a href="../">home</a></div>
	</body>
</html>