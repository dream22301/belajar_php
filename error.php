<?php
try {
    $x = 5 / 1;
} catch (DivisionByZeroError $e) {
    echo "Error: " . $e->getMessage();
}
?>