	<html>
	<head>
	<title>LOGIN PAGE</title>
	</head>
	<body>
		<?php
			$servername="localhost";
			$username="root";
			$password="";
			$co=mysqli_connect($servername,$username,$password);
			if(!$co)
			{
				echo"connection failed";
			}
		?>
		<style>
			body
			{
				background-color:black;
				color:white;
			}
			#container
			{
				background-color:black;
				color:white;
				display:flex;
				align-items:center;
				justify-content:center;
				width:auto;
				height:auto;
			}
			#main
			{
				padding:30px;
				margin:50px;
				border:4px solid red;
				width:400px;
				height:200px;
				max-height:600px;
				max-width:800px;
				font-family:consolas;
				display:flex;
				align-items:center;
				justify-content:center;
			}
			#but
			{
				margin-top:20px;
				background-color:black;
				color:white;
				border:2px solid yellow;
				font-family:consolas;
			}
			#head
			{
				border:4px solid purple;
				background-color:red;
				color:black;
				width:auto;
				padding:20px;
				font-family:consolas;
				font-size:2em;
			}
		</style>
		<div id="head" align="center">LOGIN PAGE</div>
		<div id="container">
			<div id="main">
			<form action="form.php" method="post">
			<?php $a=0; $b=0; $c=0;?>
				<label>Username:</label>
				<input type="text" name="name" placeholder="USERNAME" required><br><br>
				<label>Password:</label>
				<input type="password" name="pass" required><br><br>
				<label>Re-Enter Password:</label>
				<input type="password" name="rpass" required><br>
				<button type="submit" id="but">SUBMIT</button>
				<?php
				if(isset($_POST["name"])&&isset($_POST["pass"])&&isset($_POST["rpass"]))
				{
				$a=$_POST["name"];
				$b=$_POST["pass"];
				$c=$_POST["rpass"];
					if($b==$c)
						{
							$ins="use form;INSERT INTO info VALUES('$a','$b')";
							mysqli_multi_query($co,$ins);
						echo "Sign Up Successful";
						}
					else
						{
							echo"Password is incorrect";
						}

				}
				mysqli_close($co);
				?>
			</form>
			</div>
		</div>
	</body>
</html>
