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
                        <h4 class="page-title">Edit Kontak</h4>
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
                            <?php echo form_open_multipart('C_daftar/pilih_kelas'); ?>
                            <?php echo form_hidden('id_daftar',$daftar[0]->kode); ?>
                            <input type="hidden" name="id_daftar" value="<?php echo $daftar[0]->kode; ?>">
                                <div class="card-body">
                                    <h4 class="card-title">Form daftar</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" readonly="" class="form-control" name="nama" placeholder="Nama Here" value="<?php echo $daftar[0]->nama; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <textarea name="alamat" readonly="" id="alamat" cols="30" rows="4" placeholder="Alamat Here" class="form-control" value=""><?php echo $daftar[0]->alamat; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" readonly="" class="form-control" name="email" placeholder="Email Name Here" value="<?php echo $daftar[0]->email; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nomor HP</label>
                                        <div class="col-sm-9">
                                            <input type="number" readonly="" class="form-control" name="no_hp" placeholder="Nomor Here" value="<?php echo $daftar[0]->no_hp; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Cabang</label>
                                        <div class="col-sm-9">
                                            <input type="text" readonly="" class="form-control" name="id_cabang" placeholder="Nomor Here" value="ML1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Kelas</label>
                                        <div class="col-sm-9">
                                            <select name="id_kelas" id="" class="form-control">
                                                <option value="">Pilih Kelas</option>
                                                <?php foreach ($kelas as $kls) : ?>
                                                <option value="<?php echo $kls->kode; ?>"><?php echo $kls->nama; ?></option>
                                            <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <?php echo form_submit('submit','Tambah Siswa',"class='btn btn-primary'");?>
                                        <a href="<?php echo base_url(); ?>index.php/C_admin/daftar" class="btn btn-danger">Kembali</a>
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