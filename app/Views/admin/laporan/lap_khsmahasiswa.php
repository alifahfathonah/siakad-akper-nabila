<!DOCTYPE>
<html>

<head>
    <meta charset="UTF-8">
    <title>Kartu Hasil Studi</title>
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
                                    <img src="<?= base_url() ?>/img/header.jpg" width="650px" height="150px" alt="User Image">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">
                                <span span style="font-size: 12pt; font-weight: bold;">KARTU HASIL STUDI
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td style="text-align: left;">
                                <span span style="font-size: 12pt; font-weight: ;"> Nim : <?= $mahasiswa->nim ?>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">
                                <span span style="font-size: 12pt; font-weight: ;"> Nama : <?= $mahasiswa->nama ?>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">
                                <span span style="font-size: 12pt; font-weight: ;"> Semester : <?= $semester ?>
                                </span>
                            </td>
                        </tr>
                        <br>


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
                                <th>SKS</th>
                                <th>Nilai</th>
                                <th>Bobot</th>
                                <th>Mutu</th>
                                <th>Ket</th>
                            </tr>
                        <tbody>
                            <?php $no = 0;
                            $sks = 0;
                            $ip = 0;
                            $mutu = 0;
                            foreach ($krs as $row) : $no++;
                                $sks = $sks + $row['totalsks'];
                                $mutu =
                                    $db = db_connect();
                                $userid = user_id();
                                $kodematkul = $row['kodematkulkrs'];
                                $qry = $db->query("SELECT*FROM `tb_nilai` JOIN users ON `nimnilai`=username WHERE id='$userid' AND kodematkulnilai='$kodematkul';");
                                $dataniliai = $qry->getrow();
                                $nilai = '';
                                $bobot = 0;
                                $subIP = 0;
                                if ($dataniliai == null) {
                                    $nilai = '';
                                    $bobot = '';
                                    $subIP = '';
                                } else {
                                    $nilai = $dataniliai->nilaihuruf;
                                    $bobot = $dataniliai->bobot;
                                    $subIP = $bobot * $row['totalsks'];
                                    $ip += $subIP;
                                }
                            ?>
                                <tr align="center">
                                    <td> <?= $no; ?> </td>
                                    <td> <?= $row['kodematkulkrs']; ?> </td>
                                    <td> <?= $row['namamatkul']; ?> </td>
                                    <td> <?= $row['totalsks']; ?> </td>

                                    <td><?= $nilai ?></td>
                                    <td><?= $bobot ?></td>
                                    <td><?= $subIP ?></td>
                                    <td><?php
                                        if (strlen($nilai) == 0) {
                                            echo "Belum Lulus";
                                        } else {
                                            if ($nilai == 'A' || $nilai == 'B' || $nilai == 'C') {
                                                echo "Lulus";
                                            } else {
                                                echo "Tidak Lulus";
                                            }
                                        }
                                        ?></td>


                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="8">Total SKS : <?= $sks ?> </td>
                            </tr>
                            <tr>
                                <td colspan="8">Total Mutu : <?= $ip ?> </td>
                            </tr>
                            <tr>
                                <td colspan="8">Index Prestasi : <?= !$ip == 0 ? round($ip / $sks, 2) : '0' ?> </td>
                            </tr>
                        </tbody>
                        <!-- <tr >
                            <td colspan="7" style="text-align: left;">
                            <span span style="font-size: 12pt; font-weight: ;"> Total Sks :
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7" style="text-align: left;">
                            <span span style="font-size: 12pt; font-weight: ;"> IP :
                                </span>
                            </td>
                        </tr> -->
                        </thead>
                        <tbody>


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
                                    <p>Wadir I Bidang Akademik</p>
                                    <br>

                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <strong>Ns. Mariza Elvira, M. Kep</strong>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>