<?php
// this class is responsible for fetching current browsers request 
class Request{
    public static function uri(){
        $uri_full_path = $_SERVER['REQUEST_URI'];
        $uri_remove = str_replace('/prepratory/', '', $uri_full_path); 
        $uri = parse_url($uri_remove, PHP_URL_PATH);
        
        return $uri;
    }
}
?>