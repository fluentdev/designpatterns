<?php 


spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
    //include 'Factories\\' . $class_name . '.php';
});


?>