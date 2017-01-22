<?php
$search_number = 99999;
$list = range(0, 99999);
$loop_count = 100;

echo "isset\n";
$start_time = microtime(true);
for ($i=0; $i<$loop_count; $i++) {
    if (isset($list[$search_number])) {}
}
$time = microtime(true) - $start_time;
echo $time/$loop_count . "seconds\n";
