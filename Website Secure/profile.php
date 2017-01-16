<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vibe</title>
<?php include 'navigation-bar.php' ?>

</head>

<body background="assets/img/bg.jpg">
<div class="container">

	<h1 align="center" style="color:#FFF"> My profile <h1>

	<div class="well col-md-10 col-md-offset-1">
    	<div class="row ">
        	<?php if (isset($_SESSION["invalid_password"])) { ?>
                        <div class="alert alert-danger" role="alert">
        				Wrong password
                        </div>										
                        <?php } unset($_SESSION["invalid_password"]); ?>
            <?php if (isset($_SESSION["invalid_new_password"])) { ?>
                        <div class="alert alert-info" role="alert">
        				Invalid new password. Please try again.
                        </div>										
                        <?php } unset($_SESSION["invalid_new_password"]); ?>
            <?php if (isset($_SESSION["success"])) { ?>
                        <div class="alert alert-success" role="alert">
        				Update successful.
                        </div>										
                        <?php } unset($_SESSION["success"]); ?>
        	<form class="form-horizontal" method="post" action="update-profile.php">
            <div class="col-md-3">
				 <br>
                <img alt="User Pic" style="height:100%;width:100%;"
                     src="<?php if ($icon_url) echo $icon_url; else echo 'assets/img/profile.png'; ?>" class="img-thumbnail img-responsive"> 
            	<button type="submit" class="btn btn-success btn-block">Update profile</button>
            </div>
            <div class="col-md-9">
            	<div class="form-group">
                    <h3 class=""> <strong>Edit your profile.</strong>	 </h3>
					
						</div>
                	<input type="text" class="col-md-8" name="username" id="username" value="<?= $username ?>" hidden/>
                	<div class="form-group" style="font-size:20px;">
							<label for="username"  class="col-md-3 ">Username:</label>
							<input type="text" class="col-md-8" name="username2" id="username2" value="<?= $username ?>" disabled/>

						</div>
                        
                    <div class="form-group" style="font-size:20px;">
							<label for="new_name"  class="col-md-3 ">Name:</label>
							<input type="text" class="col-md-8" name="new_name" id="new_name" value="<?= $name ?>" />

						</div>
                        
                    <div class="form-group" style="font-size:20px;">
							<label for="old_pw"  class="col-md-3 ">Old Password:</label>
							<input type="password" class="col-md-8" name="old_pw" id="old_pw" placeholder="Please enter your current password." />

						</div>
                    <div class="form-group" style="font-size:20px;">
							<label for="new_pw"  class="col-md-3 ">New Password:</label>
							<input type="password" class="col-md-8" name="new_pw" id="new_pw" placeholder="Please enter your new password." />

						</div>
                    <div class="form-group" style="font-size:20px;">
							<label for="icon_url"  class="col-md-3 ">Icon</label>
							<input type="text" class="col-md-8" name="icon_url" id="icon_url" placeholder="URL to image location."value="<?= $icon_url ?>" />

						</div>
                    <div class="form-group" style="font-size:20px;">
							<label for="new_profile_color"  class="col-md-3 ">Profile Color</label>
							<input type="text" class="col-md-8" name="new_profile_color" id="new_profile_color" 
                            		placeholder="Type your desired color"value="<?= $profile_color ?>" />

						</div>
                    <div class="form-group" style="font-size:20px;">
							<label for="website"  class="col-md-3 ">Website</label>
							<input type="text" class="col-md-8" name="website" id="website" placeholder="Your own website."value="<?= $website ?>" />

						</div>
                   
                </form>
                
                	

            </div>
        </div>
    </div>
	
</div>
</body>
</html>