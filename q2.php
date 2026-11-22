<?php 
function calculatePerimeter($length,$width){
    $area = 2 * $length * $width;
    return $area;
}
$result = calculatePerimeter(10,5);
echo "Perimeter of a rectange $result";
?>