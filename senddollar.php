<?php
session_start();

?>


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
    <link href="css/mainsend.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">تحويلات مالية سودكون</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="code.php">
                    <?php
                       if(isset($_SESSION['success']) && $_SESSION['success'] !='')
                       {
                        echo '<h1>'.$_SESSION['success'].'</h1>';
                        unset($_SESSION['success']);
                       }

                       if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                       {
                        echo '<h1>'.$_SESSION['status'].'</h1>';
                        unset($_SESSION['status']);
                       }


                    ?>
                    <input class="input--style-5" type="hidden" name="id" >
                        <div class="form-row m-b-55">
                            <div class="name"></div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                    <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="send">
                                            <option disabled="disabled" selected="selected">حوالة من</option>
                                            <option> تركيا</option>
                                            <option>السودان </option>
                                           
                                        </select>
                                        <label class="label--desc">حوالة من  </label>
                                          <div class="select-dropdown"></div>
                                    </div>
                                  </div>
                                 </div>


                                    <div class="col-2">
                                    <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="recive">
                                            <option disabled="disabled" selected="selected">حوالة الي</option>
                                            <option> السودان</option>
                                            <option>تركيا </option>
                                            
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
                                            <input class="input--style-5" type="text" name="money">
                                            <label class="label--desc">المبلغ </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                    <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="cur">
                                            <option disabled="disabled" selected="selected">اختار العملة</option>
                                            <option> جنية</option>
                                            <option>دولار </option>
                                            <option>ليرة تركية </option>
                                        </select>
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
                                    <input class="input--style-5" type="text" name="name">
                                    <label class="label--desc">اسم المرسل  </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="username">
                                    <label class="label--desc">اسم المستقبل  </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="txet" name="mobile">
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
                                            <input class="input--style-5" type="text" name="note">
                                            <label class="label--desc">ملاحظة </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="name"></div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="hidden"  value="0" name="moneysend">
                                            <input class="input--style-5" type="hidden"  value="في الانتظار" name="stues">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                    <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        
                                    </div>
                                  </div>
                                 </div>
                                </div>
                            </div>
                        
                            <button class="btn btn--radius-2 btn--red" type="submit" name="sendbut">ارسال</button>
                        </div>

                        
                        
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
    <script src="java/send.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->