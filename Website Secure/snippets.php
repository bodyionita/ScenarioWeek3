<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vibe</title>
<?php include 'navigation-bar.php' ?>

</head>

<body background="assets/img/bg.jpg">
<div class="container">
	<?php if (!isset($_GET["uid"]) || (isset($_GET["uid"]) && isset($uid) && $_GET["uid"] == $uid)) { ?>
	<h1 align="center" style="color:#FFF"> My Snippets <h1>
    <?php } else {
	$received_uid = $_GET["uid"];
	$sql = "SELECT name FROM users WHERE uid=$received_uid";
	$rows = $db->query($sql);
	foreach ($rows as $row){ ?>
	<h1 align="center" style="color:#FFF"> <?= $row["name"]; ?> <h1>		
			
	<?php }} ?>

	<div class="well col-md-8 col-md-offset-2">
    <div class="table-responsive">
		<table style="font-size:22px;" class="table table-striped table-condensed">
        	<thead>
            	<tr>
                	<th class="col-md-1">#</th>
                    <?php if (!isset($_GET["uid"])){ ?><th class="col-md-2">Remove</th><?php } ?>
                    <th class="col-md-8">Snippet</th>
                </tr>
            </thead>
        	<tbody>
			<?php
			if (!isset($_GET["uid"])) {
			$sql = "SELECT sid,snippet,time_added FROM snippets 
            		WHERE uid='$uid' ORDER BY time_added DESC";}
			else
			{
				$received_uid = $_GET["uid"];
				$sql = "SELECT sid,snippet,time_added FROM snippets 
            		WHERE uid='$received_uid' ORDER BY time_added DESC";
			}
            $rows = $db->query($sql);
            $number = 0;
            foreach ($rows as $row){
            	$number++; ?>
            	<tr> 
                    <td>
                       <?= $number ?> 
                    </td>
                    <?php if (!isset($_GET["uid"])) { ?>
                    <td align="center" > 
                    	<form action="deletesnippet.php" method="POST">
                        <input hidden type="text" name="index" value="<?= $number ?>" />
                        <input hidden type="text" name="uid" value="<?= $uid ?>" />
                        <button type="submit" class="btn"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        </form>
                                       
                    </td> <?php } ?>
                    <td> 
                       <input disabled value="<?= $row['snippet'] ?>"  />
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