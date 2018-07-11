<?PHP

$base_directory = './uploads/';
chmod($base_directory.$_GET['file'], 0644);
if(unlink($base_directory.$_GET['file']))
    echo "File Deleted.";
else
    echo "REeeeeee can't delete $file_name";

?>
