<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vibe Register</title>
<?php include 'navigation-bar.php' ?>

</head>

<body background="assets/img/bg.jpg">
<div class="container ">
			<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 style="color:#FFF" class="title">Upload</h1>
                        <?php if (isset($_SESSION["file_url"])) { ?>
                        <div class="alert alert-success" role="alert">
        				File uploaded successfully. You can find it at <a href="<?= $_SESSION["file_url"] ?>"><?= $_SESSION["file_url"] ?></a>
                        </div>
                        <?php } ?>
	               	</div>
	           </div> 
			<div class="row well main col-md-6 col-md-offset-3 ">
				
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="upload-submit.php" enctype="multipart/form-data">
						                    
						<div class="form-group">
							<label class="control-label">Select File</label>
							<input id="file" name="file"  type="file" class="file file-loading" >
						</div>

						

						
						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block">Upload</button>
						</div>
						
					</form>
				</div>
			</div>
		</div>
        <?php unset($_SESSION["file_url"]); ?>
</body>
</html>