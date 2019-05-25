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
                <a href="<?php echo base_url(''); ?>index.php/C_guru/create" class="btn btn-success">+ Add Data</a>
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
                                <h5 class="card-title">Data guru</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Kode</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Nomor HP</th>
                                                <th>Matpel</th>
                                                <th>Cabang</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach ($guru as $gr) : ?>
                                            <tr>
                                                <td><?php echo $gr->kode; ?></td>
                                                <td><?php echo $gr->nama; ?></td>
                                                <td><?php echo $gr->email; ?></td>
                                                <td><?php echo $gr->no_hp; ?></td>
                                                <td><?php echo $gr->mapel; ?></td>
                                                <td><?php echo $gr->id_cabang; ?></td>
                                                <td>
                                                  <a class="btn btn-info" href="<?php echo base_url('index.php/C_guru/edit/'); ?><?php echo $gr->kode; ?>">Edit</a>
                                                  <a class="btn btn-danger" href="<?php echo base_url('index.php/C_guru/delete/'); ?><?php echo $gr->kode; ?>">Delete</a>
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