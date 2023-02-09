<?php

    echo " Hello " ;
    echo $_GET;
    print_r($_GET);
    echo "Hello" . $_GET["name"] . "<p>";

    echo '<input type=button value="submit">';


    foreach ($_GET as $id => $val){
        echo $id . "==>" . $val . "<br>";
    }
    
    $f = fopen("test.json", "w");
    fwrite($f, "This is a file. \n");
    fwrite($f, json_enconde($_GET) . "\n" );

    fclose($f);
    echo "Saved";    
    
?>

