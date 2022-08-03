<?php
    if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'){
        echo 'Yay!!! Request successful.';
    }
    else{
        echo 'This is not an AJAX request. This page cannot be accessed directly';
    }
?>