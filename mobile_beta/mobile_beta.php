<!DOCTYPE html>
<html>
<head>
  <title>Upload your files</title>
  <meta name="theme-color" content="#7E6EEF">
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="Stylesheet_m.css">
</head>
<body>
    <div class="header"><div class="text">Remote Server v1.1</div></div><br>
    <div class="box1">
     <form enctype="multipart/form-data" action="mobile_beta.php" method="POST">
       <label class="button" style="float: left;">
        <input type="file" name="uploaded_file"/>
        <i class="fa fa-cloud-upload"></i> Choose file
       </label>
     <input type="submit" class="button right" value="Upload"></input>
     </form>
    </div>
  <br><br><br>
  <?php include 'filelist_m.php';?>
</body>
</html>
<?php include 'fileupload_m.php';?>
