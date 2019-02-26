<html>
<head>
<style>
.box {
    
    position:fixed;
    margin-left:-150px; /* half of width */
    margin-top:-150px;  /* half of height */
    top:50%;
    left:50%;
}
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 24px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	 margin-left:620px;
}
</style>
</head>
<body>
<?php
if( isset( $_POST["Upload"] ) )
{
    $target_path = "uploads/";

    $target_path = $target_path . basename( $_FILES['filename']['name']); 

    if(move_uploaded_file($_FILES['filename']['tmp_name'], $target_path)) {
        echo "The file ".  basename( $_FILES['filename']['name']). " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
}
?>
<table class="box" border="1px">
    <tr>
        <td>
<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    <input type="hidden" name="MAX_FILE_SIZE" value="9000000" />
    <input type="file" name="filename" />
    <input type="submit" value="Upload" name="Upload" />

</form>
 </td>
    </tr>
</table>
<br><br>
<table>
<tr>
        <td>
<a href="http://www.zettastars.com/displaydata1.php" class="button">Display Data</a>
 </td>
    </tr>
	</table>
</body>
</html>