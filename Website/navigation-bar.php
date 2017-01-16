<?php 
		session_start();
		
		$db = new PDO("mysql:dbname=vibe","root","") or die("unable to connect");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<link href="assets/css/cover.css" rel="stylesheet">
<link href="http://getbootstrap.com/dist/css/bootstrap.css" rel="stylesheet" media="screen"></link>
<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <img href="#" src="assets/img/icon.png" alt="Vibe">
            </div>
            <ul class="nav navbar-nav">
                    <li><a href="start.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
                    <?php if (isset($_SESSION["username"])){ ?>
                    <li><a href="snippets.php"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> My snippets</a></li>
                    <li><a href="new-snippet.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New snippet</a></li>
                    <li><a href="upload.php"><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span> Upload</a></li>
					<?php } ?>
            </ul>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                <?php if (!isset($_SESSION["username"])){ ?>
                    <li><a href="login.php" > <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Log in</a></li>
                    <li><a href="register.php" > <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Register</a></li>
                <?php } else { ?>  
                    
                	<?php 
					$username = $_SESSION["username"];
					 
					$sql="SELECT * FROM users WHERE username='$username'";
					$rows = $db->query($sql);
					foreach ($rows as $row) {    
					$name = $row["name"];
					$uid = $row["uid"];
					$website = $row["website"];
					$icon_url = $row["icon_url"];
					$profile_color = $row["profile_color"];
					}
					$_SESSION["uid"] = $uid;
					?>
					<li><p class="navbar-text"> <?php echo $name." < ".$username." >"; ?> </p></li>     
                    <?php if (isset($_COOKIE["is_admin"]) && $_COOKIE["is_admin"] == 1) {?> 
					<li><a href="admin.php"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Admin  </a></li>
					<?php } ?>    	
                	<li><a href="profile.php"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile</a></li>
                	<li><a href="logout.php"> <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Log out</a></li>
				<?php } ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>


