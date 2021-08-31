<?php
/* for($i=0;$i<4;$i++){
$x = pow(2,$i);
for($j=1;$j<=$x;$j++){

	echo $j;
}
echo "<br>";
} */
?>
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
<center>
<div class="card-body">
<?php for($i=0;$i<3;$i++){ 
$divide = pow(2,$i);
?>
 
 
<?php for($d=0;$d<$divide;$d++){?>
<div class="col-<?php echo 12/$divide;?> border p-5">
 h
</div>

<?php } ?>
 
<?php }
?>
   
</div>

</body>
</html>
