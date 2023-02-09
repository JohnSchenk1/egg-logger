<?php

    echo " Hello " ;
    echo $_Get;
    print_r($_Get);
    echo "Hello" . $_Get["name"]. "<p>";

    foreach ($_Get as $id => $val){
        echo $id . "==>" . $val . "<br>";
    }
    
    $f = fopen("test.json", "a");
    fwrite($f, "This is a file.");
    fclose($f);
    echo "Saved";    
    
?>