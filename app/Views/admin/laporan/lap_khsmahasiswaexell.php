
<?php
    header("Content-type: application/vnc-ms-excel");
    header("Content-Disposition: attacment; filename=Lap_khsmahasiswa_$mahasiswa->nama.xls");
    header("Pragma: no-cache");
    header("Expire: 0");

?>
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
                                <td colspan="8">Index Prestasi : <?= !$ip==0? round($ip / $sks, 2):'0' ?> </td>
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

