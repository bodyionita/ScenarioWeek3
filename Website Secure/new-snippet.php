<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Snippet</title>
<?php include 'navigation-bar.php' ?>

</head>

<body background="assets/img/bg.jpg">
<div class="container ">
			<div class="row main col-md-6 col-md-offset-3 ">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 style="color:#FFF" class="title">New Snippet</h1>
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="new-snippet-submit.php">
						
						<div class="form-group">
							<div class="panel panel-danger">
                              <div class="panel-body">
							  	<textarea name="snippet" id="snippet" rows="7" class="col-md-12"></textarea>
                              </div>
                              <div class="panel-footer">HTML functionality working (e.g. &#60b&#62, &#60i&#62, etc ) </div>
                            </div>
						</div>
						<div class="form-group">
                        	<input hidden type="text" name="uid" id="uid" value="<?php echo $uid; ?>" />
                        </div>
                        
						<div class="form-group ">
							<button type="submit" class="btn btn-info btn-lg btn-block">Submit</button>
						</div>
						
					</form>
				</div>
			</div>
		</div>
</body>
</body>
</html>

