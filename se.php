<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="css/mainse.css" rel="stylesheet" />
    <link href="css/table.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
  
<!--===============================================================================================-->	

  </head>
  <body>
    <div class="s130">
      <form method="POST" action="">
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="svg-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg>
            </div>
            <input id="search" type="text" name="search" placeholder="ادخل رقم الحوالة او اسم العميل" />
          </div>
          <div class="input-field second-wrap">
            <button class="btn-search" name="button" type="submit">بحث</button>
          </div>
        </div>
        </div>
       
      </form>
    
      <?php
    $con = mysqli_connect("localhost","root","","sudkon");
    if(isset($_POST['button'])){
      $seaech =$_POST['search'];
      $query = "SELECT * FROM customer WHERE id='$seaech'";
      $query_run = mysqli_query($con,$query);
      if(mysqli_num_rows($query_run)> 0){
      while($row =mysqli_fetch_array($query_run))
      {
        ?>

	

				<div class="datauser">
        
        <form action="recive data.php" method="POST">
        <table class="ta"> 
						<tr>
              <th>رقم الحوالة </th>
              <th>اسم المرسل</th>
              <th>اسم المستقبل</th>
              <th>المبلغ المرسل</th>
              <th>المبلغ المستلم</th>
              <th>العملة </th>
              <th>حالة الاستلام</th>
              <th>ملاحظة</th>
              <th>اجراء تسليم</th>
            </tr>
            <tr>
              <td><?php echo $row['id'];?></td>
              <td><?php echo $row['name'];?></td>
              <td><?php echo $row['username'];?></td>
              <td><?php echo $row['money'];?></td>
              <td><?php echo $row['moneysend'];?></td>
              <td><?php echo $row['currincy'];?></td>
              <td><?php echo $row['stues'];?></td>
              <td><?php echo $row['note'];?></td>
              <td>
              <input type="hidden" name="id_edit" value="<?php echo $row['id'];?>">
							<button type="submit" name="updata">تسليم</button>
              </td>
            </tr>
            </table>
         </form>
      
         <?php
         
      }
    }
    else  { ?>
      <div id="notfound">
		<div class="notfound">
			<div class="notfound-404"></div>
			<h1>404</h1>
			<h2>مهلاً ,هنالك خطاء عند الادخال</h2>
			<p>يبدو انك ادخلت رقم حوالة خاطي او  ان الحوالة لم يتم ارسالها بعد , يرجي مراجعة الرقم او التاكد من ارسال الحوالة </p>
			<a href="http://localhost:67/sudkon/dashbort.php">العودة الي لوحة التحكم</a>
		</div>
	</div>
     
   <?php   
    }
  
  }
  ?>
   
 
 </div>
   
      
    
    

    
    
    <script src="java/extention/choices.js"></script>
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
