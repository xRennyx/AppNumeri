<?php

$data=new Datetime();
echo $data->format('d/m/y h:i:s');
echo '<br>';
$data->modify('+2 days');
echo 'Data oggi +2 '.$data->format('d/m/y h:i:s');
echo '<br>';
$data3= new DateTime('+2 days');
echo $data3->format('d/m/y h:i:s');
echo '<br>';
$data3= new DateTime('-10 days, -3 years');
echo $data3->format('d/m/y h:i:s');
echo '<br>';

echo 'differenza tra 2 date: ';
$data4=new DateTime('10/01/2025 8:37:44');
$diff= $data3->diff($data4);
echo $diff->days;
echo '<br>';
echo $diff->y;
echo '<br>';
echo $diff->m;
echo '<br>';
echo 'Differenza data completa: ';
echo $diff->format('%y-%m-%d-%h-%i-%s');
echo '<br>';
echo $diff->i;
echo '<br>';

$intervalTime=new DateInterval('P1Y3M4DT2H3M4S');
$newDate=$data4->add($intervalTime);
echo $newDate->format('d/m/y h:i:s');
