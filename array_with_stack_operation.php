<?php

$target = [1,3];
$n = 3;

$result = buildArray($target, $n);

foreach ($result as $item)
{
    echo $item."\n";
}
 

function buildArray($target, $n) {
 
        $narray = array();
        $ex = range(1,$n);
        $size = count($ex);
        $tsize = count($target);
        $ei = $target[$tsize-1];
        for($i=0;$i<$size;$i++)
        {
           $search_element = $ex[$i]; 
            if(in_array($search_element,$target)==TRUE)
            {
                array_push($narray,"Push");
                   
            }
            else
            {    
                array_push($narray,"Push");
                array_push($narray,"Pop");
            }
            if($ei==$ex[$i] && $ei<$n)
            {
              break;    
            }
            
            
           
        }
        
        return $narray;
        
    }
?>

