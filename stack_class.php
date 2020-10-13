<?php
// Stack Program Using Class

/**
 * 
 */
class Stack
{
    private $stack;
    private $n;
    
    public function __construct($stack1=array(),$n=5)
    {
        $this->stack = $stack1;
        $this->n = $n;
    }
    
    public function push($item)
    {
        if(count($this->stack) < $this->n)
        {
            array_push($this->stack,$item);
        }
        else
        {
            throw new RuntimeException ("Stack Is full");
        }
    }
    
    public function pop()
    {
        if($this->isEmpty())
        {
            throw new RuntimeException("Srack Is Empty");
        }
        else
        {
            
            return array_pop($this->stack);    
        }
        
    }
    
    public function top()
    {
        
        return end($this->stack);
    }
    
    public function isEmpty()
    {
        return empty($this->stack);
    }
    
    public function display()
    {
        $s1 = implode(",",$this->stack);
        return $s1;
    }
    
}



$stack = new Stack();
$stack->push(10);
$stack->push(20);
$stack->push(30);
$stack->push(40);
$stack->push(50);

$stack_array = $stack->display();
echo "The Stack Is : ".$stack_array."\n";

$peek_element = $stack->top();
echo "The Top Element Is : ".$peek_element."\n";

$pop_element = $stack->pop();
echo "The POP Element Is : ".$pop_element."\n";

$stack_array = $stack->display();
echo "After POP The Stack Is : ".$stack_array."\n";

$peek_element = $stack->top();
echo "The Top Element Is : ".$peek_element."\n";

?>
