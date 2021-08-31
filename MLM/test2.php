<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <br><br><br><br>
  <div class="row">
  <?php for($i=0;$i<5;$i++){
				$divide = pow(2,$i);
   ?>
   <?php for($d=0;$d<$divide;$d++){?>
    <div class="col-<?php echo 12/$divide;?>">
	<img src="Chrysanthemum.jpg" height="50px" width="50px">
	</div>
     <?php } ?>
  </div>
  <?php } ?>
</div>

</body>
</html>
