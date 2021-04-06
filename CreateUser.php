<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="style11.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create_User</title>
    <style type="text/css">
    body{
        background: url(banking.jpg) no-repeat;
        background-size: cover;
    }
    h1
    {
        color: white;
    }
    </style>
    }
</head>
<body>
    <nav>
        <div class="logo">Sparks Bank</div>
           <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="CreateUser.php">ADD USER</a></li>
            <li><a href="transferMoney.php">TRANSFER MONEY</a></li>
            <li><a href="transactionHistory.php">TRANSACTION</a></li>
            </ul>
    </nav>
    <form class="main" method="POST">
        <div class="contact">
        <h1>Add Customer</h1>
        <div class="txtb">
        <label for="fname" class="labels">First Name</label>
        <input class="inputs" type="text" id="fname" name="firstname" placeholder="First Name">
        <br>
        </div>

        <div class="txtb">
        <label for="lname" class="labels">Last Name</label>
        <input class="inputs" type="text" id="lname" name="lastname" placeholder="Last Name">
        </br>
        </div>

        <div class="txtb">
        <label for="email" class="labels">Email     </label>
        <input class="inputs" type="email" id="email" name="email" placeholder="xyz@gmail.com">
        </br>
        </div>

        <div class="txtb">
        <label for="Phone" class="labels"> Phone Number</label>
        <input class="inputs" type="text" id="phn" name="phone" >
        </br>
        </div>

        <div class="txtb">
        <label for="Balance" class="labels"> Balance</label>
        <input class="inputs" type="text" id="bal" name="balance" placeholder="Balance">
        </br>
        </div>

          <div class="btn">
        <input type="submit" name="Submit" value="Submit">
        </br>
   </div>
</div>
</form>

<?php
    include "connection.php";
    if(isset($_POST['submit']))
    {
        $name1=$_POST['firstname'];
        $name2=$_POST['lastname'];
        $email=$_POST['email'];
        $phn=$_POST['phone'];
        $balance=$_POST['balance'];

        $insertquery="insert into Customer(fname,lname,email,phoneno,balance) values('{$name1}','{$name2}','{$email}','{$phn}','{$balance}')";

        $res= mysqli_query($conn,$insertquery);

        if($res){
            ?>
            <script>
                alert("data inserted");
            </script>
            <?php
        }
        else{
            ?>
            <script> 
            alert("data inserted");
            </script>
            <?php
        }
    }
?>

</body>
</html>
