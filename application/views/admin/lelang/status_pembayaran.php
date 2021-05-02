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
                <form method="post" action="<?=base_url('lelang/updateStatusPembayaran')?>">
                    <div class="form-group mb-3">
                        <input type="hidden" name="id" value="<?=$lelang['id']?>">
                        <label for="status">Status Pembayaran</label>
                        <select class="form-control" name="status_pembayaran" id="status_pembayaran">
                            <option value="">Pilih Status</option>
                        
                                <option value="1">Selesai Pembayaran</option>
                                <option value="0">Belum Selesai</option>
                        </select>
                    </div>
                   
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>