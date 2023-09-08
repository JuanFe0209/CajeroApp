<?php
class Conection{
    public static function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=lavadero","root","");
        return $link;
    }
}
