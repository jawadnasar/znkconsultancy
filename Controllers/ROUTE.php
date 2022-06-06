<?php
    class Route{

        public static $validRoutes = array();
        
        public static function set($route, $function){
            self::$validRoutes[] = $route;
            $route = strtolower($route);
            $url = isset($_GET['url']) ? $_GET['url'] : '';
            $url = strtolower(str_replace('.php', '', $url));
            $url = "/". $url;   // appending url with a slash character
            if($url == $route){
                $function->__invoke();
            }
        }

        public static function checkError($route, $function){
            self::$validRoutes[] = $route;
            $route = strtolower($route);
            $url = isset($_GET['url']) ? $_GET['url'] : '';
            $url = strtolower(str_replace('.php', '', $url));
            $url = "/". $url;   // appending url with a slash character
            if($url == $route){
                $function->__invoke();
            }
        }

        // public static function dirs($route, $function){
        //     self::$validRoutes[] = $route;
        //     $url = isset($_GET['url']) ? $_GET['url'] : '';
        //     $url = str_replace('.php', '', $url);
        //     echo "<br>Not url : ".$url ." route: $route";
        //     $url = "/". $url;   // appending url with a slash character
        //     if($url == $route){
        //         $function->__invoke();
        //     }
        // }
    }
?>