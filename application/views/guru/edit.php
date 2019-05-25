<?php  
    $this->load->view('menu/header');
    $this->load->view('menu/navbar');
?>

	<!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Edit Guru</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <?php echo form_open_multipart('C_guru/edit'); ?>
                            <?php echo form_hidden('kode',$guru[0]->kode); ?>
                                <div class="card-body">
                                    <h4 class="card-title">Form guru</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Kode</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="kode" placeholder="kode Here" value="<?php echo $guru[0]->kode; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nama" placeholder="Nama Here" value="<?php echo $guru[0]->nama; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" name="email" placeholder="Email Name Here" value="<?php echo $guru[0]->email; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nomor HP</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="no_hp" placeholder="Nomor Here" value="<?php echo $guru[0]->no_hp; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mapel</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="mapel" placeholder="Mapel Here" value="<?php echo $guru[0]->mapel; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Kode cabang</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="id_cabang" placeholder="Nama Ortu Here" value="ML1" readonly="">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <?php echo form_submit('submit','Edit',"class='btn btn-primary'");?>
                                        <a href="<?php echo base_url(); ?>index.php/C_admin/guru" class="btn btn-danger">Kembali</a>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>
                        </div>
            </div>
        </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->


<?php $this->load->view('menu/footer.php'); ?>