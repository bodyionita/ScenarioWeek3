<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vibe Register</title>
<?php include 'navigation-bar.php' ?>

</head>

<body background="assets/img/bg.jpg">
<div class="container ">
			<div class="row main col-md-6 col-md-offset-3 ">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 style="color:#FFF" class="title">Register</h1>
	               	</div>
	            </div> 
                <?php if (isset($_SESSION["invalid_username"]) && $_SESSION["invalid_username"]==1) { ?>
                        <div class="alert alert-danger" role="alert">
        				Invalid username 
                        </div>										
                        <?php } unset($_SESSION["invalid_username"]); ?>
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="register-submit.php">
						
						<div class="form-group">
							<label for="name" style="color:#FFF" class="cols-md-2 control-label">Your Name</label>
							<div class="cols-md-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" required/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="username" style="color:#FFF" class="cols-md-2 control-label">Username</label>
							<div class="cols-md-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username" required/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" style="color:#FFF" class="cols-md-2 control-label">Password</label>
							<div class="cols-md-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" style="color:#FFF" class="cols-md-2 control-label">Confirm Password</label>
							<div class="cols-md-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password" required/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
						</div>
						
					</form>
				</div>
			</div>
		</div>
</body>
</html>