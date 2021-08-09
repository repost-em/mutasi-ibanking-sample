<?php
@session_start();
// error_reporting(0);
include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Custom fonts for this template-->
  <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="asset/stylesheet" type="text/css" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">
</head>


<!-- Custom table -->
<style>
  * {
    box-sizing: border-box;
  }

  .row {
    margin-left: 10px;
    margin-right: -15px;
  }

  .column {
    float: left;
    width: 50%;
    padding: 5px;
  }

  /* Clearfix (clear floats) */
  .row::after {
    content: "";
    clear: both;
    display: table;
  }

  table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 50%;
    border: 1px solid #ddd;
  }

  th,
  td {
    text-align: left;
    padding: 20px;
  }

  .column {
    width: 100%;
  }
</style>

<!-- Custom styles for this page -->

<body id="page-top">
  <div class="box">
    <div class="box-header">
      <h3 class="m-0 font-weight-bold text-primary"> &nbsp; Mutasi iBanking</h3>
      <br>
      <div class="row">
        <!-- <div class="column"> -->
        <div class="col-lg-6">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Mutasi iBanking</h6>
            </div>
            <div class="card-body">

              <div class="table-responsive">
                <div class="row">
                  <div class="column">
                    <table id="example1" class="table table-bordered table-striped" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>Keterangan</th>
                          <th>Jumlah</th>
                          <th>Saldo</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        $sql = "select * from mutasi_ibanking";
                        $query = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($query)) :

                        ?>
                          <tr>
                            <td>
                              <?= $no ?>
                            </td>
                            <td>
                              <?= $row['tanggal'] ?>
                            </td>
                            <td>
                              <?= $row['keterangan'] ?>
                            </td>
                            <td>
                              <?= $row['jumlah'] ?>
                            </td>
                            <td>
                              <?php echo $row['saldo']; ?>
                            </td>

                          </tr>
                        <?php $no++;
                        endwhile; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="column">
            <div class="container-fluid"></div>
            <!-- <div class="col-lg-6"> -->
            <div class="my-2"></div>
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Reload Mutasi iBanking </h6>
              </div>
              <div class="card-body">

                <form method="GET">
                  <label for="date1">From</label><br>
                  <input type="date" name="date1" value="<?php echo date('ymd') ?>">
                  <label for="date2">&nbsp;To</label>
                  <input type="date" name="date2" value="<?php echo date('ymd') ?>">
                  <input type="submit" name="submit" class="btn btn-primary" value="filter">
                </form>
                <hr class="sidebar-divider">
                <a class="btn btn-success" href="#" aria-label="Refresh"><i class="fa fa-undo"></i></a>
                <a class="btn btn-primary" href="#" aria-label="Home"><i class="fa fa-home"></i></a>
                <div class="table-responsive">
                  <div class="row">
                    <div class="column">
                      <table id="example1" class="table table-bordered table-striped" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Bank</th>
                            <th>Username</th>
                            <th>Date Begin</th>
                            <th>Date End</th>
                            <th>Saldo Akhir</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $no = 1;
                          $sql = "select * from detail_mutasi";
                          $query = mysqli_query($con, $sql);
                          while ($row = mysqli_fetch_assoc($query)) :

                          ?>
                            <tr>
                              <td>
                                <?= $row['nama_bank'] ?>
                              </td>
                              <td>
                                <?= $row['username'] ?>
                              </td>
                              <td>
                                <?= $row['d_begin'] ?>
                              </td>
                              <td>
                                <?php echo $row['d_end']; ?>
                              </td>
                              <td>
                                <?php echo $row['saldo_akhir']; ?></td>

                            </tr>
                          <?php $no++;
                          endwhile; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="asset/vendor/jquery/jquery.min.js"></script>
  <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="asset/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="asset/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="asset/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="asset/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <!-- <script src="js/demo/datatables-demo.js"></script> -->
  <script>
    $(function() {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>

</body>

</html>