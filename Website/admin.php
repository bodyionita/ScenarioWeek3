<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vibe</title>
<?php include 'navigation-bar.php' ?>

</head>

<body background="assets/img/bg.jpg">
<div class="container">
	<h1 align="center" style="color:#FFF"> Promote to admin <h1>
	<?php if (isset($_SESSION["promoted_uid"])) { ?>
                        <div class="alert alert-success" role="alert">
        				Promoted user with user id = <?= $_SESSION["promoted_uid"] ?>
                        </div>										
                        <?php } unset($_SESSION["invalid_login"]); ?>
	<div class="well col-md-8 col-md-offset-2">
    <div class="table-responsive">
		<table style="font-size:22px;" class="table table-striped table-condensed">
        	<thead>
            	<tr>
                    <?php if (!isset($_GET["uid"])){ ?><th class="col-md-2">Promote</th><?php } ?>
                    <th class="col-md-3">Username</th>
                    <th class="col-md-5">Name</th>
                    <th class="col-md-2">Admin</th>
                </tr>
            </thead>
        	<tbody>
			<?php
			$sql = "SELECT * FROM users";

            $rows = $db->query($sql);
            foreach ($rows as $row){
            	?>
            	<tr> 
                    
                   
                    <td align="center" > 
                    
                        <a href="promote.php?uid=<?= $row['uid'] ?>"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></a>
                    </td>
                    <td> 
                       <?= $row['username'] ?>
                    </td> 
                    <td> 
                       <?= $row['name'] ?>
                    </td>  
                    <td>
                    	<?php if ($row['is_admin'] == 0) echo "No"; else echo "Yes"; ?>
                    </td>             
                </tr>              
                	
            <?php } ?>	
            </tbody>
		</table>
        </div>
    </div>
	
</div>
</body>
</html>