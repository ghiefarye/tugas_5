<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        break; 
    }
    
    echo $i;
    if ($i < 5) {
        echo ", ";
    }
}
?>