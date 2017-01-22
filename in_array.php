<?php
$search_number = 99999;
$list = range(0, 99999);
$loop_count = 100;

echo "in_array\n";
$start_time = microtime(true);
for ($i=0; $i<$loop_count; $i++) {
    if (in_array($search_number, $list, true)) {}
}
$time = microtime(true) - $start_time;
echo $time/$loop_count . "seconds\n";
