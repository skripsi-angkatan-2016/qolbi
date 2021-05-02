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
            <h4 class="page-title">Tambah Proyek</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="<?=base_url('proyek/insert')?>">
                    <div class="form-group mb-3">
                        <label for="nama_proyek">Nama Proyek</label>
                        <input type="text" value="" name="nama_proyek" id="nama_proyek" class="form-control">
                    </div>
                    <!-- <div class="form-group mb-3">
                        <label for="vendor_id">Vendor</label>
                        <select class="form-control" name="vendor_id" id="vendor_id">
                            <option value="">Pilih Vendor</option>
                            <?php foreach ($vendor as $key => $value) {  ?>
                                <option value="<?=$value['vendor_id']?>"><?=$value['nama']?></option>
                            <?php } ?>
                        </select>
                    </div> -->
                    <div class="form-group mb-3">
                        <label for="no_kontrak">No Kontrak</label>
                        <input type="text" value="" name="no_kontrak" id="no_Kontrak" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="adendum1">Adendum 1</label>
                        <input type="text" value="" name="adendum1" id="adendum1" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="adendum2">Adendum 2</label>
                        <input type="text" value="" name="adendum2" id="adendum2" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="adendum3">Adendum 3</label>
                        <input type="text" value="" name="adendum3" id="adendum3" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="adendum4">Adendum 4</label>
                        <input type="text" value="" name="adendum4" id="adendum4" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="nilai_kontrak">Nilai Kontrak</label>
                        <input type="text" value="" name="nilai_kontrak" id="nilai_kontrak" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="nilai_tagihan">Nilai Tagihan</label>
                        <input type="text" value="" name="nilai_tagihan" id="nilai_tagihan" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="sumber_dana">Sumber Dana</label>
                        <input type="text" value="" name="sumber_dana" id="sumber_dana" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" value="" name="lokasi" id="lokasi" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="no_invoice">No Invoice</label>
                        <input type="text" value="" name="no_invoice" id="no_invoice" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="no_posting">No Posting</label>
                        <input type="text" value="" name="no_posting" id="no_posting" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Kategori">Kategori</label>
                        <input type="text" value="" name="Kategori" id="Kategori" class="form-control">
                    </div>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>