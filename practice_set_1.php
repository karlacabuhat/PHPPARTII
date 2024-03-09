<?php
function calculate_Total_Price(array $items): float
{
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}
function modify_String(string $string): string
{
    $string = str_replace(' ', '', $string);
    return strtolower($string);
}

function check_Even_Or_Odd(int $number): string
{
    if ($number % 2 == 0) {
        return "The number $number is even.";
    } else {
        return "The number $number is odd.";
    }
}
$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

$totalPrice = calculate_Total_Price($items);
echo "Total price: $" . $totalPrice;

$string = "This is a poorly written program with little structure and readability.";

$modifiedString = modify_String($string);
echo "\nModified string: " . $modifiedString;

$number = 49;

echo "\n" . check_Even_Or_Odd($number);



?>