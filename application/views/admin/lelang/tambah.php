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
            <h4 class="page-title">Tambah Lelang</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="<?=base_url('lelang/insert')?>">

                    <div class="form-group mb-3">
                        <label for="vendor_id">Vendor</label>
                        <select class="form-control" name="vendor_id" id="vendor_id">
                            <option value="">Pilih Vendor</option>
                            <?php foreach ($vendor as $key => $value) {  ?>
                                <option value="<?=$value['vendor_id']?>"><?=$value['nama']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="proyek_id">Proyek</label>
                        <select class="form-control" name="proyek_id" id="proyek_id">
                            <option value="">Pilih Proyek</option>
                            <?php foreach ($proyek as $key => $value) {  ?>
                                <option value="<?=$value['proyek_id']?>"><?=$value['nama_proyek']?></option>
                            <?php } ?>
                        </select>
                    </div>
                   
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>