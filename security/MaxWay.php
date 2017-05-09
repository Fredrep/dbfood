<?php
include('session.php');
$connection = mysql_connect("localhost", "root", "dbfood2017");
		$db = mysql_select_db("dbfood", $connection);
		$ordersqeur=mysql_query("select users.Fname, users.Lname, users.Telphone,orders.ordernum ,orders.typeoffood, orders.time, orders.location  from orders inner join users where orders.ordernum=users.orderSec")
?>

<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="../css/styleMax.css" rel="stylesheet" type="text/css">
</head>
<body  >
<div class="cover">
	
<div class="upcontain">
	
	<div class="logout">
		<b id="logout"><a href="logout.php" style="text-decoration: none;">Log Out</a></b>
	</div>
	
	<h1 >Max Way</h1>
	<div class="adminlog">
		
	</div>
</div>
<div class="data">
		
	<table class="tableData">
	      <thead>
	        <tr>
	          <th>First Name     </th>
	          <th>Last Name      </th>
	          <th> Telephone     </th>
	           <th>Order Number       </th>
	          <th>Type of food		</th>
	          <th> Time		</th>
	          <th> Location		</th>
	        </tr>
	      </thead>
	      <tbody>
	        <?php
	          while( $row = mysql_fetch_array( $ordersqeur ) ){
	            echo "<tr>";
	             echo "<td>".$row['Fname']."</td>";
	             echo "<td>".$row['Lname']."</td>";
	             echo "<td>".$row['Telphone']."</td>";
	             echo "<td>".$row['ordernum']."</td>";
	             echo "<td>".$row['typeoffood']."</td>";
	             echo "<td>".$row['time']."</td>";
	             echo "<td>".$row['location']."</td>";
	           echo " </tr>\n";
	          }
	        ?>
	      </tbody>
	    </table>
	     <?php mysql_close($connection); ?>

	
</div>
</div>
</body>
</html> 