<?php

class conection{
    public static function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=CajeroApp","root","");
        return $link;
    }
}