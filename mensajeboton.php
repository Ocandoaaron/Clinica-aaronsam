<?php

if (isset($_SESSION ["mensaje"])) {

}


?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey !</strong> <?=  $_SESSION ["mensaje"];   ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>


<?php
    unset($_SESSION ["mensaje"]);
    
?>





