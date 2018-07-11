<?php
class MaxNumber
{
    public function calculate($inputs = [],$order=0)
    {
    	$temp = [];

    	while ( count($inputs) > 0) {
    		$max = max($inputs);
    		
	    	$inputs = array_filter($inputs,function($var) use ($max){
	    		return ($var/$max!=1);
	    	});

    		$temp[] = $max;
    	}

    	return $temp[$order];

    }
 
}