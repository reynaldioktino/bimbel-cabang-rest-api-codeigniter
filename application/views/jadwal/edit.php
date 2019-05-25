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
                        <h4 class="page-title">Edit Jadwal</h4>
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
                            <?php echo form_open_multipart('C_jadwal/edit'); ?>
                            <?php echo form_hidden('kode',$jadwal[0]->kode); ?>
                                <div class="card-body">
                                    <h4 class="card-title">Form Jadwal</h4>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Kelas</label>
                                        <div class="col-sm-9">
                                            <select name="id_kelas" id="" class="form-control">
                                                <option value="">Pilih kelas</option>
                                                <?php foreach ($kelas as $kls) : ?>
                                                <option value="<?php echo $kls->kode; ?>"><?php echo $kls->nama; ?></option>
                                            <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Ruang</label>
                                        <div class="col-sm-9">
                                            <select name="id_ruang" id="" class="form-control">
                                                <option value="">Pilih Ruang</option>
                                                <?php foreach ($ruang as $rg) : ?>
                                                <option value="<?php echo $rg->kode; ?>"><?php echo $rg->nama; ?></option>
                                            <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Guru</label>
                                        <div class="col-sm-9">
                                            <select name="id_guru" id="" class="form-control">
                                                <option value="">Pilih Guru</option>
                                                <?php foreach ($guru as $gr) : ?>
                                                <option value="<?php echo $gr->kode; ?>"><?php echo $gr->nama; ?></option>
                                            <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Hari</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="hari" placeholder="hari Here" value="<?php echo $jadwal[0]->hari; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Jam</label>
                                        <div class="col-sm-9">
                                            <input type="time" class="form-control" name="jam" placeholder="jam Here" value="<?php echo $jadwal[0]->jam; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <?php echo form_submit('submit','Edit',"class='btn btn-primary'");?>
                                        <a href="<?php echo base_url(); ?>index.php/C_admin/jadwal" class="btn btn-danger">Kembali</a>
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