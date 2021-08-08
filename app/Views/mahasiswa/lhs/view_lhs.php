<!DOCTYPE>

<?php

function matakuliah($semester)
{
    $db = db_connect();

    $userid = user_id();
    return $qry = $db->query("SELECT*FROM tb_krs
    JOIN tb_matakuliah ON kodematkul=kodematkulkrs
    JOIN tb_dosen ON nidn=nidnkrs
    WHERE smt ='$semester'")->getResultArray();
}

?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Transkrip Nilai Mahasiswa</title>
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
                                <span span style="font-size: 12pt; font-weight: bold;">TRANSKRIP NILAI
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
                                <span span style="font-size: 12pt; font-weight: ;"> Pembimbing Akademik : <?= $mahasiswa->pemakademik ?>
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
                    <?php
                    $data = array('Semester 1', 'Semester 2', 'Semester 3', 'Semester 4', 'Semester 5', 'Semester 6');
                    $totAllSKS=0;
                    $totAllMutu=0;
                    $totAllIP=0;

                    foreach ($data as $smt) :
                    ?>
                        <table style="border-collapse: collapse; width: 90%;" border="1">
                            <thead>
                                <tr>
                                    <td style="text-align: left;">
                                        <span span style="font-size: 12pt; font-weight: ;"><?= $smt?>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Matakuliah</th>
                                    <th>Matakuliah </th>
                                    <th>SKS</th>
                                    <th>Nilai</th>
                                    <th>Bobot</th>
                                    <th>Mutu</th>
                                </tr>
                                <?php $no = 0;
                                $sks = 0;
                                $ip = 0;
                                $mutu=0;

                                foreach (matakuliah($smt) as $row) : $no++;
                                    $sks = $sks + $row['totalsks'];
                                    $db = db_connect();
                                    $userid = user_id();
                                    $kodematkul = $row['kodematkulkrs'];
                                    $qry = $db->query("SELECT*FROM `tb_nilai` JOIN users ON `nimnilai`=username WHERE id='28' AND kodematkulnilai='$kodematkul';");
                                    $dataniliai = $qry->getrow();
                                    $nilai = '';
                                    $bobot = 0;
                                    $subIP=0;
                                    if ($dataniliai == null) {
                                        $nilai = '';
                                        $bobot = 0;
                                    } else {
                                        $nilai = $dataniliai->nilaihuruf;
                                        $bobot = $dataniliai->bobot;
                                        $subIP = $bobot * $row['totalsks'];
                                        $ip += $subIP;
                                        $totAllMutu+=$ip;
                                    }
                                ?>
                                    <tr align="center">
                                        <td> <?= $no; ?> </td>
                                        <td> <?= $row['kodematkulkrs']; ?> </td>
                                        <td> <?= $row['namamatkul']; ?> </td>
                                        <td> <?= $row['totalsks']; ?> </td>

                                        <td><?= $nilai ?></td>
                                        <td><?= $bobot ?></td>
                                        <td><?= $subIP?></td>


                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="7" style="text-align: left;">
                                        <span span style="font-size: 12pt; font-weight: ;"> Total Sks :  <?= $sks ?> 
                                        <?php $totAllSKS+=$sks; ?>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="7" style="text-align: left;">
                                        <span span style="font-size: 12pt; font-weight: ;"> Total Mutu : <?= $ip?>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="7" style="text-align: left;">
                                        <span span style="font-size: 12pt; font-weight: ;"> IP :  <?= $ipsemester=round($ip / $sks,2)?>
                                    <?php
                                    $totAllIP+=$ipsemester;
                                    ?>    
                                    </span>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>


                        <?php
                    endforeach;

                        ?>



                        </table>
                        <table style="border-collapse: collapse; width: 90%;" border="1">
                            <thead>
                                <tr>
                                    <td style="text-align: left;">
                                        <span span style="font-size: 12pt; font-weight:Bold ;"> Total Seluruh SKS : <?= $totAllSKS?>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;">
                                        <span span style="font-size: 12pt; font-weight:Bold ;"> Total Seluruh Mutu : <?= $totAllMutu?>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;">
                                        <span span style="font-size: 12pt; font-weight:Bold ;"> Index Prestasi Komulatif : <?= round($totAllIP / 6,2)?>
                                        </span>
                                    </td>
                                </tr>

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