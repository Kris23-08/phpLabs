<?php 
    echo 'Hello World';

    $boolEx = true;
    $numberEx = 123;
    $stringEx = 'Qwerty';
    $arrEx = array("key" => 213, "key2" => "value");
    class objEx {
        function HelloClass() {
            echo "<h1>Hello Class</h1>";
        }
    }

    $newObj = new objEx;

    $newObj -> HelloClass();

    $nullEx = NULL;

?>