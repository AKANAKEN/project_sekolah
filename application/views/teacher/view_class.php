<!-- application/views/view_guru.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Guru</title>
</head>
<body>
    <h2>Data Guru</h2>
    <table border="1">
        <tr>
            <th>NIP</th>
            <th>Nama Guru</th>
            <th>Alamat Guru</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
        </tr>
        <?php foreach ($guru as $row) { ?>
            <tr>
                <td><?php echo $row->NIP; ?></td>
                <td><?php echo $row->nama_guru; ?></td>
                <td><?php echo $row->Alamat_guru; ?></td>
                <td><?php echo $row->JK; ?></td>
                <td><?php echo $row->Tanggal_Lahir_guru; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
