<?php
foreach ($_POST["weather"] as $a ) {
	echo "輸入的是".$a."<br/>";
switch ($a) {
	case "晴天":
	    echo "天氣真好".$a."<br/>";
	    break;
	case "陰天":
	    echo "涼爽的天氣".$a."<br/>";
	    break;
	case "雨天":
	    echo "要帶傘出門".$a."<br/>";
	    break;
	default:
	    echo "記得看一下天氣預報".$a."<br/>";

}}
?>