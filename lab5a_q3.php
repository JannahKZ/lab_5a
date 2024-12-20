<?php
function multiplication($multiplier) {
    $results = [];
    for ($i = 1; $i <= 12; $i++) {
        $results[] = [
            'no' => $i,
            'multiplier' => $multiplier,
            'answer' => $i * $multiplier
        ];
    }
    return $results;
}

$multiplier = 2;
$table = multiplication($multiplier);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q3</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h2>Multiplication Table</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Multiplier</th>
                <th>Answer</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($table as $row): ?>
                <tr>
                    <td><?= $row['no'] ?></td>
                    <td><?= $row['multiplier'] ?></td>
                    <td><?= $row['answer'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>