<?php 

    $var = 40;

    var_dump(filter_var($var, FILTER_VALIDATE_INT));
    echo '<br>';

    $option = array(
        "options" => array(
            'min_range'=>20,
            'max_range'=>25
        )
            
        );

    if(filter_var($var, FILTER_VALIDATE_INT, $option)){
        echo "<br> $var Range is availaible";
      }else{
        echo "<br> $var Range is not availaible";
      } 

?>