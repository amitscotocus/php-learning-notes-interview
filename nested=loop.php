<?php


for($am=1; $am<=5; $am++)

    {
        if($am % 2){
            echo "<p style='color: green'>this is for loop: $am </p><br />";
        }
        else{
            echo "<p style='color: red'>this is for loop: $am </p><br />";
        }
        
       
        
            
    
    for($ac=1; $ac<=5; $ac++)
    {
        
        if($ac % 2){
            echo "<p style='color: green'>this is for nested loop: $ac </p><br />";
        }
        else{
            echo "<p style='color: red'>this is nested for loop: $ac </p><br />";
        }
        
        // echo  "this is nested: $ac <br />";
        
        
    }
    }





?>