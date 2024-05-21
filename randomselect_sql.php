<?php
include("connect.php");

header("Connect-type: text/html; charset=utf-8");

$slcdb = mysqli_select_db($db_link,"final");
if(!$slcdb){
	die("資料庫選擇失敗");
}


else{
//	echo "資料庫選擇成功";
    $pickType = "randomselect";
    $seat = 3;
    $sql_query = "SELECT * FROM " . $pickType . " WHERE seat = " . $seat;
    $result = mysqli_query($db_link, $sql_query);
    $an=array();
    $an=$result->fetch_row();
	print_r ($an);

}
?>