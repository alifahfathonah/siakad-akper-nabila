    <?php $no = 0;
    $sks = 0;
    foreach ($krs as $row) : $no++;
        $sks = $sks + $row['totalsks'];
    ?>
        <tr align="center">
            <td> <?= $no; ?> </td>
            <td> <?= $row['kodematkulkrs']; ?> </td>
            <td> <?= $row['namamatkul']; ?> </td>
            <td> <?= $row['totalsks']; ?> </td>
            <td> <?= $row['hari']; ?>, <?= $row['jam']; ?>, <?= $row['ruangan']; ?> </td>
            <td> <?= $row['namadosen']; ?> </td>


        </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="3">Total SKS</td>
        <td class="text-center"><?= $sks ?></td>
    </tr>