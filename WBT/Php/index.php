<?php
echo "hello world!<br>";
/* 
Write a PHP script to calculate the area and perimeter of a Rectangle, and display the result. Hints: The area of a Rectangle = length × width, perimeter = 2 × (length + width)
*/
function areaOfRectangle($length , $width)
{
    return $length*$width;
}
function perimetarOfRectangle ($length , $width)
{
    return 2*($length+ $width);
}
$area= areaOfRectangle(10,5);
$perimeter=perimetarOfRectangle(10,5);
echo "Area: $area <br> 
";
echo "perimetr: $perimeter <br> ";

// Write a PHP script to calculate the VAT (Value Added Tax) over an amount Hints: VAT = 15% of the amount

function vatCalculation($amount, $vatPercentage)
{
    return ($amount *($vatPercentage/100));
}
$vatAmount=vatCalculation(200,5);
echo "vat : $vatAmount <br>";
//even odd number   
function  EvenOddFind($number)
 {   if($number%2==0)
    {
        return "$number is Even <br>";
    }
    else
        return "$number is odd <br>";
}
echo EVenOddFind(20);
echo EvenOddFind(11);

function ThreeNumberCompare($number1, $number2, $number3)
{
    if($number1>$number2)
    {
        if($number1>$number3)
        {
            return "$number1 is the large number <br>";
        }
        else
        {
            return "$number3 is the large number <br>";
        }
    }
    else 
    {
        if($number2>$number3)
        {
            return "$number2 is the large number <br>";
        }
        else
        {
            return "$number3 is the large number <br>";
        }

    }
}
echo ThreeNumberCompare(10,20,30);
echo ThreeNumberCompare(50,20,30);
echo ThreeNumberCompare(100,400,30);

for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . "<br>";
    }
}

function SearchArray($numbers, $goalNumber)
{
    $isFound = false;

    foreach ($numbers as $number) {
        if ($number == $goalNumber) {
            $isFound = true;
            break;
        }
    }

    if ($isFound == true) {
        return "$goalNumber is found in your array";
    } else {
        return "$goalNumber is not found in your array";
    }
}

function SearchArray2($numbers, $goalNumber)


?>