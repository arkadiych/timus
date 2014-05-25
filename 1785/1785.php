<?php

class Problem 
{

public function resolve()
{

  $substArray = array(
      0 => array(
          'min'  => 1,
          'max'  => 4,
          'dest' => 'few'
      ),
      1 => array(
          'min'  => 5,
          'max'  => 9,
          'dest' => 'several'
      ),
      2 => array(
          'min'  => 10,
          'max'  => 19,
          'dest' => 'pack'
      ),
      3 => array(
          'min'  => 20,
          'max'  => 49,
          'dest' => 'lots'
      ),
      4 => array(
          'min'  => 50,
          'max'  => 99,
          'dest' => 'horde'
      ),
      5 => array(
          'min'  => 100,
          'max'  => 249,
          'dest' => 'throng'
      ),
      6 => array(
          'min'  => 250,
          'max'  => 499,
          'dest' => 'swarm'
      ),
      7 => array(
          'min'  => 500,
          'max'  => 999,
          'dest' => 'zounds'
      ),
      8 => array(
          'min'  => 1000,
          'max'  => 2000,
          'dest' => 'legion'
      )

  );


  $figures = $this->readStreamInt();
  $i = 0;
  $isFound = false;
  $trans = '';
  while($i<count($substArray) && !$isFound) {
      if($figures[0] >= $substArray[$i]['min'] && $figures[0] <= $substArray[$i]['max']) {
        $trans = $substArray[$i]['dest'];
          $isFound = true;
      }
      $i++;
  }

    echo($trans);
}

protected function readStreamInt()
{
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

