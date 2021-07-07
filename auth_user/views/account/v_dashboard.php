<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div style="font-size: 20px; margin-left: 50px;">
        <p>Selamat datang di halaman dashboard,
            <?php echo ucfirst($this->session->userdata('username')); ?>!</p>
        <p> Untuk logout dari sistem, silakan klik
            <?php echo anchor('login/logout', 'di sini...'); ?></p>
    </div>
</div>
<!-- /.content-wrapper -->