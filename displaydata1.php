<html>
<head>
    <title>Zettastar Software Solutions Pvt.Ltd | destination for your IT needs</title>
	<link href="favicon1.png" rel="icon" type="image/png">
	<style>
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
table, td, th {
    border: 1px solid black;
}
table {
    border-collapse: collapse;
    width: 50%;
}

th {
    height: 50px;
}
</style>
</head>

<body>
<div id="container">
<a href="http://www.zettastars.com" class="button">Home</a>
<a href="http://www.zettastars.com/fileupload1.php" class="button">Upload File</a>
</div>
<div align="center">
    <iframe id="my_iframe" style="display:none;"></iframe>
    <table >
    <?php
        $dir = 'uploads';
        $files = scandir($dir);
        sort($files);
		 // Gets each entry
        while($entryName=readdir( $dir)) {
          $dirArray[]=$entryName;
        }
		// Sorts files
        sort($dirArray);
		 
        $count = -1 ;
        foreach ($files as $file) {
        $v_download = "download_".$count;
        $v_delete = "delete_".$count;
       
            if ($file != '.' && $file != '..') {
                $str_URL = "uploads".$file;
				

                echo "<tr>";
                echo "<td>";
                echo $count;
                echo "</td>";
                echo "<td>";
                echo $file;
                echo "</td>";
				echo"<td>";
				// Gets Date Modified Data
				echo filemtime($file);
echo "<br />";
echo "Last modified: ".date("Y-m-d H:i:s (e)",filemtime($file));
				echo"</td>";

                echo "<td>";
              // Your php download code here
               $files = $file; 
			   echo "<a href='download.php?nama=".$files."'>download</a> ";
                
               // }
                echo "</td>";
                echo "<td>";
              echo "<form action='' method='post'><input type='submit' value='Delete' name='".$v_delete."'/></form>";
                if(isset($_POST[$v_delete])) {
                // Your php delete code here
                   unlink($dir."/".$file);
                echo "delete file : ".$file;
                }
                echo "</td>";
				
                echo "</tr>";
            }
            $count++;
        }
    ?>
</table>
</div>
</body>
</html>