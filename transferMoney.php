<!DOCTYPE html>
<html>
<head>
    <title>Transfer Money</title>
     <link rel="stylesheet" type="text/css" href="sty.css">
    <style type="text/css">
        body
        {
                background: url(coins.jpg);
        }
    nav
    {
        position: fixed;
        height: 80px;   
        padding:10px 90px;
        top: 0;
        left:0;
        box-sizing: border-box;
        width: 100%;
        height: 80px;
        background: rgba(0,0,0,1);
        border-bottom: 1px solid #fff;
    }
    nav .logo
    {
        float: left;
        padding: 22px 20px;
        height: 80px;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 24px;
        color: #fff;

    }
    nav ul
    {
        list-style-type: none;
        padding: 0;
        margin: 0;
        float: right;
        display: flex;
    }
    nav ul li a
    {
        line-height: 50px;
        color: #fff;
        padding: 5px 30px;
        text-decoration: none;
        font-size: 14px;
        font-weight: bold;
    }
    nav ul li a:hover
    {
        border-radius: 6px;
        background: rgba(0,0,0,0.7);
    }
    td a
    {
        color: white;
    }
   
    </style>
</head>
<body>
    <nav data-spy="affix" data-offset-top="197">
        <div class="logo">Sparks Bank</div>
           <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="CreateUser.php">ADD USER</a></li>
            <li><a href="transferMoney.php">TRANSFER MONEY</a></li>
            <li><a href="transactionHistory.php">HISTORY</a></li>
            </ul>
    </nav>
<?php
    include ("connection.php");
     $sql = "SELECT * FROM Customer";
    $res = mysqli_query($conn,$sql);
    ?>
    <div class="table-box1">
        <table cellpadding="10">
        <tr>
            <th>ID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Phone No</th>
            <th>Balance</th>
            <th>Operation</th>
        </tr>   
        <?php

            while($rows=mysqli_fetch_assoc($res))
            {
            ?>
            <tr>
                <td><?php echo $rows['Id'] ?></td>
                <td><?php echo $rows['fname'] ?></td>
                <td><?php echo $rows['lname'] ?></td>
                <td><?php echo $rows['email'] ?></td>
                <td><?php echo $rows['phoneno'] ?></td>
                <td><?php echo $rows['balance'] ?></td>
                <td class="l1"><a href= "transfer.html?id= <?php echo $rows['Id'];?>">Transaction</a></td>
            </tr>
            <?php
            }
            ?>
    </table>
    </div>
    <footer class="foot">
        <p>&copy 2021. Made by <b>APURVA PANCHAL</b> <br> Apurva panchal productions</p>
</footer>  
</body>
</html>