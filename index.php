<?php


/*Indexing

80-100          = A+
75-79           = A
70-74           = A-
65-79           = B+
60-64           = B
55-59           = C+
50-54           = C
40-49           = D
0-39            = Failed
Others input    = Invalid Input!

*/


$mark = (100);

if ($mark >= 80 && $mark <= 100) {
    echo "A+";
}
else if ($mark >= 75 && $mark <= 79){
    echo "A";
}
else if ($mark >= 74 && $mark <= 70){
    echo "A-";
}
else if ($mark >= 65 && $mark <= 69){
    echo "B+";
}
else if ($mark >= 54 && $mark <= 60){
    echo "B";
}
else if ($mark >= 55 && $mark <= 59){
    echo "C+";
}
else if ($mark >= 54 && $mark <= 50){
    echo "C";
}
else if ($mark >= 40 && $mark <= 49){
    echo "D";
}
else if ($mark >= 0 && $mark <= 39){
    echo "Failed";
}
else {
    echo "Invalid Input!";
}



























?>

