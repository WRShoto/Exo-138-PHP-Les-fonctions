<?php

// Premiere ligne

function helloWorld(){
    echo "Hello World!";
}

//Deuxieme ligne
helloWorld();


//Troisieme ligne

function maFonctionParam($fname, $lname) {
    echo "hello $fname $lname";
    if (is_float($fname)){
        return intval($fname );
    }
    if (is_float($lname)){
        return intval($lname );
    }
    return false;
}

maFonctionParam('bla','blou');





