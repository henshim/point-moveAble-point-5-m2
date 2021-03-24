<?php
include 'MoveablePoint.php';

$test = new MoveablePoint(1, 2, 2, 2);
echo $test->toString();
echo '<br>';
$test->move();
echo $test->toString();