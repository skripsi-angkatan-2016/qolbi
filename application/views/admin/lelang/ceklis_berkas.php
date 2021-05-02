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
            <h4 class="page-title">Ceklis Berkas</h4>
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
        <a href="<?=base_url('lelang/LihatCeklisBerkas/'.$lelang['id'])?>" class="btn btn-primary mb-2" >Lihat Kelengkapan Berkas</a>
        <div class="card">
            <div class="card-body">
                <form method="post" action="<?=base_url('lelang/insertCeklisBerkas')?>">
                    <div class="form-group mb-3">
                        <input type="hidden" name="id" value="<?=$lelang['id']?>">
                        <input type="hidden" name="vendor_id" value="<?=$lelang['vendor_id']?>">
                        <input type="hidden" name="proyek_id" value="<?=$lelang['proyek_id']?>">
                        <div id="inputFormRow">
                            <div class="row form-group align-items-center">
                                <div class="col-2">
                                    <label for="status">Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama" name="nama[]" value="">
                                </div>
                                <div class="col-2">
                                    <label for="status">Nomor</label>
                                    <input type="text" class="form-control" placeholder="Nomor" name="nomor[]" value="">
                                </div>
                                <div class="col-3">
                                    <label for="status">Tanggal</label>
                                    <input type="date" class="form-control" placeholder="Tanggal" name="date[]" value="">
                                </div>
                                <div class="col-2">
                                    <label for="status">Asli</label>
                                    <select class="form-control" name="copy[]" id="copy">
                                        <option value="asli">Asli</option>
                                        <option value="copy">Copy</option>
                                    </select>
                                </div>
                                <div class="col-2">
                                    <label for="status">Copy</label>
                                    <select class="form-control" name="berkas[]" id="berkas">
                                        <option value="ada">Ada</option>
                                        <option value="tidak ada">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="col-1 ">
                                    <label for="status"></label>
                                    <button id="addRow" type="button"  class="btn btn-primary "><i class="fa fa-plus"></i> </button>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                   
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>