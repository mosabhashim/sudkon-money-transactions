<?php
session_start();
$con = mysqli_connect("localhost","root","","sudkon");

if(isset($_POST['submit']))

{
    $sends = $_POST['sends'];
    $recive = $_POST['recive'];
    $money = $_POST['money'];
    $currincy = $_POST['currincy'];
    $name = $_POST['name'];
    $modile = $_POST['modile'];
    $note = $_POST['note'];
    $moneysend = $_POST['moneysend'];
    $stues = $_POST['stues'];
    $username = $_POST['username'];

    $query = "INSERT INTO customer(sends,recive,money,currincy,name,modile,note,moneysend,stues,username) VALUE
     ('$sends','$recive','$money','$currincy','$name','$modile','$note','$moneysend','$stues','$username')";
     
    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
        //echo "save";
        $_SESSION['success'] = "تم ارسال الحوالة";
        header('location:send data.php');
    }
    else
    {
        //echo "no";
        $_SESSION['status'] = "حدث خطاء اثناء الارسال ";
        header('location:send data.php');
    }
}




//updata

if(isset($_POST['update']))
{
    $id    =$_POST['ed_id'];
    $sends = $_POST['ed_sends'];
    $recive = $_POST['ed_recive'];
    $money = $_POST['ed_money'];
    $currincy = $_POST['ed_currincy'];
    $name = $_POST['ed_name'];
    $modile = $_POST['ed_modile'];
    $note = $_POST['ed_note'];
    $moneysend = $_POST['moneysend'];
    $stues = $_POST['stues'];
    $query = "UPDATE customer SET sends='$sends',recive='$recive',money='$money',currincy='$currincy',name='$name',modile='$modile',note='$note',moneysend='$moneysend',stues='$stues' WHERE id ='$id' ";
    
    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
        $_SESSION['success'] = "تم ارسال الحوالة";
        header('location:send data.php');

    }
    else
    {
        

    }


}


// insert money dollar

if(isset($_POST['sendbut'])){
    $send = $_POST['send'];
    $recive = $_POST['recive'];
    $name   = $_POST['name'];
    $username = $_POST['username'];
    $money    = $_POST['money'];
    $moneysend = $_POST['moneysend'];
    $currincy = $_POST['cur'];
    $mobile   = $_POST['mobile'];
    $stues = $_POST['stues'];
    $note = $_POST['note'];

    $query = "INSERT INTO customerdollar (send,recive,name,username,money,moneysend,cur,mobile,stues,note) VALUE
    ('$send','$recive','$name','$username','$money','$moneysend','$currincy','$mobile','$stues','$note')";

    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
        //echo "save";
        $_SESSION['success'] = "تم ارسال الحوالة";
        header('location:send data.php');
    }
    else
    {
        //echo "no";
        $_SESSION['status'] = "حدث خطاء اثناء الارسال ";
        header('location:send data.php');
    }




}


// updata data dollar 

if(isset($_POST['sendtdollar']))
{
    $id    =$_POST['ed_id'];
    $send = $_POST['ed_sends'];
    $recive = $_POST['ed_recive'];
    $money = $_POST['ed_money'];
    $currincy = $_POST['ed_cur'];
    $name = $_POST['ed_name'];
    $mobile = $_POST['mobile'];
    $note = $_POST['ed_note'];
    $moneysend = $_POST['moneysend'];
    $stues = $_POST['stuesed'];

    $query = "UPDATE customerdollar SET send='$send',recive='$recive',money='$money',cur='$currincy',name='$name',mobile='$mobile',note='$note',moneysend='$moneysend',stues='$stues' WHERE id ='$id' ";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        //echo "save";
        $_SESSION['success'] = "تم ارسال الحوالة";
        header('location:showdatadollar.php');
    }
    else
    {
        //echo "no";
        $_SESSION['status'] = "حدث خطاء اثناء الارسال ";
        header('location:recivedollar.php');
    }


}








?>