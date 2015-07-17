<?php
// produce the list of yandex maps domains from domains.txt
$lines = file('domains.txt', FILE_IGNORE_NEW_LINES);
foreach($lines as $line) {
	//echo $line;
	preg_match("=https://www.yandex([^/]+)=u", $line, $matches);
	//var_dump($matches);	
	echo "<string>maps.yandex".$matches[1]."</string>\n";
}
?>