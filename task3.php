<?php
session_start();

if (isset($_POST['submit'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['budget'] = $_POST['budget'];
}


if (isset($_SESSION['name']) && isset($_SESSION['budget'])) {
    echo "Welcome, " . $_SESSION['name'] . "! Your budget is " . $_SESSION['budget'] . ".<br><br>";
}


if (isset($_POST['delete'])) {
    session_unset();
    session_destroy();
}

?>

<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Budget: <input type="number" name="budget" required><br><br>
    <input type="submit" name="submit" value="Save">
</form>

<form method="post">
    <input type="submit" name="delete" value="Delete Session">
</form>

<?php

function sumRecursive($arr, $i = 0) {
    if ($i == count($arr)) return 0;
    return $arr[$i] + sumRecursive($arr, $i + 1);
}
echo "<br>Sum: " . sumRecursive([5, 8, 6, 11]) . "<br>";


function applyDiscount($amount, $callback) {
    return $callback($amount);
}
echo "Discounted price: " . applyDiscount(150, fn($p) => $p * 0.9) . "<br>";


function divide($a, $b) {
    try {
        if ($b == 0) throw new Exception("Cannot divide by zero!");
        echo "Division result: " . ($a / $b) . "<br>";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "<br>";
    } finally {
        echo "Done.<br>";
    }
}
divide(10, 5);
divide(10, 0);
?>
