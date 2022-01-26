<?php

    include_once("config.php");

    $result = mysqli_query($con, "SELECT * FROM reservation ORDER BY date ASC");

  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <h5>Admin</h5>
    
    <div class="table_one">
         
         <div class="container-table100">
			<div class="wrap-table100">
          <?php if($result->num_rows>0) {?>
          
          <div class="table100 ver2 m-b-110">
					<table data-vertable="ver2">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1"></th>
								<th class="column100 column2" data-column="column2">Date</th>
								<th class="column100 column3" data-column="column3">Time</th>
								<th class="column100 column4" data-column="column4">People</th>
								<th class="column100 column5" data-column="column5">Name</th>
								<th class="column100 column6" data-column="column6">Email</th>
								<th class="column100 column7" data-column="column7">Phone</th>
							</tr>
						</thead>
						<tbody>
							 
                            <?php while($result_row=$result->fetch_assoc()) {?>

                            <tr>
                                <td><?php echo $result_row['date'] ?></td>
                                <td><?php echo $result_row['time']?></td>
                                <td><?php echo $result_row['people']?></td>
                                <td><?php echo $result_row['name']?></td>
                                <td><?php echo $result_row['email']?></td>
                                <td><?php echo $result_row['phone']?></td>
                                
                            </tr>
                            <?php }?>

<!--
							<tr class="row100">
								<td class="column100 column1" data-column="column1">Jane Medina</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Billy Mitchell</td>
								<td class="column100 column2" data-column="column2">9:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">2:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Beverly Reid</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Tiffany Wade</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Sean Adams</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
								<td class="column100 column4" data-column="column4">5:00 PM</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Rachel Simpson</td>
								<td class="column100 column2" data-column="column2">9:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">2:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Mark Salazar</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr>
-->
						</tbody>
					</table>
				</div>
				
				   <?php }?>
    </div>
    </div>
    </div>
    
    
    <a href="table/table.php">Table</a>
    <a href="logout.php">Logout</a>
    
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>