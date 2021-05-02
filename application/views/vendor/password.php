<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="my-3">Halaman Ubah Password</h3>
        </div>
    </div>

    <div class="row my-5 justify-content-center">
        <div class="col-7">
        <?php if (validation_errors()){?>
            <div class="alert alert-danger">
                <?php echo validation_errors(); ?>
            </div>
        <?php } ?>
                <?php if ($this->session->flashdata('pesan')) { ?>
                <div class="alert alert-success" role="alert">
                    <?=$this->session->flashdata('pesan');?>
                </div>
                <?php } ?>
         
                <form method="post" action="<?=base_url('vendorberanda/updatePassword')?>" class="form-horizontal">
                    <div class="form-group ">
                        <label class="col-sm-3 col-form-label" for="nama">Password Baru</label>
                        <input type="password" value="" name="passwordbaru" class="form-control" id="passwordbaru" placeholder="Masukkan Password Baru">
                        <input type="hidden" name="vendor_id" value="<?=$vendor['vendor_id']?>" class="form-control" id="vendor_id" >
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-3 col-form-label" for="passwordkonfirmasi">Konfirmasi Password</label>
                        <input type="password" name="passwordkonfirmasi" value="" class="form-control" id="passwordkonfirmasi" placeholder="Masukkan Password Konfirmasi">
                    </div>
                    <button class="btn btn-primary mt-3">Simpan</button>
                </form>
               
        </div>
    </div>
</div>