<?php

//var
$first  = '1st';
$second = '2nd';
$third  = '3rd';
$javanese = array("siji", "loro", "telu");

//const
define("one",   "in indonesian is satu");
define("two",   "in indonesian is dua");
define("three", "in indonesian is tiga");

//function
function javanese(){
    echo 'javanese is indonesian';
}

function jawa(){
    echo 'jawa is javanese';
}

//class
class me { 
    public $island  = 'java'; 
    public $country = 'indonesia'; 
    
    
    function print() { 
        print "$island in $country"; 
    } 
}

include('minidebug.php');