<?php

$expenses = [
    "Food" => 1500,
    "Transport" => 800,
    "Shopping" => 1200,
    "Entertainment" => 600
];

echo "<pre>";
print_r($expenses);
echo "</pre>";
// array_push() 

array_push($expenses, 500); 
echo "After array_push(500):<br>";
print_r($expenses);
// array_pop() 

$lastItem = array_pop($expenses);
echo "<br>After array_pop(): Removed value = $lastItem<br>";
print_r($expenses);

// array_merge() 
$extra_expenses = ["Internet" => 900, "Electricity" => 1100];
$merged_expenses = array_merge($expenses, $extra_expenses);

echo "<br>After array_merge():<br>";
print_r($merged_expenses);

// array_sum() 
$total = array_sum($merged_expenses);
echo "<br>Total expenses (array_sum): $total<br>";


$expense_string = "100,200,300,400";
echo "Original String: $expense_string<br>";

$expense_array = explode(",", $expense_string);
echo "After explode(): ";
print_r($expense_array);

$expense_back_to_string = implode(" - ", $expense_array);
echo "<br>After implode(): $expense_back_to_string<br>";



$text = "monthly expense report";
echo "Original Text: $text<br>";

$upper = strtoupper($text);
echo "strtoupper(): $upper<br>";

$length = strlen($text);
echo "strlen(): $length<br>";

$sub = substr($text, 0, 7);
echo "substr(0,7): $sub<br>";

$replaced = str_replace("expense", "budget", $text);
echo "str_replace('expense','budget'): $replaced<br>";


$file = "expenses.txt";
$file_data = "Expenses List:\n";
foreach ($merged_expenses as $category => $amount) {
    $file_data .= "$category : $amount\n";
}
$file_data .= "Total: $total\n";

file_put_contents($file, $file_data);
echo "File 'expenses.txt' created and data written successfully!<br>";


$new_entry = "New Expense -> Rent: 3000\n";
file_put_contents($file, $new_entry, FILE_APPEND);
echo "New expense appended successfully!<br>";

echo "<br><strong>File Content:</strong><br>";
echo "<pre>";
echo file_get_contents($file);
echo "</pre>";

?>