<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 20/09/16
 * Time: 16:39
 */

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

$ages = [42, 51, 45, 48, 19];

$sum = 0;

for ($i=0; $i<=count($ages); $i++)
{
    $sum += $ages[$i%6];
}

$average = $sum/count($ages);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Test_php</title>
</head>
<body>
<table>
    <tr>
        <th>Nom</th>
        <th>Age</th>
    </tr>
    <?php
    foreach ($students as $key=>$value)
    {
        echo "<tr>\n<td>";
        echo $key;
        echo "</td>\n<td>";
        echo $value;
        echo "</td>\n</tr>";
    }
    ?>
</table>

<p>Moyenne d'age : <?php echo $average; ?></p>

</body>
</html>
