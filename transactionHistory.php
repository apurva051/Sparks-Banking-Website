<!DOCTYPE html>
<html>
<head>
    <title>Transaction History</title>
    <link rel="stylesheet" type="text/css" href="sty.css">
    <style type="text/css">
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
    body
    {
        background: url(123.jpeg) no-repeat;
        background-size: cover;


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
  <div class="table-box">
     <table cellpadding=10 >
        <tr>
                <th class="col">S.No.</th>
                <th class="col">Sender</th>
                <th class="col">Receiver</th>
                <th class="col">Amount</th>
                <th class="col">Date & Time</th>
        </tr>
        <?php

            include 'connection.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>
         <tr>
            <td class="col"><?php echo $rows['S.No']; ?></td>
            <td class="col"><?php echo $rows['Sender']; ?></td>
            <td class="col"><?php echo $rows['Receiver']; ?></td>
            <td class="col"><?php echo $rows['Amount']; ?> </td>
            <td class="col"><?php echo $rows['Date & Time']; ?> </td>
            </tr>
        <?php
            }

        ?>
        
    </table>
</div>
</body>
</html>