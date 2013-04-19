<?php

$ite=new RecursiveDirectoryIterator(__DIR__.'/../../sample_dir/');
$bytestotal=0;
$nbfiles=0;
$files = array(); // order changes per machine
foreach ($ite as $filename=>$cur) {
  if (substr($filename,-1)=='.') continue;
  $filesize=$cur->getSize();
  $bytestotal+=$filesize;
  $nbfiles++;
  $files[] = "$filename => $filesize\n";
}
asort($files);
var_dump(array_values($files));
echo "Total: $nbfiles files, $bytestotal bytes\n";
