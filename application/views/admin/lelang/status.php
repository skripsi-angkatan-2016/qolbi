<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Upvex</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Basic Elements</li>
                </ol>
            </div>
            <h4 class="page-title">Basic Elements</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="<?=base_url('lelang/updateStatus')?>">
                    <div class="form-group mb-3">
                        <input type="hidden" name="id" value="<?=$lelang['id']?>">
                        <label for="status">Status Proyek</label>
                        <select class="form-control" name="status_pemeriksa" id="status_pemeriksa">
                            <option value="">Pilih Status</option>
                        
                                <option <?=$lelang['status_pemeriksa']=="1" ? 'selected' : '';?> value="1">Selesai Pengerjaan</option>
                                <option <?=$lelang['status_pemeriksa']=="0" ? 'selected' : '';?> value="0">Belum Selesai</option>
                                <option <?=$lelang['status_pemeriksa']=="2" ? 'selected' : '';?> value="2">Berkas Selesai</option>
                        </select>
                    </div>
                   
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>