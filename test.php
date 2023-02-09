<?php

    echo " Hello " ;
    echo $_Get;
    print_r($_Get);
    echo "Hello" . $_Get["name"]. "<p>";

    echo '<input type=button value="submit">';


    foreach ($_Get as $id => $val){
        echo $id . "==>" . $val . "<br>";
    }
    
    $f = fopen("test.json", "w");
    fwrite($f, "This is a file.");
    fclose($f);
    echo "Saved";    
    
?>

