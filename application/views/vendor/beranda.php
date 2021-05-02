<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="my-3">List Proyek</h3>
        </div>
    </div>

    <div class="row align-items-center justify-content-center">
        <div class="col-11 ">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th >#</th>
                        <th >Proyek</th>
                        <th >No Kontrak</th>
                        <!-- <th >Adendum 1</th>
                        <th >Adendum 2</th> -->
                        <!-- <th >Adendum 3</th> -->
                        <!-- <th >Adendum 4</th> -->
                        <!-- <th >Nilai Kontrak</th> -->
                        <!-- <th >Nilai Tagihan</th> -->
                        <!-- <th >Sumber Dana</th> -->
                        <!-- <th >Lokasi</th> -->
                        <!-- <th >No Invoice</th>
                        <th >No Posting</th> -->
                        <th>Status</th>
                        <th>Berkas</th>
                        <th>Status Pemeriksaan</th>
                        <th>Status Pembayaran</th>
                        <th>Catatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lelang as $key => $value) {?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><small><?=$value['nama_proyek']?></small></td>
                        <td><small><?=$value['no_kontrak']?></small></td>
                        <!-- <td><small><?=$value['adendum1']?></small></td>
                        <td><small><?=$value['adendum2']?></small></td> -->
                        <!-- <td><small><?=$value['adendum3']?></small></td> -->
                        <!-- <td><small><?=$value['adendum4']?></small></td> -->
                        <!-- <td><small><?=$value['nilai_kontrak']?></small></td> -->
                        <!-- <td><small><?=$value['nilai_tagihan']?></small></td> -->
                        <!-- <td><small><?=$value['sumber_dana']?></small></td> -->
                        <!-- <td><small><?=$value['lokasi']?></small></td> -->
                        <!-- <td><?=$value['no_invoice']?></td>
                        <td><?=$value['no_posting']?></td> -->
                        <td>
                            <small class="text-success">
                                <?= $value['status']==null ? 'proyek baru' : $value['status'] ?>
                            </small>
                        </td>
                        <td>
                            <?php if ($value['berkas']) { ?>
                                <a target="_blank" class="text-info" href="<?=base_url('assets/berkas/'.$value['berkas'])?>"><?=$value['berkas']?></a>
                            
                            <?php }else {?>
                                belum ada berkas
                            <?php } ?>
                        </td>
                        <td>
                            <?php if($value['status_pemeriksa']=="1")
                                    { echo "selesai pengerjaan";}
                                else if($value['status_pemeriksa']=="2") 
                                    {echo "Berkas Lengkap";} 
                                else{ echo "Belum Selesai";}
                            ?>
                        </td>
                        <td>
                            <?php if($value['status_pembayaran']=="1")
                                    { echo "selesai pembayaran";}
                                else{ echo "Belum Selesai";}
                            ?>
                        </td>
                        <td>
                            <?php if ($value['catatan']) { ?>
                                <?=$value['catatan']?>
                            <?php }else {?>
                                 -
                            <?php } ?>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-primary  " href="<?=base_url('vendorberanda/status/'.$value['id'])?>">Status</a>

                            <?php if($value['status_pemeriksa']=="2" ||$value['status_pemeriksa']=="1"){?>
                            <a class="btn  btn-sm btn-warning " href="<?=base_url('vendorberanda/berkas/'.$value['id'])?>">Upload berkas
                                </a>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

          
        </div>
    </div>
</div>