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
            <h4 class="page-title">Halaman Vendor</h4>
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
                <a href="<?=base_url('vendor/tambah')?>" class="btn btn-primary mb-3">Tambah Admin</a>
                <table id="basic-datatable" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>NPWP</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($vendor as $key => $item) {?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$item['nama']?></td>
                            <td><?=$item['npwp']?></td>
                            <td><?=$item['alamat']?></td>
                            <td><?=$item['email']?></td>
                            <td>
                                <a class="btn btn-warning" href="<?=base_url('vendor/edit/'.$item['vendor_id'])?>">Edit
                                </a>
                                <button type="button" class="btn btn-xs  btn-danger hapus-vendor" data="<?=$item['vendor_id']?>"><i class="fa fa-trash"></i> Hapus</button>

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