<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style11.css">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<title>Transfter Money</title>
	<style type="text/css">
	body
    {
        background:#a4b0be;
    }
   
      .tab
        {
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            box-sizing: border-box;
            box-shadow: 2px 2px;
            border:1px solid ;
            width: 800px;
            height: 200px;
            box-shadow: 2px 2px 12px;
            border-collapse: collapse;
        } 
	</style>
  
</head>
<body>
	<?php
	include ("connection.php");
	 $sql = "SELECT * FROM Customer";
    $res = mysqli_query($conn,$sql);
	?>
	<nav>
         <div class="logo">Sparks Bank</div>
       <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="CreateUser.php">ADD USER</a></li>
            <li><a href="transferMoney.php">TRANSFER MONEY</a></li>
            <li><a href="transactionHistory.php">TRANSACTION</a></li>
            </ul>
        </nav>

        <table border="solid" class="tab">
        <thead>
        <tr>
        	<th>ID</th>
        	<th>FirstName</th>
        	<th>LastName</th>
        	<th>Email</th>
        	<th>Phone No</th>
        	<th>Balance</th>
        	<th>Operation</th>
        </tr>	
    </thead>
    <tbody>
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
    			<td><a href= "transfer.html?id= <?php echo $rows['Id'];?>">Transaction</a></td>
    		</tr>
    		<?php
    		}
    		?>

    </tbody>
    </table>
</body>
</html>