<!DOCTYPE html>
<html>
<body>
<table align="left" border="1" cellpadding="3" cellspacing="0">
<thead>
    <tr>
        <th>Year</th>
        <th>Basic Salary</th>
        <th>Allowance </th>
        <th>Total </th>
    </tr>
  </thead>
  <tbody>
<?php

$allowance=$_POST['allowance'];
$insalary = $_POST['insalary'];
$incsalary = $insalary /100;
$iallowance = $_POST['iallowance'];
$incallowance = $iallowance /100;
$salary= $_POST['basic']  ;
$sumsa=0;
$sumsal=0;
for($i=1;$i<=$_POST["year"];$i++) {
  $total = $salary +$allowance;
  echo "<tr>";
    for ($j=1;$j<=1;$j++){ 
      echo "<td>$i</td>";
    }
    for ($j=1;$j<=1;$j++){
      echo "<td>$salary </td>";
    }
    $sumsa = $salary * $incsalary;
    $salary += $sumsa;

    for ($j=1;$j<=1;$j++){
      echo "<td>$allowance </td>";
    }
    $sumsal = $allowance * $incallowance;
    $allowance += $sumsal;

    for ($j=1;$j<=1;$j++){
      echo "<td>$total </td>";
}
echo "<tr/>";
}
?>
</table>
</body>
</html>
