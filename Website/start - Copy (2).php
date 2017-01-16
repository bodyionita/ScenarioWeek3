<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vibe</title>
<?php include 'navigation-bar.php' ?>

</head>

<body background="assets/img/bg.jpg">
<div class="container">
	<h1 align="center" style="color:#FFF"> Vibe: Home <h1>
	<div class="well col-md-8 col-md-offset-2">
    	<h4> Most recent snippets: </h4>        
		<div class="table-responsive">
		<table style="font-size:14px;"class="table table-hover table-condensed">
        	<thead>
            	
            </thead>
        	<tbody>
			<?php

			$sql = "SELECT users.uid,snippets.sid,users.name,snippets.snippet,snippets.time_added,users.website, users.icon_url, users.profile_color FROM snippets 
					INNER JOIN users
            		ON snippets.uid=users.uid 
					ORDER BY uid ASC, time_added DESC";
            $rows = $db->query($sql);
     		$previous_uid = "";
            foreach ($rows as $row){
				if ($row["uid"] != $previous_uid) {
					$previous_uid = $row["uid"];
            	 ?>
            	<tr> 
                	<td class="col-md-1">
                    	<img alt="User Pic" height="60px" width="60px"
                     src="<?php if ($row["icon_url"]) echo $row["icon_url"]; else echo 'assets/img/profile.png'; ?>" class="img-thumbnail img-responsive"> 
                    </td>
                    <td class="col-md-2">
                       <p style="color:<?= $row['profile_color'] ?>"><?= $row["name"] ?> </p>
                    </td>
                    <td > 
                       <div class="col-md-12"><?= $row['snippet'] ?></input></div>
                       <a href="snippets.php?uid=<?= $row["uid"] ?>">All snipets</a>
                       <a href="<?= $row["website"] ?>" <?php if ($row["website"]) { ?>target="_blank" <?php } ?> >Website</a>                   
                     </td>
                                  
                </tr>              
                	
            <?php } }

            
            ?>	
            </tbody>
		</table>
        </div>
    </div>
    </div>

</div>
</body>
</html>