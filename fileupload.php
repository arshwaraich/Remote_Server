<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      chmod($path, 0777);
      echo "The file ".  basename( $_FILES['uploaded_file']['name']).
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>
