<?php 
    $students = [
    [
        'name' => 'Alice',
        'program' => 'BIP',
        'age' => 21
    ],
    [
        'name' => 'Bob',
        'program' => 'BIS',
        'age' => 20
    ],
    [
        'name' => 'Raju',
        'program' => 'BIT',
        'age' => 22
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 5a Q2</title>
 <style>
        table, th, td {
            border: 1px solid black;
            padding: 4px;
            text-align: center;
        }
    </style>

</head>
<body>
<h2> Student Information </h2>
<table>
 <thead>
            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?= $student['name'] ?></td>
                    <td><?= $student['program'] ?></td>
                    <td><?= $student['age'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
 </table>

</body>
</html>