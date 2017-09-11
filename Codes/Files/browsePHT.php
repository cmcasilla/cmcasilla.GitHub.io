<?php
	session_start();
	date_default_timezone_set('Asia/Manila');
	$date = date("m/d/y l");

	require"../Functions/connection.php";

	$cat="SELECT * FROM tbl_artworks WHERE Category='Photography'";
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
						<link rel="stylesheet" href="../Styles/drp_over.css">

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
				<div id="body_browse">
				<div id="categories_menu">
					<ul>
						<li><a href="browse.php">All Categories</a></li>
						<li><a href="browseDA.php">Digital Art</a></li>
						<li><a class="active"  href="browseMM.php">Mixed Media</a></li>
						<li><a href="browsePNT.php">Paintings</a></li>
						<li><a href="browsePHT.php">Photography</a></li>
						<li><a href="browseSCL.php">Sculpture</a></li>
					</ul>
				</div>
<div id="content">
							<?php
							 $cols= 0;
							 echo '<table border="0" cellpadding="1" cellspacing="10" style="margin-left:0px;font-size:12pt;"><tr>';
							 while($catres = $catrec->fetch(PDO::FETCH_BOTH)){
							 	echo "<td>";
							 	echo "<table width='200' border='0'>";
							 	echo "<tr>";
							 	echo '<td colspan="2">'.'<a href="browsePHT.php?postID='.$catres['postID'].'"  >'.'<img src="'.$catres['Image'].'" width="200" height="150">'.'</a>'.'</td>';
							 	echo "</tr>";
							 	echo "<tr>";
							 	echo "<td ><a onclick='openNav()'>".$catres['Title']."</a></td>";
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
							<div id="myNav" class="overlay">
 						 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 						 <div style="display:block;background-color:#fff;width:1100px;position:relative;left:125px;">
  						<div class="overlay-content">
  							<?php

  							$querys= "SELECT * FROM tbl_artworks WHERE postID='".$_GET['postID']."'";
  							$resultsl=$con->query($querys); 
						while($datas = $resultsl->fetch(PDO::FETCH_BOTH)){
							$name = $datas[2];
							$desc = $datas[4];
							$image = $datas[3];
							$id = $datas[0];
							$cat = $datas[5];
							$subcat = $datas[6];
							$time = $datas[7];
							$dateR = $datas[8];
						}
							echo '<table>';
							echo '<tr>';
							echo '<td rowspan="5"><img src="'.$image.'" width="500" height="350"></td>';
							echo '</tr>';
							echo '<tr>';
							echo '<td>'.$name.'</td>';
							echo '</tr>';
							echo '<tr>';
							echo '<td>'.$dateR.' '.$time.'</td>';
							echo '</tr>';
							echo '<div id="comments_section" style="overflow:hidden;overlay-y:scroll;display:block;height:200px;width:500px;">';
						$queryc= "SELECT * FROM tbl_comment WHERE postID='".$_GET['postID']."'";
  						$qrycres=$con->query($queryc);
						 while($comres = $qrycres->fetch(PDO::FETCH_BOTH)){
							echo '<tr>';
							echo '<td>'.$comres['Name'].'</td>';
							echo '<td>'.$comres['cmtContent'].'</td>';
							echo '</tr>';
							echo '<tr>';
							echo '<td>'.$comres['Time'].' '.$comres['Date'].'</td>';
							echo '</tr>';
							echo '</div>';
						}
  							?>  							
  							<?php echo '<form action="../Functions/comment.php?postID='.$_GET['postID'].'" method="POST">';?>
  							<textarea name="comment" style="margin-left:250px;margin-bottom:-39px;position:relative;top:400px;height:100px;width:500px;left:140px;"></textarea>	
  							<input type="submit" Value="Comment" style="margin-top:-39px;position:relative;top:475px;height:50px;width:100px;left:75px;"">
  							</form>
  							</span>
  						</div>
  					</div>
							</div>
				</div>
			</div>
		</body>
	</html>


