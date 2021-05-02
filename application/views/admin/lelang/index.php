<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <!-- <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Upvex</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                    <li class="breadcrumb-item active">Datatables</li>
                </ol> -->
            </div>
            <h4 class="page-title">Halaman Lelang</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 

<div class="row">
    <div class="col-12">
        <?php if ($this->session->flashdata('message')) { ?>
            <div class="alert alert-success" role="alert">
                <i class="mdi mdi-check-all mr-2"></i> <strong><?=$this->session->flashdata('message');?></strong> 
            </div>
        <?php } ?>
        <div class="card">
            <div class="card-body">
                <a href="<?=base_url('index.php/lelang/tambah')?>" class="btn btn-primary mb-3">Tambah Lelang</a>
                <table id="basic-datatable" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Proyek</th>
                            <th>Jenis Surat </th>
                            <th>Nama Vendor</th>
                            <th>Status Pengerjaan</th>
                                <?php if($this->session->userdata('role')=="pemeriksa" || "pembayaran"){?>
                                    <th>Berkas</th>
                                <?php } ?>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lelang as $key => $item) {?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$item['nama_proyek']?></td>
                            <th><?=$item['jenis_surat'] ?? 'belum ada surat'?></th>
                            <td><?=$item['nama']?></td>
                            <td>
                                <?=$item['status']==null ? '<span class="text-danger">menunggu konfirmasi</span>' : '<span class="text-success">'. $item['status'].'</span>' ?>
                            </td>
                            <td>
                                <?php if($item['status_pemeriksa']=="1")
                                    { echo "selesai pengerjaan";}
                                else if($item['status_pemeriksa']=="2") 
                                    {echo "Berkas Lengkap";} 
                                else{ echo "Belum Selesai";}
                                ?>
                            </td>
                            <?php if($this->session->userdata('role')=="pemeriksa" || "pembayaran"){?>
                                <td>
                                    <a target="_blank" class="text-info" href="<?=base_url('assets/berkas/'.$item['berkas'])?>"><?=$item['berkas']?></a>
                                </td>
                            <?php } ?>

                            <td>
                            <?php if($this->session->userdata('role')=="pemeriksa"){?>
                                <!-- <a class="btn btn-warning" href="<?=base_url('lelang/edit/'.$item['id'])?>">Edit</a> -->

                                <a class="btn btn-primary" href="<?=base_url('index.php/lelang/ceklis_berkas/'.$item['id'])?>">Ceklis Berkas</a>
                                <a class="btn btn-primary" href="<?=base_url('lelang/status/'.$item['id'])?>">Status</a>
                            <?php } ?>
                            
                            <?php if($this->session->userdata('role')=="pembayaran"){?>
                                <a class="btn btn-primary" href="<?=base_url('index.php/lelang/ceklis_berkas/'.$item['id'])?>">Ceklis Berkas</a>
                                <a class="btn btn-primary" href="<?=base_url('lelang/statusPembayaran/'.$item['id'])?>">Status Pembayaran</a>
                                <a class="btn btn-primary" href="<?=base_url('lelang/catatan/'.$item['id'])?>">Catatan</a>
                            <?php } ?>
                            <?php if($this->session->userdata('role')=="pembayaran"){?>
                                <?php if($item['status_pemeriksa']=="2"){?>
                                    <a class="btn btn-primary" href="<?=base_url('lelang/cetakNotaDinas/'.$item['id'])?>">Cetak Nota Dinas</a>
                                <?php } ?>
                            <?php } ?>
                                <button type="button" class="btn btn-xs  btn-danger hapus-lelang" data="<?=$item['id']?>"><i class="fa fa-trash"></i> Hapus</button>
                                <a href="lelang/edit/<?=$item['id']?>" class="btn btn-xs  btn-info "><i class="fa fa-pencil"></i> Edit</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->