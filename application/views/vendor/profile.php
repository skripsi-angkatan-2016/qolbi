<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="my-3">Halaman Profile</h3>
        </div>
    </div>

    <div class="row my-5 justify-content-center">
        <div class="col-10">
        <?php if ($this->session->flashdata('pesan')) { ?>
        <div class="alert alert-success" role="alert">
            <?=$this->session->flashdata('pesan');?>
        </div>
        <?php } ?>
            <div class="row">
                <div class="col-4">
                    <img width="60%" src="https://ui-avatars.com/api/?name=<?=$this->session->userdata('nama');?>" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-8">
                <form method="post" action="<?=base_url('vendorberanda/updateProfile')?>" class="form-horizontal">
                    <div class="form-group ">
                        <label class="col-sm-2 col-form-label" for="nama">Nama Vendor</label>
                        <input type="text" value="<?=$vendor['nama']?>" name="nama" class="form-control" id="nama" placeholder="Masukkan nama vendor">
                        <input type="hidden" name="vendor_id" value="<?=$vendor['vendor_id']?>" class="form-control" id="vendor_id" >
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-2 col-form-label" for="npwp">Nomor NPWP</label>
                        <input type="text" name="npwp" value="<?=$vendor['npwp']?>" class="form-control" id="npwp" placeholder="Masukkan npwp vendor">
                    </div>

                    <div class="form-group ">
                        <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat" rows="3"><?=$vendor['alamat']?></textarea>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-2 col-form-label" for="email">Email/Username</label>
                        <input type="email" name="email" class="form-control" value="<?=$vendor['email']?>" id="email" placeholder="Masukkan email">
                    </div>
                    <button class="btn btn-primary mt-2">Simpan</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>