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
                <form method="post" action="<?=base_url('vendor/insert')?>">
                    <div class="form-group mb-3">
                        <label for="nama">Nama Vendor</label>
                        <input type="text" placeholder="Masukkan Nama" value="" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" placeholder="Masukkan NPWP" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="npwp">Nomor NPWP</label>
                        <input type="text" placeholder="Masukkan Nomor NPWP" value="" name="npwp" id="npwp" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan Email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password"value="" class="form-control" placeholder="Masukkan Password" value="password">
                    </div>
                    <div class="form-group mb-3">
                        <label for="konfirmasi-password">Konfirmasi Password</label>
                        <input type="password" id="konfirmasi-password" class="form-control" name="konfirmasi-password" placeholder="Masukkan Konfirmasi Password" value="">
                    </div>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>