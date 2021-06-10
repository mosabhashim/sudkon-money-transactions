<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">لوحة  التحكم </h1>
    
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">خزنة الدولار </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
              $con = mysqli_connect("localhost","root","","sudkon");
              $query = "SELECT SUM(moneysend) AS moneysums FROM customer WHERE currincy ='دولار'";
              $query_run = mysqli_query($con,$query);
              $row = mysqli_fetch_assoc($query_run);
              $totaldollar = $row['moneysums'];
              echo '<h4>  دولار امريكي '. $totaldollar.'</h4>';
              
              ?>
              
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">خزنة الجنية </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                  $con = mysqli_connect("localhost","root","","sudkon");
                  $query ="SELECT SUM(moneysend) AS moneysum FROM customer WHERE currincy ='جنية' ";
                  $query_run = mysqli_query($con,$query);
                  $row = mysqli_fetch_assoc($query_run); 
                  $total = $row['moneysum'];
                  echo '<h4>جنية سوداني '. $total.'</h4>';
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">الحوالات المرسلة </div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                    <?php     
                      $query ="SELECT id FROM customer ORDER BY id";
                      $query_run = mysqli_query($con,$query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h4> حوالة مرسلة    '.$row.'</h4>';
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">الحوالات المستلمة </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
              $query ="SELECT moneysend FROM customer where stues='استلم'";
                $query_run = mysqli_query($con,$query);
                $row = mysqli_num_rows($query_run);
                echo '<h4> حوالة مستلمة   '.$row.'</h4>';
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>