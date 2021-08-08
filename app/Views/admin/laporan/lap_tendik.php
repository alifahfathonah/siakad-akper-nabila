<!DOCTYPE>
<html>

<head>
    <meta charset="UTF-8">
    <title>Laporan Data Tenaga Kependidikan</title>
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
                            <span span style="font-size: 12pt; font-weight: bold;">Laporan Data Tenaga Kependidikan
                                </span>
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td>
                            <span span style="font-size: 12pt; ">Periode :   <?php echo date('Y'); ?>
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
                                <th>NITK</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>jabatan</th>
                                <th>Nohp</th>
                                <th>Status </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($laptendik as $d) {
                                $no++;
                            ?>
                                <tr>
                                    <td align="center" width="50px" class="text-center"><?php echo $no . '.'; ?></td>
                                    <td align="center"><?php echo $d->nitk ?></td>
                                    <td align="center"><?php echo $d->namatendik ?></td>
                                    <td align="center"><?php echo $d->niptendik ?></td>
                                    <td align="center"><?php echo $d->jabatantendik ?></td>
                                    <td align="center"><?php echo $d->nohptendik ?></td>
                                    <td align="center"><?php echo $d->statustendik ?></td>
                                </tr>
                            <?php } ?>
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