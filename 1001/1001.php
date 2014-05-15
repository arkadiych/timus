<?php

class Problem 
{

public function resolve()
{
  $number = $this->readStreamInt();
  for($i=count($number)-1; $i>=0; $i--) {
      printf('%.4f',round(sqrt($number[$i]), 4));
      echo PHP_EOL;
  }

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

