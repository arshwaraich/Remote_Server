<?PHP
$path = "./uploads";
$dh = opendir($path);
$i=1;
echo "<div class='div-table'>";
while (($file = readdir($dh)) !== false) {
  if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
      echo "<div class='div-table-row'>
                <div class='div-table-col center' style='width: 8vh; float: left;'>
                  <a href='$path/$file' style='display: block;'>
                    <i class='fa fa-eye'></i>
                  </a>";
    if(preg_match("/.pdf$/i",$file) || preg_match("/.txt$/i",$file) || preg_match("/.mp4$/i",$file) ||preg_match("/.jpeg$/i",$file) || preg_match("/.jpg$/i",$file) || preg_match("/.png$/i",$file)) {
        echo  "<div class='box'>
                <iframe src='$path/$file' width = '500px' height = '500px'>
                </iframe>
              </div>";
    }
    else {
      echo  "<div class='box'>
              <iframe src='$path/NoImageAvailable.jpg' width = '500px' height = '500px'>
              </iframe>
            </div>";
    }
    $i++;
    echo "  </div>
            <div  class='div-table-col'style='background: inherit;'>
                <div class='listbox center'>$file</div>
            </div>
            <div  class='div-table-col center' style='width: 8vh; float: right;'>
              <a href='delete_files.php?file=$file'><i class='fa fa-times'></i></a>
            </div>
          </div>";
  }
}
echo "</div>";
closedir($dh);
?>
