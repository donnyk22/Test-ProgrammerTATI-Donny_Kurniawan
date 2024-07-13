<?php

helloWorld(20);

function helloWorld(int $n){
    for ($i=1; $i<=$n; $i++){
        echo("helloworld(".$i.") => ");
        for ($j=1;$j<=$i; $j++){
            $out = "";
            if($j%4==0 && $j%5==0){
                $out = "helloworld";
            }else if($j%4==0){
                $out = "hello";
            }else if($j%5==0){
                $out = "world";
            }else{
                $out = $j;
            }
            echo($out." ");
        }
        ?><br><?php
    }
}

?>