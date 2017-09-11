<?php
	session_start();
	date_default_timezone_set('Asia/Manila');
	$date = date("m/d/y l");
	require"../Functions/connection.php";
	$user="SELECT * FROM tbl_users WHERE Username ='".$_SESSION['user']."'";
	$records = $con->query($user); 
	while($data = $records->fetch(PDO::FETCH_BOTH)){
		$uname = $data[1];
		$email = $data[2];
		$bday = $data[4];
		$sex = $data[5];
		$rname = $data[6];
		$location = $data[7];
		$bio = $data[8];
		$artlvl = $data[9];
		$spec = $data[10];
		$id = $data[0];
	}

?>
<!DOCTYPE html>
	<html lang="en">
	<!--Head Section-->
		<head>
			<meta charset="UTF-8">
			<title>in[ART]side - The Newest Online Art Gallery and Community</title>
			<link rel="icon" href="Codes/Styles/logo12.png" sizes="32by32">
			<link rel="stylesheet" href="../Styles/insideart.css">
			<link rel="stylesheet" href="../Styles/drop.css">

						<script>
						/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
						</script>
		</head>
	<!--End Head Section-->

	<!--Start Body Section-->
		<body>
			<div id="page_wrapper">
				<div id="header_wrapper">
					<div id="header">
						<div id="logo">
							<img src="Codes/Styles/logo12.padding-left" height="50px" width="50px" alt="Inside Art">
								<span class="toleft">
								<h2>in[ART]side</h2>
								<p>The Newest Online Art Gallery and Community</p>
								</span>
								<span class="date" style="font-size:14pt;position:absolute;left:910px;top:12.5px;">
								<?php echo $date ;?>
								</span>
							</div>
						<div id="navbar_wrapper">
							<div id="navmenu">
								<ul id="menu">
									<li><a href="../../index.php">WELCOME</li>
									<li style="padding-left:15px;"><a href="browse.php">BROWSE</li>
								</ul>
							</div>
								<div id="search_bar">
									<form action="../Functions/search_fnc.php" method="post">
										<input type="text" name="qry" style="height:25px;width:135px;">
										<input type="submit" Value="SEARCH" style="height:29px;width:68px;margin-left:-10px;">
									</form>
								</div> 
						</div>
						<div id="functions">
							<div id="dropdown">
							<p style="position:relative;left:150px;top:25px;">Welcome, <a onClick="myFunction()" class="dropbtn"><?php echo $_SESSION['user'];?></a></p>
							</div>
								<div id="myDropdown" class="dropdown-content">
								<a href="viewprof.php">View Profile</a>
								<a href="logout.php">Logout</a>
								</div>
								<span style="position:relative;left:470px;">
							<a href="message.php"><img src="../../Images/Icons/message.png" height="30px" width="30px"></a>
							<img src="../../Images/Icons/people.png" height="30px" width="30px">
							</span>
						</div>
					</div>
				</div>

				<div id="body">
					<div id="perInf">
						<h2>Personal Information</h2>
						<form action="../Functions/updprof_fnc.php" method="post">
						<?php
						echo "<img src='' width='200' height='200'>";
						echo "</br>";
						echo "<tr>";
						echo "<label>"."Real Name: "."</label>";
						echo "<input type='text' name='rname' value='$rname'>"; 
						echo "<br>";
						echo "<tr>";
						echo "<label>"."Location: "."</label>";
						echo "<input type='text' value='$location' name='loc'>";
						echo "<br>";
						echo "<tr>";
						echo "<label>"."Bio: "."</label>";
						echo "<input type='text' value='$bio' name='bio'></label>";
						echo "<br>";
						echo "<tr>";
						echo "<label>"."Birthday: "."</label>";
						echo "<label>".$bday."</label>";
						echo "<br>";
												echo "<tr>";
						echo "<label>"."Sex: "."</label>";
						echo "<label>".$sex."</label>";
						echo "<br>";
												echo "<tr>";
						echo "<label>"."Artist Level: "."</label>";
						echo "<input type='text' value='$artlvl' name='artlvl'></label>";
						echo "<br>";
												echo "<tr>";
						echo "<label>"."Specialty: "."</label>";
						echo "<input type='text' value='$spec' name='spec'></label>";
						echo "<br>";
						echo "<input type='submit' value='save'>";
						Echo '</form>';

					?>
						</div>
					</div>
				</div>
			</div>
		</body>
	</html>


