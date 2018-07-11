<!DOCTYPE html>
<html>
<head>
  <title>Upload your files</title>
  <meta name="theme-color" content="#ED4337">
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <style>
  iframe {  
    height:64vh;                
    width:100vw;
  }
  div.header {
  font-family: Arial, sans-serif;
  color: #ffffff;
  font-size: 8vmin;
  width:100vw;
  height: 10vh;
  background: #ED4337;
  text-align: center;
  vertical-align: middle;
  line-height: 10vh; 
  box-shadow: 0px 1px 7px #888888;
  }
  .box {
    padding-bottom: 10vh;
    padding-top: 3vh;
    padding-left: 1vh;
    padding-right: 1vh;
  }
  .button {
    background-color: #ED4337;
    font-family: Arial, sans-serif;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 5vmin;
    margin: 4px 2px;
    cursor: pointer;
  }
  .left {
  float: left;
  }
  .right {
  float: right;
  }
  input[type="file"] {
    display: none;
  }
  body {
    margin: 0;
    text-align: center;
  }
  </style>
  <script type="text/javascript">
  <!--
  if (screen.width <= 699) {
  document.location = "mobile.php";
  }
  //-->
  </script>
</head>
<body>
    <div class="header">Remote Server v1.0</div><br>
    <div class="box">
     <form enctype="multipart/form-data" action="drive.php" method="POST">
       <label class="button" style="float: left;">
        <input type="file" name="uploaded_file"/>
        <i class="fa fa-cloud-upload"></i> Choose file
       </label>
     <input type="submit" class="button right" value="Upload"></input>
     </form>
    </div>
  <br><br><br>
  <iframe src="uploads" scrolling="no" frameborder="0" style="background: #d3d3d3;"></iframe>
</body>
</html>
<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>
