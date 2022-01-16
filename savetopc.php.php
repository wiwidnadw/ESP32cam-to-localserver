<?php

$received = file_get_contents('php://input');
$fileToWrite = "photo/captured – ".time().".jpg";
$time = "www.imagetophp/photo/upload - ".time().".jpg";
file_put_contents($fileToWrite, $received);


if ($received) {
if (file_exists($filename)) {
  $myfile = fopen('alamaturl.txt', "w+") or die("Unable to open file!");
  fwrite($myfile, $time);
  fclose($myfile);
} else {
  $myfile = fopen('alamaturl.txt', "x+") or die("Unable to open file!");
  fwrite($myfile, $time);
  fclose($myfile);
}

}
?>
