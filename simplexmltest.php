<?php 
    // Instructions: Upload this file to the root web folder of your website, and then access it via your browser, for example - http://www.yourdomain.com/simplexmltest.php
    if (extension_loaded('simplexml')) {
      echo "All good, the SimpleXML extension is installed";

    }
    else { 
      echo "SimpleXML could not be found";
    }
?>
