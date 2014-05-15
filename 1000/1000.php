<?php

class Problem 
{


public function resolve()
{
  $number = $this->readStreamInt();
  print $number[0] + $number[1] ;

}

protected function readStreamInt()
{
    $str = '';
    $numbers = array();
    while($str = fgets(STDIN)) {
        preg_match_all('!\d+!', $str, $matches);
        $numbers = array_merge($numbers, $matches[0]);
    }
    return $numbers;
}

}

$p = new Problem;

$p->resolve();

