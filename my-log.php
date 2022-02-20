<?php
    function myLog(...$data) {
        echo '<pre>';
        echo "<h3>Log</h3>";
        echo var_dump(...$data);
        echo '</pre>';
    };
?>