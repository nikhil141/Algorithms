<?php
$ops = ["5","2","C","D","+"]; 

$result = calPoints($ops);
echo $result;

    function calPoints($ops) {
        
        $size = count($ops);
        $s1 = array();
        
        for($i=0;$i<$size;$i++)
        {
            $element = $ops[$i];
            if(is_numeric($element))
            {
                array_push($s1,$element);
            }
            if($element=="C")
            {
                array_pop($s1);
            }
            if($element=="D")
            {
                $pro = end($s1)*2;
                
                array_push($s1,$pro);
            }
            if($element=="+")
            {
                $add = end($s1) + prev($s1);
                array_push($s1,$add);
            }
        }
    
        return array_sum($s1);
        
    }

?>

