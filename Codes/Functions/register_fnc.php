<?php
	require"connection.php";
	$userID= rand_str(4) . generateRandStr(4);
	
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
	$sql = "INSERT INTO tbl_users VALUES('".$userID."','".$_POST['Uname']."','".$_POST['Email']."','".$_POST['Pword']."','" . $_POST["byear"] . "-" . $_POST["bmonth"] . "-" . $_POST["bday"] ."','".$_POST['gender']."','".'RealName'."','".'Location'."','".'Bio'."','".'lvlArtist'."','".'Specialty'."')";
	$con->query($sql);

	header('location:../../index.php?Success');
?>