<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking_system');

$q="select * from users ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);


?>
<html>
<head>
   <title>viewUser</title>
   <link rel="stylesheet" href="button.css">
   
	<style>
		body{
			text-align:center;
		}
		.flat-table-1 {
			background: #FFFFFF;
		}
		.flat-table-1 tr:hover {
			background: rgba(15,45,0,0.19);
		}
		h1{
			font-family: Arial, Times, serif;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid orange;
			border-collapse:collapse;
			}
		th{
			color:red;
			font-size:25px;
			padding:20px;
		}
		
		td{
			text-align:center;
			font-size:22px;
			color: #92c6df;
			padding: 0px 10px 0px 10px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
			text-shadow: 1px 1px black;
		}
		.css-button{
			margin-left:auto;
			margin-right:auto;
		}
		.button1{
			background-color:white;
			text-align:center;
			padding-top:2px;
		}
		
		.button1:hover{
			background-color:orange;
		}
		.view{
			top:50%;
			padding-top:20px;
			text-align:center;
		}
		.ho{
			padding-top:20px;
			padding-bottom:55px;
		}
		body{
		background-image:url("https://assets.kpmg/is/image/kpmg/hand-holding-phone-with-dollar-sign-on-screen:cq5dam.web.512.341");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
	
</head>
	
<body>
	<h1 style="color:red;text-shadow: 1px 1px black;">USER DETAILS</h1>
    <table class="flat-table-1">
		<thead>
			<th>NO</th>
			<th>NAME</th>
			<th>E-mail</th>
			<th>BALANCE</th>
			<th></th>
		</thead>
		<tbody>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post"  class="view">
					<button class="button1" type="submit" name="name" value="Avinash">View</button>
				</form>
			</td>
		</tr>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 2</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Harshal">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 3</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Prathamesh">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 4</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Ajay">View</button>
				</form>
			</td>
   

        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 5</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Vaishali">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 6</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Monika">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
     
				$row=mysqli_fetch_array($result);
			?>
			<td> 7</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Ravina">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php   
				$row=mysqli_fetch_array($result);
			?>
			<td> 8</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Nishant">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 9</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Avdhut">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 10</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Rushi">View</button>
				</form>
			</td>
		</tr>
		</tbody>
	</table><br><br>

<div class="buttons">
	<a href="index.php">
    <button class="glow-on-hover">HOME</button>
	</a>
</div>
</body>
</html>
