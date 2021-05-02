<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="my-3">Halaman Status Pengerjaan</h3>
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
                   
                </div>
                <div class="col-8">
                <form method="post" action="<?=base_url('vendorberanda/updateStatus')?>" class="form-horizontal">
                    <div class="form-group ">
                        <label class="col-sm-2 col-form-label" for="nama">Status</label>
                        <select name="status" class="form-control" id="status">
                            <option value="">--Pilih--</option>
                            <option <?=$lelang['status']=="sedang pengerjaan" ? 'selected' : '';?> value="sedang pengerjaan">Sedang Pengerjakan</option>
                            <option <?=$lelang['status']=="selesai" ? 'selected' : '';?> value="selesai">Selesai</option>
                        </select>
                        <input type="hidden" name="id" value="<?=$lelang['id']?>" class="form-control" id="id" >
                    </div>
                    <button class="btn btn-primary mt-2">Simpan</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>