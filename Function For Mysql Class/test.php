<?php
// input 1 out One. input 2 out Two....... etc.

function allClass($x){
    $formula = [
      1 => "One",
      2 => "Two",
      3 => "Three",
      4 => "Four",
      5 => "Five",
      6 => "Six",
      7 => "Seven",
      8 => "Eight",
      9 => "Nine",
      10 => "Ten",
      11 => "Eleven",
      12 => "Twelve"
    ];
    return $formula[$x];
}

 echo allClass(12);