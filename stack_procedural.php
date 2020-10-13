<?php
// Stack Program Using Procedural

$stack = [];
$top = -1;


// Push Function
function push($stack,$item,$top)
{
   global $top,$stack;
   $top++;
   $stack[$top] = $item;
}


// Pop Function

function pop($top,$stack)
{
    global $top,$stack;
    if($top < 0) return -1;
    
    $top_item = $stack[$top];
    unset($stack[$top]);
    $top--;
    return $top_item;
    
    
}


// Peek Element Function 


function peek($stack,$top)
{
    global $top,$stack;
    $top_element = $stack[$top];
    return $top_element;
}

push($stack,1,$top);
push($stack,2,$top);
push($stack,3,$top);
push($stack,4,$top);
push($stack,5,$top);
push($stack,6,$top);
push($stack,7,$top);

$s1 = implode(",",$stack);
echo "The Stack Is : ".$s1."\n";

$peek_element = peek($stack,$top);
echo "Top element is : ".$peek_element."\n";


$pop_element = pop($top,$stack);
echo "POP element is : ".$pop_element."\n";

$s1 = implode(",",$stack);
echo "After Pop Element The Stack Is : ".$s1."\n";

$peek_element = peek($stack,$top);
echo "Top element is : ".$peek_element."\n";


?>

