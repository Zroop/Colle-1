<?php
function colle($x, $y)
{
  if ((!is_int($x)) OR (!is_int($y)))
  {
    return "Mauvais parametre";
  }
  if (($x < 0) OR ($y < 0))
  {
    return "Mauvais parametre";
  }
  for ($j=1; $j <= $y; $j++)
  {
    for ($i=1; $i <= $x; $i++)
    {
      if ($x==1 OR $y==1)
      {
        echo "B";
      }
      elseif (($j==1 && $i == 1) OR ($j == $y && $i == 1))
      {
        echo "A";
      }
      elseif (($j == 1 && $i == $x) OR ($j == $y && $i == $x))
      {
        echo "C";
      }
      elseif ($j==1 OR $j==$y OR $i==1 OR $i==$x)
      {
        echo "B";
      }
      else
      {
        echo " ";
      }
    }
    echo "\n";
  }
}

colle(1, 5);
