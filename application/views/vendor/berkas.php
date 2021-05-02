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
            <div class="row  justify-content-center">
                
                <div class="col-8">
                <form enctype="multipart/form-data" method="post" action="<?=base_url('index.php/vendorberanda/uploadBerkas')?>" class="form-horizontal">
                    <div class="form-group ">
                        <label class="col-sm-3 col-form-label" for="nama">Upload Berkas</label>
                        <input type="hidden" name="id" value="<?=$lelang['id']?>" class="form-control" id="id" >
                        <input type="file" name="berkas" value="" class="form-control" id="id" >
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-3 col-form-label" for="jenis_surat">Jenis Surat</label>
                        <select class="form-control" name="jenis_surat">
                            <option value="SPB">Surat Permintaan Bayar</option>
                            <option value="KW">Kwitansi</option>
                            <option value="FP">Faktur Fajar</option>
                            <option value="BAPP">Berita Acara Pemeriksaan Pekerjaan </option>
                            <option value="BASTP">Berita Acara Serah Terima Pekerjaan(BASTP) </option>
                        </select>
                        
                    </div>
                    <button class="btn btn-primary mt-2">Simpan</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>