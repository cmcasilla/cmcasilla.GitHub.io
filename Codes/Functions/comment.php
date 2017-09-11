<?php
session_start();
require"connection.php";
	$commentID= rand_str(4) . generateRandStr(4);
	
function rand_str($length = 32, $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890')

{
    $chars_length = (strlen($chars) - 1);
    $string = $chars{rand(0, $chars_length)};
    for ($i = 1; $i < $length; $i = strlen($string)){
        $r = $chars{rand(0, $chars_length)};
	     if ($r != $string{$i - 1}) $string .=  $r;
    }
    return $string;
}
function generateRandStr($length){

      $randstr = "";
 for($i=0; $i<$length; $i++){
 $randnum = mt_rand(0,61);
 if($randnum < 10){
 $randstr .= chr($randnum+48);
}else if($randnum < 36){
 $randstr .= chr($randnum+55);
}else{
 $randstr .= chr($randnum+61);
 }
      }
      return $randstr;
   }
  $content =$_POST['comment'];
  $user="SELECT * FROM tbl_users WHERE Username ='".$_SESSION['user']."'";
  $records = $con->query($user); 
  while($data = $records->fetch(PDO::FETCH_BOTH)){
    $rname = $data[6];
  }
    $querys= "SELECT * FROM tbl_artworks WHERE postID='".$_GET['postID']."'";
  $rec = $con->query($querys);
    while($datas= $rec->fetch(PDO::FETCH_BOTH)){
    $postID = $datas[0];
  }
   date_default_timezone_set("Asia/Manila");
   $time = date("h:i:sa");
  $date = date("m/d/y");
	$sql = "INSERT INTO tbl_comment VALUES('".$commentID."','".$rname."','".$content."','".$time."','".$date."','".$postID."')";
	$con->query($sql);
		header('location:../Files/viewprof.php?UpdateSuccess');

	?>