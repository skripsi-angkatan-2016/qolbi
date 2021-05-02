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
                <form method="post" action="<?=base_url('vendor/update')?>">
                    <div class="form-group mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" value="<?=$vendor['nama']?>" name="nama" id="nama" class="form-control">
                        <input type="hidden" value="<?=$vendor['vendor_id']?>" name="vendor_id" id="id" class="form-control">
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
                        <input type="email" value="<?=$vendor['email']?>" id="email" name="email" class="form-control" placeholder="Masukkan Email">
                    </div>
                  
                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>