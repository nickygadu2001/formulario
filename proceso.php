<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Datos enviados:</h2>";
    foreach ($_POST as $key => $value) {
        if (is_array($value)) {
            echo "<strong>$key:</strong> " . implode(", ", $value) . "<br>";
        } else {
            echo "<strong>$key:</strong> $value<br>";
        }
    }
}

?>