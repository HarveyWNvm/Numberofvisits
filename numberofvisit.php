<?php
            session_start(); //start session
            session_destroy();
           unset($_SESSION['counter']);

          $_SESSION['visit'] += 1; //set session variable

            //Check if session is set
           if(isset($_SESSION['visit'])){
           echo "<b style=\"color:#0d91bd\">You visited this page</b> <span style=\"color:#3dbf15\">".$_SESSION['visit']. "</span> <b>times</b>";
              }
            ?>
