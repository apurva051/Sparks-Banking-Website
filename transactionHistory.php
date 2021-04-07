<!DOCTYPE html>
<html>
<head>
	<title>Transaction History</title>
	<link rel="stylesheet" type="text/css" href="Style.css"/>
	<link rel="stylesheet" type="text/css" href="style11.css">

	<style type="text/css">
		body
    {
        background:#747d8c;
    }
    table 
    {
    	 position: absolute;
            top: 70%;
            left:50%;
            transform: translate(-50%,-50%);
           width: 600px;
         
        
	}
    thead th
    {
        position: sticky;
        background: whitesmoke;
        z-index: 5;
    }	
    tbody td:nth-child(2)
    {
        position: sticky;
        z-index: 3;
    }
    .table-box
    {
        
    }
/*
.div1
{
    width: 600px;
    height: 30px;
    margin: 0;
    padding: 0;
    background-color:gray;
}
.tabHis
{
    width: 600px;
    color: white;
    text-align: center;
    font-size: 15pt;

}
.div2
{
    height:100px;
    width: 600px;
    margin: 0;
    padding: 0;
    overflow: auto;
    overflow-x: hidden;
}
.table2
{
    width: 600px;
    color: white;
    text-align: right;
    font-size: 15pt; 
    border:1px solid;  
}

table
{
    border:1px solid;

}
*/
table
{
    overflow-x: hidden;
    overflow: auto;
    overflow-y: scroll;
    position: absolute;
    height: 300px;

}

	</style>



 
</head>
<body>
	
	 <nav>
       <div class="logo">Transaction History</div>
          <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="CreateUser.php">ADD USER</a></li>
            <li><a href="transferMoney.php">TRANSFER MONEY</a></li>
            <li><a href="transactionHistory.php">HISTORY</a></li>
            </ul>
    </nav>
    <div class="div1">
	<table class="tabHis" >
        <thead>
		<tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
        </tr>
    </thead>



        <tbody>
        <?php

            include 'connection.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>
         <tr style="color : black;">
            <td class="py-2"><?php echo $rows['S.No']; ?></td>
            <td class="py-2"><?php echo $rows['Sender']; ?></td>
            <td class="py-2"><?php echo $rows['Receiver']; ?></td>
            <td class="py-2"><?php echo $rows['Amount']; ?> </td>
            <td class="py-2"><?php echo $rows['Date & Time']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>
</div>
 
	
</body>
</html>ss