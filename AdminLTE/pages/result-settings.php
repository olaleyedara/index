<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Result Setup</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include ('nav.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Result Setup</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Result Setup</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <!-- Row -->
        <div class="row">
                    <div class="col-md-4 col-12">
                                <div class="card card-secondary card-outline">
                                    <div class="card-header">
                                        <h3 class="card-title ">
                                        <i class="fa fa-book" aria-hidden="true"></i>
                                            Continous Assesment Scores
                                        </h3>
                                    </div>
                                        <div class="card-body pb-0">
                                            <form action="" id="createClassCategory">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>CA 1</label>
                                                            <input type="text" name="category" class="form-control" placeholder="CA 3">
                                                        </div>

                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>CA 2</label>
                                                            <input type="text" name="category" class="form-control" placeholder="CA 3">
                                                        </div>

                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>CA 3</label>
                                                            <input type="text" name="category" class="form-control" placeholder="CA 3">
                                                        </div>

                                                    </div>
                                                    </div>
                                                <div class="row d-flex justify-content-between">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Exam</label>
                                                            <input type="text" name="category" class="form-control" placeholder="60">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group float-right">
                                                      <button class="btn btn-secondary createClassCategory">Save</button>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </form>
                                           
                                        </div>
                                </div>
                    </div>
                    <div class="col-md-5 col-12">
                                <div class="card card-secondary card-outline">
                                    <div class="card-header">
                                        <h3 class="card-title ">
                                        <i class="fa fa-book" aria-hidden="true"></i>
                                            Grades Setup
                                        </h3>
                                    </div>
                                    
                                        <div class="card-body pb-0">
                                            <form action="" id="createClassCategory">
                                                <!-- <div class="form-group">
                                                    <label>Category</label>
                                                    <input type="text" name="category" class="form-control" placeholder="Enter Class Category i.e JSS, PRY, SSS">
                                                </div>
                                                <div class="form-group float-right">
                                                    <button class="btn btn-secondary createClassCategory">Add Category</button>
                                                </div> -->
                                                <table id="example1" class="table  table-striped">
                                                <thead>
                                                    <tr>
                                                    <th>Grade</th>
                                                    <th>Score</th>
                                                    <th>Remark</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>B</td>
                                                    <td>60</td>
                                                    <td>
                                                    <input type="text" name="category" class="form-control" placeholder="Very Good">
                                                    </td>
                                                </tr>
                                                <tr>
                                                   
                                                    <td>B</td>
                                                    <td>67</td>
                                                    <td>
                                                    <input type="text" name="category" class="form-control" placeholder="Very Good">
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>A </td>
                                                    <td>80</td>
                                                    <td>
                                                    <input type="text" name="category" class="form-control" placeholder="Excellent">
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td> A</td>
                                                    <td>90</td>
                                                    <td>
                                                    <input type="text" name="category" class="form-control" placeholder="Excellent">
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td> D</td>
                                                    <td>35</td>
                                                    <td>
                                                    <input type="text" name="category" class="form-control" placeholder="Poor">
                                                    </td>
                                                    
                                                </tr>
                                                </tbody>

                                                </table>
                                            </form>
                                        </div>
                                </div>
                    </div>
        </div>
       
          <!-- /.card-body -->
        <!-- /.card -->

        <!-- SELECT2 EXAMPLE -->
       
        <!-- /.card -->

        <!-- /.card -->

      
        <!-- /.row -->
      
        <!-- /.row -->
       
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include ('footer.php'); ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
