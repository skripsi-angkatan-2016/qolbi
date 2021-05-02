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
   
     
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Nomor</th>
                        <th>Tanggal</th>
                        <th>Copy</th>
                        <th>Berkas</th>
                    </tr>
                    <?php foreach ($ceklis as $key => $value) { ?>  
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$value['nama']?></td>
                        <td><?=$value['nomor']?></td>
                        <td><?=$value['tanggal']?></td>
                        <td><?=$value['copy']?></td>
                        <td><?=$value['berkas']?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>