<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vibe</title>
<?php include 'navigation-bar.php' ?>

</head>

<body background="assets/img/bg.jpg">
<div class="container">
	
	<h1 align="center" style="color:#FFF"> My files<h1>

	<div class="well col-md-6 col-md-offset-3">
    <div class="table-responsive">
		<table style="font-size:22px;" class="table table-striped table-condensed">
        	<thead>
            	<tr>
                	<th class="col-md-8">File</th>
                    <th class="col-md-2">Download</th>
                </tr>
            </thead>
        	<tbody>
				<?php
                	$files = scandir("./uploads/$username");
                    $count = -3;
                    foreach ($files as $file)
                    {
                    	$count++;
                        if ($count > 0) {
                ?>
                <tr>
                	<td> <?= $file ?> </td>
                    <td align="center">
                    <form action="downloadfile.php" method="POST">
                       	<input hidden name="file" value="<?= $file ?>" />
                        <input hidden name="username" value="<?= $username ?>"  />
                        <button type="submit" class="btn"><span class="glyphicon glyphicon-download" aria-hidden="true"></span></button>
                        </form>
                    
                     </td>
                </tr>
                <?php } } ?>
            </tbody>
		</table>
        </div>
    </div>
	
</div>
</body>
</html>