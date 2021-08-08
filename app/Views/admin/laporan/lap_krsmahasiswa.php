<!DOCTYPE>
<html>

<head>
    <meta charset="UTF-8">
    <title>Kartu Rencana Studi</title>
</head>

<body onload="window.print();">
    <div align="center">
        <table style="border-collapse: collapse; width: 96%" border="1">
            <tr>
                <td align="center">
                    <table style="border-collapse: collapse; width: 90%;" border="0">
                        <tr>
                            <td style="text-align: center;">
                                <div class="image" align="center">
                                        <img src="<?= base_url() ?>/img/header.jpg" width="650px" height="150px"  
                                                alt="User Image">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">
                            <span span style="font-size: 12pt; font-weight: bold;">KARTU RENCANA STUDI
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td style="text-align: center;">
                            <span span style="font-size: 12pt; font-weight: bold;"> <?php echo $semester; ?>
                                </span>
                            </td>
                        </tr>

                        <br>
                        <tr>
                            <td>
                            <span span style="font-size: 12pt; ">Tanggal Cetak :   <?php echo date('d-M-Y'); ?>
                                </span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td align="center">
                    <br>
                    <table style="border-collapse: collapse; width: 90%;" border="1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Matakuliah</th>
                                <th>Matakuliah </th>
                                <th>Total SKS</th>
                                <th>Jadwal</th>
                                <th>Dosen Pengajar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            $sks = 0;
                            foreach ($krs as $d) {
                                $no++;
                                $sks = $sks + $d->totalsks;
                            ?>
                                <tr>
                                    <td align="center" width="50px" class="text-center"><?php echo $no . '.'; ?></td>
                                    <td align="center"><?php echo $d->kodematkulkrs ?></td>
                                    <td align="center"><?php echo $d->namamatkul ?></td>
                                    <td align="center"><?php echo $d->totalsks ?></td>
                                    <td align="center"><?php echo $d->hari ?>, <?php echo $d->jam ?> </td>
                                    <td align="center"><?php echo $d->namadosen ?></td>
                           
                                </tr>
                               

                            <?php } ?>
                            <br>
                            <tr></tr>
                            <tr>
                                <td colspan="2">Total SKS : <?= $sks ?> </td>
                                
                            </tr>
                        </tbody>
                    </table>
               
                    <br>
                </td>
            </tr>
            <tr>
                <td>
                    <div align="center">
                        <table style="border-collapse: collapse; width: 90%;" border="0">
                            <tr>
                                <br>
                                <br>
                                <td width="74%"></td>
                                <td width="26%">Padang Panjang,
                                    <?php echo date('d-m-Y'); ?>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <strong>Direktur</strong>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>