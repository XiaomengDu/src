</div>
  </div>
  <div class="row">
<footer style="background-color: rgb(65, 7, 109);color: white;">

  <?php
function displayLastModifiedTime($filename) {
   
    $lastModifiedTime = filemtime($filename);


    $formattedLastModified = date('F d, Y H:i:s', $lastModifiedTime);


    $baseName = basename($filename);

    echo " $baseName was last modified on: $formattedLastModified";
}
?>
 <div class="container text-center">
        <p>welcome to HAMK</p>
        <p>&copy; <?php echo date('Y'); ?>  All rights reserved.</p>

        <?php
        $currentFilename = $_SERVER['SCRIPT_FILENAME'];
        displayLastModifiedTime($currentFilename); 
        ?>
    </div>
</footer>
</div>
</div>

<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
     

