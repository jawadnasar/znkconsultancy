<?php
    class Controller{

        
        public static function callpage($viewPage){
            require_once(__DIR__."/../pages/header.php");
            require_once(__DIR__."/../pages/$viewPage.php");
            require_once(__DIR__.'/../pages/footer.php');
        }
    }
?>