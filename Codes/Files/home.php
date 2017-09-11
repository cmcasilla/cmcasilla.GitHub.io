<?php
	session_start();
	date_default_timezone_set('Asia/Manila');
	$date = date("m/d/y l");

?>
<!DOCTYPE html>
	<html lang="en">
	<!--Head Section-->
		<head>
			<meta charset="UTF-8">
			<title>in[ART]side - The Newest Online Art Gallery and Community</title>
			<link rel="icon" href="" sizes="32by32">
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
							<img src="" height="50px" width="50px" alt="Inside Art">
								<span class="toleft">
								<h2>in[ART]side</h2>
								<p>The Newest Online Art Gallery and Community</p>
								</span>
								<span class="date" style="font-size:14pt;position:absolute;left:1180px;top:12.5px;">
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
									<form action="search_fnc.php" method="post">
										<input type="text" name="qry" style="height:25px;width:210px;">
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
				<div id="body_wrapper">
								<div id="Whats_new_wrapper">
			<div id="whats_new">
				<h2>What's New</h2>
				<p><a href="#"   class="browse">Browse More What's New →</a></p>
		</div>
		<hr>
		<div id="whats_new_gal">
			<table cellpadding="0" cellspacing="10" border="0">
			<tr>
				<td rowspan="2" colspan="2"><img src="../../Images/Gal/1.png" height="240" width="240"></td>
				<td><img src="../../Images/Gal/1.jpg" height="100" width="100"></td>
				<td><img src="../../Images/Gal/2.jpg" height="100" width="100"></td>
				<td><img src="../../Images/Gal/3.jpg" height="100" width="100"></td>
				<td><img src="../../Images/Gal/4.jpg" height="100" width="100"></td>
				<td rowspan="3" colspan="3"><img src="../../Images/Gal/3.png" height="340" width="340"></td>
				<td><img src="../../Images/Gal/5.jpg" height="100" width="100"></td>
			</tr>

			<tr>
				<td><img src="../../Images/Gal/6.jpg" height="100" width="100"></td>
				<td colspan="2" rowspan="2"><img src="../../Images/Gal/2.png" height="240" width="240"></td>
				<td><img src="../../Images/Gal/7.jpg" height="100" width="100"></td>
				<td><img src="../../Images/Gal/8.jpg" height="100" width="100"></td>
			</tr>
			<tr>
				<td><img src="../../Images/Gal/9.jpg" height="100" width="100"></td>
				<td><img src="../../Images/Gal/11.jpg" height="100" width="100"></td>
				<td><img src="../../Images/Gal/12.jpg" height="100" width="100"></td>
				<td><img src="../../Images/Gal/13.jpg" height="100" width="100"></td>
				<td><img src="../../Images/Gal/10.jpg" height="100" width="100"></td>
			</tr>
			</table>
		</div>
		<hr>
		<div id="featured_wrapper">
			<div id="featured">
				<h2>Featured Art</h2>
			</div>
			<hr>
			<div id="featured_gal">
			<table border="0">
			<tr>
							<td colspan="10"><img src="../../Images/Gal/feat.jpg" height="400" width="1175"></td>
			</tr>
			<tr>
				<td colspan="8" width="900">&nbsp;</td>
				<td>Artist Name:</td>
				<td>unknown</td>
			</tr>			
			</table>
			</div>
			</div>
		</body>
	</html>


