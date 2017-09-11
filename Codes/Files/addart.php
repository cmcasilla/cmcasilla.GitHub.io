<?php
	session_start();
	date_default_timezone_set('Asia/Manila');
	$date = date("m/d/y l");

	require"../Functions/connection.php";

	$cat="SELECT * FROM tbl_artworks";
	$catrec = $con->query($cat); 


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
						function openNav() {
							    document.getElementById("myNav").style.width = "100%";
						}
						function closeNav() {
						   		 document.getElementById("myNav").style.width = "0%";
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
								<span class="date" style="font-size:14pt;position:absolute;top:12.5px; left:1075px;">
								<?php echo $date ;?>
								</span>
						
						<div id="navbar_wrapper">
							<div id="navmenu">
								<ul id="menu">
									<li><a href="../../index.php">WELCOME</li>
									<li style="padding-left:15px;"><a href="browse.php">BROWSE</li>
								</ul>
							</div> 
							
								<div id="search_bar">
									<form action="search_fnc.php" method="post">
										<input type="text" name="qry" style="height:25px;width:208px;">
										<input type="submit" Value="SEARCH" style="height:29px;width:68px;margin-left:-10px;">
									</form>
								</div> 
						</div>
					</div>
			</div>
			</div>
			<
				<div id="body_browse">
				<div id="categories_menu">
					<ul>
						<li><a class="active">All Categories</a></li>
						<li><a>Digital Art</a></li>
						<li><a>Mixed Media</a></li>
						<li><a>Paintings</a></li>
						<li><a>Photography</a></li>
						<li><a>Sculpture</a></li>
					</ul>
				</div>
				<div id="upload">
					<h2>Upload an Artwork</h2>
						<form action="../Functions/upload.php" method="post">
							<label>Add Image:</label>
							<input type="file" name="image_upload"><br>
							<label>Title:</label>
							<input type="text" name="title"><br>
							<label>Caption:</label>
							<textarea name="desc"></textarea><br>
							<label>Category:</label>
								<select name="cat">
									<option>Choose</option>	
									<option>Digital Art</option>
									<option>Mixed Media</option>
									<option>Painting</option>
									<option>Photography</option>
									<option>Sculpture</option>
								</select>
							<br>
							<label>Sub-Category</label>
							
							<br>
							<input type="submit" value="Post Artwork">
						</form>
					</div>
					<?php
							 $cols= 0;
							 echo '<table border="0" cellpadding="1" cellspacing="10" style="margin-left:0px;font-size:12pt;"><tr>';
							 while($catres = $catrec->fetch(PDO::FETCH_BOTH)){
							 	echo "<td>";
							 	echo "<table width='200' border='0'>";
							 	echo "<tr>";
							 	echo '<td colspan="2">'.'<a href="catsupp.php?itemID='.$catres['postID'].'"  >'.'<img src="'.$catres['Image'].'" width="200" height="150">'.'</a>'.'</td>';
							 	echo "</tr>";
							 	echo "<tr>";
							 	echo "<td ><a onclick='openNav()'>".$catres['Title']."</a></td>";
							 	echo "<td>".$catres['Category']."</td>";
							 	echo "</tr>";
							 	echo "</table>";
							 	echo "</td>";
							 	$cols ++;
							 if($cols==5){
							 	echo '</tr><tr>';
							 	$cols =0;
							 }else{

							 }
							}
							echo '</tr></table>';
							?>
				</div>
			</div>
		</body>
	</html>


