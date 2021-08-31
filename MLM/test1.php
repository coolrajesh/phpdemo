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
<div class="row">
	<div class="col-lg-g col-sm-12 card bg-light p-0">
		<h5 class="card-header">Tree View</h5>
		
			<div class="card-body">
			<?php for($i=0;$i<3;$i++){
				$divide = pow(2,$i);
			?>
			<div class="row" style='background-color:gray;height:130px;color:red'>
				<?php for($d=0;$d<$divide;$d++){?>
						<div class="col-<?php echo 12/$divide;?>" style='color:red'>
						 <img src="">
						</div>
				<?php } ?>
			</div><br>	
			<?php } ?>
			</div>
	</div>


</div>