     <?php
        header("Content-type: application/vnc-ms-excel");
        header("Content-Disposition: attacment; filename=Lap_mahasiswaperiode_$thnmasuk.xls");
        header("Pragma: no-cache");
        header("Expire: 0");

        ?>

     <table style="border-collapse: collapse; width: 90%;" border="1">
         <thead>
             <tr>
                 <th>No</th>
                 <th>NIM</th>
                 <th>Nama </th>
                 <th>Tempat Lahir</th>
                 <th>Tanggal Lahir</th>
                 <th>Prodi</th>
                 <th>Tahun Masuk </th>
                 <th>Nohp </th>
                 <th>Status </th>
             </tr>
         </thead>
         <tbody>
             <?php
                $no = 0;
                foreach ($lapmahasiswa as $d) {
                    $no++;
                ?>
                 <tr>
                     <td align="center" width="50px" class="text-center"><?php echo $no . '.'; ?></td>
                     <td align="center"><?php echo $d->nim ?></td>
                     <td align="center"><?php echo $d->nama ?></td>
                     <td align="center"><?php echo $d->tmplahir ?></td>
                     <td align="center"><?php echo $d->tgllahir ?></td>
                     <td align="center"><?php echo $d->prodi ?></td>
                     <td align="center"><?php echo $d->thnmasuk ?></td>
                     <td align="center"><?php echo $d->nohp ?></td>
                     <td align="center"><?php echo $d->status ?></td>
                 </tr>
             <?php } ?>
         </tbody>
     </table>