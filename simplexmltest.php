<?php 
    // Instructions: 
    // 1: Upload this file to the root web folder of your website.
    // 2: Then access it via your browser, for example - http://www.yourdomain.com/simplexmltest.php
    // 3: If the success message is displayed, you're good to go. If it isn't then you need to install SimpleXML on your server.
    
    if (extension_loaded('simplexml')) {
      echo "All good, the SimpleXML extension is installed";
    }
    else { 
      echo "SimpleXML could not be found";
    }
?>
