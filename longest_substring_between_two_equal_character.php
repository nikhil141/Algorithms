<?php 
$s = "abcoghohokoa" ;
function maxLengthBetweenEqualCharacters($s) {
        
      $m =0;  
      $a = str_split($s);
      $size = count($a);
      $ar = array_reverse($a);
      
      for($i=0;$i<$size;$i++)
      {
          $in = $size - array_search($a[$i],$ar) -1;
          $new = $in-$i;
          $m = max($m,$new);
      }
        
      return $m-1;  
        
    }
    
$l = maxLengthBetweenEqualCharacters($s);
twecho $l;
    
?>
