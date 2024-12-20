<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 5a Q1</title>
 <style>
        table, th, td {
            border: 1px solid black;
            padding: 4px;
            text-align: center;
        }
    </style>
</head>
<body>
<h2>My Details</h2>
 <?php
 $name = " Nurul Jannah Binti Kamarul Zaman";
 $matricnumber = " AI220147";
 $course = " Bachelor of Computer Science (Software Engineering) with Honors";
 $yearOfStudy = " Third Year";
 $address = " No 13, Jalan Serai Permai 11, Taman Serai Permai"
 ?>
 <table>
    <tr>
        <td>Name</td>
        <td><?php echo "$name"; ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo "$matricnumber"; ?></td>
    </tr>
     <tr>
        <td>Course</td>
        <td><?php echo "$course"; ?></td>
    </tr>
    <tr>
        <td>Year Of Study</td>
        <td><?php echo "$yearOfStudy"; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo "$address"; ?></td>
    </tr>
 </table>

</body>
</html>