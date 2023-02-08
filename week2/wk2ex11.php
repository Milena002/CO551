<?php
  $mymarks["CO450"] = 89;
  $mymarks["CO451"] = 83;
  $mymarks["CO452"] = 65;
  $mymarks["CO453"] = 78;
  $mymarks["CO454"] = 73;
  $mymarks["CO455"] = 94;

  // foreach loop here…
  foreach ($mymarks as $index => $value)
  {
    echo "for  $index module my grade was  $value <br/>";
  }

  $total = 0;

  foreach ($mymarks as $index => $value)
  {
    $total = $total + $mymarks[$index];
  }
    $average = $total /  6; 
    $averageRounded = round($average);   
    echo "<br/> My average mark for Year 1 is: $averageRounded </br>" ;
    
?>