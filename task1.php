<?php 

define("APP_NAME","Expense Calculator");
define("AUTHOR","Saiham hassan");

echo "<h2>". APP_NAME ."</h2>";
print("Created by:".AUTHOR ."<br>");
printf("Welcome to %s by %s <br><br>",APP_NAME,AUTHOR);

$food=200;
$transport=150;
$others=100;

$total=$food+$transport+$others;
$average=$total/3;

echo "Total Expense: $total <br>";
echo "Average Expense: $average <br>";

if ($total>1000){
    echo "Budget Exceded<br>";
} else{
    echo "Within Budget<br>";
}


$message=($total>800)? "High Expenses" : "Moderate or Low Expenses";
echo "Ternary Message : $message <br>";

switch(true){
    case ($total<500):
        echo "Switch Message :Low Expense Level <br>";
        break;
    case ($total>=500 && $total<=1000):
        echo "Switch Message :Medium Expense Level <br>";
        break;
    default:
        echo "Switch message :High Expense Level <br>";
        break;
}


function calculateTotal($f,$t,$o){
    return $f + $t + $o;
}

function cheakBudget($total){
    if ($total>1000){
        return"Budget Exceded";
    } else{
        return"Within Budget";
    }
}

$totalExpense=calculateTotal($food, $transport,$others);
echo "<br>Function Total: $totalExpense<br>";
echo "Budget Status(from function):". cheakBudget($totalExpense)."<br>";

?>