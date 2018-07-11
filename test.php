<!DOCTYPE html>
<html>
<head>

</head>
<body>

</body>
</html>
<?PHP
echo "Here are our files <br />";
$path = "./uploads";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
  if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
      echo "<br /><br /><a href='$path/$file'>$file</a>    ";
      #echo "last modified: " . date ("F d Y H:i:s.", filemtime($file));
      echo filesize($file);
      clearstatcache();
      $i++;
  }
}
closedir($dh);
?>
