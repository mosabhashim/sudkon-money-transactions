<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/mainre.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
           
            
                <div class="card-heading">
                    <h2 class="title">تسليم حوالات مالية </h2>
                </div>
                <div class="card-body">
                    
                            
                    <form method="POST" action="code.php">
                    <?php
                    $con = mysqli_connect("localhost","root","","sudkon");
                    if(isset($_POST['updatadollar']))
                    {
                        $id = $_POST['id_edit'];
                        $query = "SELECT * FROM customerdollar where id='$id' ";
                        $query_run = mysqli_query($con,$query);
                           foreach($query_run as $row)
                            {
                                ?>
                          
                        <div class="form-row m-b-55">
                            <div class="name"></div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                    <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                    <input type="hidden" name="ed_id" value="<?php echo $row['id'];?>">
                                        <select name="ed_sends"  >
                                            <option   ><?php echo $row['send'];?> </option>   
                                        </select>
                                        <label class="label--desc">حوالة من  </label>
                                          <div class="select-dropdown"></div>
                                    </div>
                                  </div>
                                 </div>
                                    <div class="col-2">
                                    <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="ed_recive">
                                            <option  selected="selected" ><?php echo $row['recive'];?> </option>
                                        </select>
                                        <label class="label--desc">حوالة الي  </label>
                                          <div class="select-dropdown"></div>
                                    </div>
                                  </div>
                                 </div>
                                </div>
                            </div>
                        </div>
                   
                        <div class="form-row m-b-55">
                            <div class="name"></div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text"  value="<?php echo $row['money'];?>" name="ed_money">
                                            <label class="label--desc">المبلغ </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                    <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="ed_currincy">
                                            <option    > <?php echo $row['cur'];?></option>
                                           
                                        </select>
                                        <label class="label--desc">العملة  </label>
                                          <div class="select-dropdown"></div>
                                    </div>
                                  </div>
                                 </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5"  value="<?php echo $row['name'];?>" type="text" name="ed_name">
                                    <label class="label--desc">الاسم </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5"  value="<?php echo $row['mobile'];?>" type="txet" name="ed_modile">
                                    <label class="label--desc">رقم الهاتف </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name"></div>
                            <div class="value">
                                <div class="row row-refine">
                                    
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5"  value="<?php echo $row['note'];?>" type="text" name="ed_note">
                                            <label class="label--desc">ملاحظة </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-row m-b-55">
                            <div class="name"></div>
                            <div class="value">
                                <div class="row row-refine">
                                    
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" placeholder="الرجاء ادخال المبلغ المرسل"  type="text" name="moneysend">
                                            <label class="label--desc">المبلغ المستلم  </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name"></div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                    <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="stuesed">
                                            <option disabled="disabled" selected="selected"> الحالة </option>
                                            <option> في الانتظار</option>
                                            <option>استلم  </option>
                                            <option>لدية باقي </option>
                                           
                                        </select>
                                        <label class="label--desc"> حالة الاستلام  </label>
                                  
                                          <div class="select-dropdown"></div>
                                    </div>
                                  </div>
                                 </div>
                          
                            <button class="btn btn--radius-2 btn--red" name="sendtdollar" type="submit">تاكيد الاستلام</button>
                        </div>
                        <?php
                            }
                        } 
                            ?>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
  
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="java/re.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->