<?php
include "connection.php";
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
	<link rel="stylesheet" type="text/css" href="style11.css"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<style type="text/css">
    .foot
        {
            position: absolute;
            transform: translate(-50%,-50%);
            top: 90%;
            left:50%;
            text-align: center;
            border:1px solid #34495e;
        }
</style>
</head>
<body>
	<nav>
       <ul>
            <li><a href=index.html>HOME</a></li>
            <li><a href="CreateUser.php">ADD USER</a></li>
            <li><a href="transfer.html">  TRANSFER MONEY </a></li>
            <li><a href="transactionHistory.php">TRANSACTION HISTORY</a></li>
        </ul>
        </nav>

        <?php
       
        $Sender=$_POST['Sender'];
        $Receiver=$_POST['Receiver'];
        $Amount=$_POST['Amount'];

        $conn = mysqli_connect('localhost','root','','my_db');

         $q1 = "UPDATE customer SET balance = balance - $Amount WHERE fname = $Sender";
    	 $ck = mysqli_query($conn, $q1);

    	 $q2 = "UPDATE customer SET balance = balance + $Amount WHERE fname = $Receiver";
         $ck = mysqli_query($conn, $q2);

         $q3 = "INSERT INTO transaction(Sender, Receiver, Amount) VALUES('$Sender','$Receiver','$Amount')";
         $ck = mysqli_query($conn, $q3);

    if($ck)
       {
       	 echo "<script type='text/javascript'>";
         echo "alert('Transaction Successful!')";

         echo "</script>";
       }
    else
       
       	{
       	 echo "<script type='text/javascript'>";
         echo "alert('Transaction Failed! Please try again Later')";
         echo "</script>";
       }
       
    mysqli_close($conn);   
 
        ?>

    <footer class="foot">
        <p>&copy 2021. Made by <b>APURVA PANCHAL</b> <br> Apurva panchal productions</p>
    </footer>  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>