<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/show.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
	<div class ="total">
	
	
	</div>
	
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">
					<?php
					$con = mysqli_connect("localhost","root","","sudkon");
					$query = "SELECT * FROM customerdollar";
					$query_run = mysqli_query($con ,$query);
					
					?>
						<div class="row header">
							<div class="cell">
								اسم المرسل 
							</div>
							<div class="cell">
								اسم المستقبل 
							</div>
							<div class="cell">
								   المبلغ المرسل 
							</div>
							<div class="cell">
								   المبلغ المستلم 
							</div>
							<div class="cell">
								العملة
							</div>
							<div class="cell">
								رقم الهاتف
							</div>
							<div class="cell">
								ملاحظة
							</div>
							<div class="cell">
								الحالة 
							</div>
							<div class="cell">
								 تسليم  
							</div>
						</div>
						<?php
						if(mysqli_num_rows($query_run)>0)
						{
							while($row = mysqli_fetch_assoc($query_run))
							{
								?>


						<div class="row">
							<div class="cell" data-title="اسم المرسل">
								<?php echo $row['name'];?>
							</div>
							<div class="cell" data-title="اسم المستقبل">
								<?php echo $row['username'];?>
							</div>
							<div class="cell" data-title=" المبلغ المرسل">
							<?php echo $row['money'];?>
							</div>
							<div class="cell" data-title=" المبلغ المستلم">
							<?php echo $row['moneysend'];?>
							</div>
							<div class="cell" data-title="المبلغ">
							<?php echo $row['cur'];?>
							</div>
							<div class="cell" data-title="رقم اهاتف">
							<?php echo $row['mobile'];?>
							</div>
							<div class="cell" data-title="ملاحظة">
							<?php echo $row['note'];?>
							</div>
							<div class="cell" data-title="ملاحظة">
							<?php echo $row['stues'];?>
							</div>
							<form method="POST" action="recivedollar.php">
							<div class="cell" data-title="تسليم">
							<input type="hidden" name="id_edit" value="<?php echo $row['id'];?>">
							<button type="submit" name="updatadollar">تسليم</button>
							
						    </div>
							</form>
						</div>
						
						<?php
								
							}
						}
						else{
							echo "no";
						}
						
						
						?>
					</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>