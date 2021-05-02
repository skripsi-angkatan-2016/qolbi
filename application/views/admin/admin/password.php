<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <!-- <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Upvex</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Basic Elements</li>
                </ol> -->
            </div>
            <h4 class="page-title">Ubah Password</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <?php if ($this->session->flashdata('message')) { ?>
            <div class="alert alert-success" role="alert">
                <i class="mdi mdi-check-all mr-2"></i> <strong><?=$this->session->flashdata('message');?></strong> 
            </div>
        <?php } ?>
        <?php if (validation_errors()){?>
            <div class="alert alert-danger">
                <?php echo validation_errors(); ?>
            </div>
        <?php } ?>
        <div class="card">
            <div class="card-body">
                <form method="post" action="<?=base_url('admin/updatePassword')?>">
        
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="passwordbaru"value="" class="form-control" value="password">
                        <input type="hidden" id="admin_id" name="admin_id" value="<?=$admin['admin_id']?>"> 
                    </div>
                    <div class="form-group mb-3">
                        <label for="konfirmasi-password">Konfirmasi Password</label>
                        <input type="password" id="konfirmasi-password" class="form-control" name="passwordkonfirmasi" value="">
                    </div>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>