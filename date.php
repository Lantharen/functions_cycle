<?php

$date = new DateTime('now');
echo "Today: "  . $date->format('Y-m-d H:i:s');
$date->modify('+1 day');
$date->modify('+1 month');
echo "</br>Tonorrow: "  . $date->format('Y-m-d H:i:s');
}


?>