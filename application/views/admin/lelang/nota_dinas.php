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
            <h4 class="page-title">  <button  onclick="window.print();" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</button></h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="col-12 text-center">

                    <h2>Nota Dinas</h2>
                    <!-- <h6>Nomor : </h6> -->
                </div>
                <div class="col-12">
                    <table>
                        <tr>
                            <th>Kepada</th>
                            <th> :</th>
                            <th>Manager UP2B Sistem Makassar</th>
                        </tr>
                        <tr>
                            <th>Dari</th>
                            <th> :</th>
                            <th>Manager Bagian Keuangan & Adm.</th>
                        </tr>
                        <tr>
                            <th>Tanggal</th>
                            <th> :</th>
                            <th><?=date('d M Y')?></th>
                        </tr>
                        <tr>
                            <th>Lampiran</th>
                            <th> :</th>
                            <th>1 (Status) Berkas</th>
                        </tr>
                        <tr>
                            <th>Perihal</th>
                            <th> :</th>
                            <th>Proses Pembayaran</th>
                        </tr>
                    </table>

                    <div class="container" style="width:600px">
                        <p class="mt-3" style="text-align:justify">
                           Sehubungan dengan  Pengganti SPPD & Lembur Pekerjaan <?=$lelang['nama_proyek']?> bulan <?=date('M Y')?> PT.PLN (PERSERO) UP2B Sistem Makassar, Sebesar Rp. <?=number_format($lelang['nilai_kontrak'])?>. Maka Bersama ini terlampir disampaikan dokumen  pembayaran untuk kami proses sesuai ketentuan  yang berlaku.
                           
                        </p>

                        <p >
                            Demikian Kami Sampaikan atas perhatiannya diucapka terimah kasih 
                        </p>

                        <p class="text-right mt-5 ">
                            Zainuddin
                        </p>
                    </div>

                    <table width="100%" border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>Lembaran Disposis</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                        </tr>
                        <tr>
                            <td>
                                <!-- Nomor Surat : <br> -->
                                Dari : Manager UP2B Sistem Makassar
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                Disposisi Kepada : <br>
                                <strong>MANAGER BAGIAN KEU & ADM</strong>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>