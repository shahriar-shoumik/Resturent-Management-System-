<?php

    include_once("../config.php");

    $result = mysqli_query($con, "SELECT * FROM reservation ORDER BY date ASC");
    $dinner = mysqli_query($con, "SELECT * FROM dinner ORDER BY id ASC");
    $lunch = mysqli_query($con, "SELECT * FROM lunch ORDER BY id ASC");
    $breakfast = mysqli_query($con, "SELECT * FROM breakfast ORDER BY id ASC");

  

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Table</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/ar.jpg"/>
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
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
			
			
<!--			table one   -->
			
			<div class="reservation_list"style="text-align: center;padding: 25px;font-weight: bold;color: black;">
			    <h1>Reservation List</h1>
			</div>
			
				 <?php if($result->num_rows>0) {?>
          
          <div class="table100 ver2 m-b-110">
					<table data-vertable="ver2">
						<thead>
							<tr class="row100 head">
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

                            <tr class="row100">
                                <td class="column100 column1" data-column="column1"><?php echo $result_row['date'] ?></td>
                                <td class="column100 column2" data-column="column2"><?php echo $result_row['time']?></td>
                                <td class="column100 column3" data-column="column3"><?php echo $result_row['people']?></td>
                                <td class="column100 column4" data-column="column4"><?php echo $result_row['name']?></td>
                                <td class="column100 column5" data-column="column5"><?php echo $result_row['email']?></td>
                                <td class="column100 column6" data-column="column6"><?php echo $result_row['phone']?></td>
                                
                            </tr>
                            <?php }?>
						</tbody>
					</table>
					
				</div>
				 <?php }?>
				 

<!--
				
-->                 
<!--                 table two    -->
                  
                  
                  <div class="dinner_list"style="text-align: center;padding: 25px;font-weight: bold;color: #6c7ae0;;">
			    <h1>Dinner List</h1>
			</div>
			
                  
                   <?php if($dinner->num_rows>0) {?>
				<div class="table100 ver3 m-b-110">
					<table data-vertable="ver3">
						<thead>
							<tr class="row100 head">
								
								<th class="column100 column1" data-column="column1">ID</th>
								<th class="column100 column2" data-column="column2">Name</th>
								<th class="column100 column3" data-column="column3">Tk</th>
								<th class="column100 column4" data-column="column4">Edit</th>
								<th class="column100 column5" data-column="column5">Delete</th>
							</tr>
						</thead>
						<tbody>
						
					
						
						 <?php while($dinner_row=$dinner->fetch_assoc()) {?>
							<tr class="row100">
								<td class="column100 column1" data-column="column1"><?php echo $dinner_row['id'] ?></td>
								<td class="column100 column1" data-column="column2"><?php echo $dinner_row['name'] ?></td>
								<td class="column100 column2" data-column="column3"><?php echo $dinner_row['tk'] ?></td>
								<td class="column100 column3" data-column="column4"><a href="../editr/editd.php?id=<?php echo $dinner_row['id']?>">Edit</a> </td>
								<td class="column100 column4" data-column="column5"><a href="../delete.php?id=<?php echo $dinner_row['id']?>">Delete</a> </td>
								
							
							<?php }?>

							
						</tbody>
					</table>
				</div>
            
             <?php }?>
             
             
<!--             table three   -->
          
          <div class="dinner_list"style="text-align: center;padding: 25px;font-weight: bold;color: #fa4251;">
			    <h1>Lunch List</h1>
			</div>
           
           
            
				    <?php if($lunch->num_rows>0) {?>
				<div class="table100 ver4 m-b-110">
					<table data-vertable="ver3">
						<thead>
							<tr class="row100 head">
								
								<th class="column100 column1" data-column="column1">ID</th>
								<th class="column100 column2" data-column="column2">Name</th>
								<th class="column100 column3" data-column="column3">Tk</th>
								<th class="column100 column4" data-column="column4">Edit</th>
								<th class="column100 column5" data-column="column5">Delete</th>
							</tr>
						</thead>
						<tbody>
						
						 <?php while($lunch_row=$lunch->fetch_assoc()) {?>
							<tr class="row100">
								<td class="column100 column1" data-column="column1"><?php echo $lunch_row['id'] ?></td>
								<td class="column100 column1" data-column="column2"><?php echo $lunch_row['name'] ?></td>
								<td class="column100 column2" data-column="column3"><?php echo $lunch_row['tk'] ?></td>
								<td class="column100 column3" data-column="column4"><a href="../editl/editl.php?id=<?php echo $lunch_row['id']?>">Edit</a> </td>
								<td class="column100 column4" data-column="column5"><a href="../deletel.php?id=<?php echo $lunch_row['id']?>">Delete</a> </td>
								
							
							<?php }?>

							
						</tbody>
					</table>
				</div>
            
             <?php }?>
             
             
<!--             table four    -->

<!--
				<div class="dinner_list"style="text-align: center;padding: 25px;font-weight: bold;color: blue;">
			    <h1>Breakfast List</h1>
			</div>
-->
           

<!--
				    <?php if($breakfast->num_rows>0) {?>
				<div class="table100 ver6 m-b-110">
					<table data-vertable="ver3">
						<thead>
							<tr class="row100 head">
								
								<th class="column100 column1" data-column="column1">ID</th>
								<th class="column100 column2" data-column="column2">Name</th>
								<th class="column100 column3" data-column="column3">Tk</th>
								<th class="column100 column4" data-column="column4">Edit</th>
								<th class="column100 column5" data-column="column5">Delete</th>
							</tr>
						</thead>
						<tbody>
						
						 <?php while($breakfast_row=$breakfast->fetch_assoc()) {?>
							<tr class="row100">
								<td class="column100 column1" data-column="column1"><?php echo $breakfast_row['id'] ?></td>
								<td class="column100 column1" data-column="column2"><?php echo $breakfast_row['name'] ?></td>
								<td class="column100 column2" data-column="column3"><?php echo $breakfast_row['tk'] ?></td>
								<td class="column100 column3" data-column="column4"><a href="../editb/editb.php.php?id=<?php echo $breakfast_row['id']?>">Edit</a> </td>
								<td class="column100 column4" data-column="column5"><a href="../deleteb.php?id=<?php echo $breakfast_row['id']?>">Delete</a> </td>
								
							
							<?php }?>

							
						</tbody>
					</table>
				</div>
            
             <?php }?>
-->
			</div>
		</div>
	</div>
	
	
    <div class="logout" style="margin-top:10px;text-align: center;
    background: blueviolet;
    margin-top: 0px;">
        <button style="    padding: 10px 20px;
    background: black;
    border-radius: 20px;
    margin: 22px;"> <a href="../logout.php">Logout</a></button>
        
    </div>


	

<!--===============================================================================================-->	
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