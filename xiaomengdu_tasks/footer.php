<style>
       
        footer {
            background-color: #3498db; 
            padding: 20px; 
            color: #fff;
            text-align: center; 
        }
    </style>
<?php
function displayLastModifiedTime($filename) {
   
    $lastModifiedTime = filemtime($filename);


    $formattedLastModified = date('F d, Y H:i:s', $lastModifiedTime);


    $baseName = basename($filename);

    echo " $baseName was last modified on: $formattedLastModified";
}
?>

<footer>
    <div class="container">
        <p>welcome to HAMK</p>
        <p>&copy; <?php echo date('Y'); ?>  All rights reserved.</p>

        <?php
        $currentFilename = $_SERVER['SCRIPT_FILENAME'];
        displayLastModifiedTime($currentFilename); 
        ?>
    </div>
</footer>




</body>
</html>