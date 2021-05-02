
                </div> <!-- container -->
            </div> <!-- content -->
              <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2021 &copy; 
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->
        </div>
    </div>
    <!-- END wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

        <!-- Vendor js -->
        <script src="<?=base_url('assets/js/vendor.min.js')?>"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <!-- third party js -->
        <script src="<?=base_url('assets/libs/datatables/jquery.dataTables.min.js')?>"></script>
        <script src="<?=base_url('assets/libs/datatables/dataTables.bootstrap4.js')?>"></script>
        <script src="<?=base_url('assets/libs/datatables/dataTables.responsive.min.js')?>"></script>
        <script src="<?=base_url('assets/libs/datatables/responsive.bootstrap4.min.js')?>"></script>
        <script src="<?=base_url('assets/libs/datatables/dataTables.buttons.min.js')?>"></script>
        <script src="<?=base_url('assets/libs/datatables/buttons.bootstrap4.min.js')?>"></script>
        <script src="<?=base_url('assets/libs/datatables/buttons.html5.min.js')?>"></script>
        <script src="<?=base_url('assets/libs/datatables/buttons.flash.min.js')?>"></script>
        <script src="<?=base_url('assets/libs/datatables/buttons.print.min.js')?>"></script>
        <script src="<?=base_url('assets/libs/datatables/dataTables.keyTable.min.js')?>"></script>
        <script src="<?=base_url('assets/libs/datatables/dataTables.select.min.js')?>"></script>
        <script src="<?=base_url('assets/libs/pdfmake/pdfmake.min.js')?>"></script>
        <script src="<?=base_url('assets/libs/pdfmake/vfs_fonts.js')?>"></script>
        <!-- third party js ends -->
        <script src="<?=base_url('assets/js/pages/datatables.init.js')?>"></script>

        <!-- live search selec option -->
        <script src="<?=base_url('assets/libs/bootstrap-select/bootstrap-select.min.js')?>"></script>

        <!-- Init js-->
        <script src="<?=base_url('assets/js/pages/form-advanced.init.js')?>"></script>

        <!-- Magnific Popup-->
        <script src="<?=base_url('assets/libs/magnific-popup/jquery.magnific-popup.min.js')?>"></script>


        <!-- Third Party js-->
        <script src="<?=base_url('assets/libs/peity/jquery.peity.min.js')?>"></script>
        <script src="<?=base_url('assets/libs/apexcharts/apexcharts.min.js')?>"></script>
        <script src="<?=base_url('assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js')?>"></script>
        <script src="<?=base_url('assets/libs/jquery-vectormap/jquery-jvectormap-us-merc-en.js')?>"></script>

        <!-- Plugins js-->
        <script src="<?=base_url('assets/libs/moment/moment.min.js')?>"></script>
        <script src="<?=base_url('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js')?>"></script>
        <script src="<?=base_url('assets/libs/clockpicker/bootstrap-clockpicker.min.js')?>"></script>
        <script src="<?=base_url('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')?>"></script>
        <script src="<?=base_url('assets/libs/daterangepicker/daterangepicker.js')?>"></script>
        
  
        <!-- Magnific Popup-->
        <script src="<?=base_url('assets/libs/magnific-popup/jquery.magnific-popup.min.js')?>"></script>

     
        <!-- Init js-->
        <script src="<?=base_url('assets/js/pages/form-pickers.init.js')?>"></script>

        <!-- Dashboard init -->
        <script src="<?=base_url('assets/js/pages/dashboard-1.init.js')?>"></script>
        
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
     
        <!-- App js -->
        <script src="<?=base_url('assets/js/app.min.js')?>"></script>
        <?=($this->session->flashdata('hapus')) ? '<script>Swal.fire("Suskses", "berhasil dihapus", "success")</script>' : ''?>
        <?php if ($this->session->flashdata('error')) { ?>
            <script>
                Swal.fire('Gagal', '<?=$this->session->flashdata("error");?>', 'error');
            </script>
        <?php }	?>
        <script>
            //hapus admin
            $(function(){
                $('#basic-datatable').on('click','.hapus', function(){
                    var id = $(this).attr('data');
                    var k = confirm('Anda yakin ingin menghapusnya ?');
                    if (k) {
                        $.ajax({
                            url: '<?=base_url("admin/hapus/");?>'+id,
                            success: function(){
                                Swal.fire('Berhasil', 'admin berhasil dihapus', 'success');
                                window.location.assign('<?=base_url("admin")?>');
                            }
                        })
                        return false;
                    }
                })
                
                $('#basic-datatable').on('click','.hapus-proyek', function(){
                    var id = $(this).attr('data');
                    var k = confirm('Anda yakin ingin menghapusnya ?');
                    if (k) {
                        $.ajax({
                            url: '<?=base_url("index.php/proyek/hapus/");?>'+id,
                            success: function(){
                                Swal.fire('Berhasil', 'proyek berhasil dihapus', 'success');
                                window.location.assign('<?=base_url("index.php/proyek")?>');
                            }
                        })
                        return false;
                    }
                })
                
                $('#basic-datatable').on('click','.hapus-lelang', function(){
                    var id = $(this).attr('data');
                    var k = confirm('Anda yakin ingin menghapusnya ?');
                    if (k) {
                        $.ajax({
                            url: '<?=base_url("index.php/lelang/hapus/");?>'+id,
                            success: function(){
                                Swal.fire('Berhasil', 'lelang berhasil dihapus', 'success');
                                window.location.assign('<?=base_url("index.php/lelang")?>');
                            }
                        })
                        return false;
                    }
                })
                $('#basic-datatable').on('click','.hapus-vendor', function(){
                    var id = $(this).attr('data');
                    var k = confirm('Anda yakin ingin menghapusnya ?');
                    if (k) {
                        $.ajax({
                            url: '<?=base_url("index.php/vendor/hapus/");?>'+id,
                            success: function(){
                                Swal.fire('Berhasil', 'vendor berhasil dihapus', 'success');
                                window.location.assign('<?=base_url("index.php/vendor")?>');
                            }
                        })
                        return false;
                    }
                })

               
                $(document).ready(function(){
                    $('#addRow').on('click',function(){
                        $('#inputFormRow').append(`
                        <div class="form-group ">
                            <div class="row align-items-center">
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
                                <div class="col-1">
                                    <button type="button" id="remove_tag" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </div>
                                </div>
                            </div>
                        `)
                    });

                    $(document).on('click','#remove_tag',function(e){
                        $(this).parent('div').parent('div').parent('div').remove()
                    })
                })
 
            })
        </script>
     
    </body>
</html>