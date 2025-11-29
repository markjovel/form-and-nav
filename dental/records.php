<?php
$conn = new mysqli("localhost", "root", "", "dental");
$result = $conn->query("SELECT * FROM dental_clinic ORDER BY id DESC");
?>

<h2>Appointment Records</h2>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Date</th>
    <th>Time</th>
</tr>

<?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['phone'] ?></td>
    <td><?= $row['date'] ?></td>
    <td><?= $row['time'] ?></td>
</tr>
<?php endwhile; ?>
</table>
