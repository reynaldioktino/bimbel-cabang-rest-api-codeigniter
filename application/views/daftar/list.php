<?php  
    $this->load->view('menu/header');
    $this->load->view('menu/navbar');
?>

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tables</h4>
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
                <a href="<?php echo base_url(''); ?>index.php/C_daftar/create" class="btn btn-success">+ Add Data</a>
            </div>
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Daftar</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>Nomor HP</th>
                                                <th>Sekolah</th>
                                                <th>Nama Ortu</th>
                                                <th>Nomor Ortu</th>
                                                <th>Program</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach ($daftar as $dftr) : ?>
                                            <tr>
                                                <td><?php echo $dftr->nama; ?></td>
                                                <td><?php echo $dftr->alamat; ?></td>
                                                <td><?php echo $dftr->email; ?></td>
                                                <td><?php echo $dftr->no_hp; ?></td>
                                                <td><?php echo $dftr->sekolah; ?></td>
                                                <td><?php echo $dftr->nama_ortu; ?></td>
                                                <td><?php echo $dftr->no_hp_ortu; ?></td>
                                                <td><?php echo $dftr->id_program; ?></td>
                                                <td>
                                                  <a class="btn btn-info" href="<?php echo base_url('index.php/C_daftar/edit/'); ?><?php echo $dftr->kode; ?>">Edit</a>
                                                  <a class="btn btn-danger" href="<?php echo base_url('index.php/C_daftar/delete/'); ?><?php echo $dftr->kode; ?>">Delete</a>
                                                  <a class="btn btn-warning" href="<?php echo base_url('index.php/C_daftar/pilih_kelas/'); ?><?php echo $dftr->kode; ?>/<?php echo $dftr->id_program; ?>">Kelas</a>
                                                </td>
                                            </tr>
                                          <?php endforeach ?>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
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
    <!-- ============================================================== -->
<?php $this->load->view('menu/footer.php'); ?>