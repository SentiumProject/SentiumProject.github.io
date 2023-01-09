<?php
$hwid = $_GET['hwid'];

$file = fopen("hwid_list.txt", "r");

while (!feof($file)) {
   $line = trim(fgets($file));
   if ($line == $hwid) {
      echo "AUTHORIZED";
      fclose($file);
      return;
   }
}

fclose($file);
echo "UNAUTHORIZED";
?>
