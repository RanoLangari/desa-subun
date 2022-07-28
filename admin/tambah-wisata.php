<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, severny admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, my admin design, my admin dashboard bootstrap 4 dashboard template">
   <meta name="description" content="My Admin is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
   <meta name="robots" content="noindex,nofollow">
   <title>Wisata Desa</title>
   <link rel="canonical" href="https://www.wrappixel.com/templates/myadmin-lite/" />
   <!-- Favicon icon -->
   <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
   <!-- Bootstrap Core CSS -->
   <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Menu CSS -->
   <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
   <!-- Custom CSS -->
   <link href="css/style.css" rel="stylesheet">
   <script src="//cdn.ckeditor.com/4.19.0/basic/ckeditor.js"></script>
</head>

<body>
   <!-- Preloader -->

   <div id="wrapper">
      <!-- Navigation -->
      <?php include './navigationCollapse.php'; ?>
      <!-- Page Content -->
      <div id="page-wrapper">
         <div class="container-fluid">
            <div class="row bg-title">
               <div class="col-lg-12">


               </div>
               <!-- /.col-lg-12 -->
            </div>
            <!-- row -->
            <div class="row">
               <div class="col-md-12">
                  <div class="white-box">
                     <h3>Tambah Wisata</h3>

                     <form class="form-horizontal form-material" action="tambah-wisata-aksi" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                           <div class="col-md-12">
                              <input type="text" name="nama" class="form form-control" placeholder="Nama Wisata">
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="col-sm-12">
                              <input type="file" name="image" class="btn btn-primary btn-rounded">
                           </div>

                        </div>

                        <div class="form-group">
                           <div class="col-md-12">
                              <input type="text" name="lokasi" class="form form-control" placeholder="Lokasi Wisata">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-12">
                              <input type="text" name="gmap" class="form form-control" placeholder="Link Embed Google Maps">
                              <a href="" style="font-size:0.8em">Panduan Embed Gmaps</a>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="col-md-12">
                              <label for="deskripsi">Deskripsi</label>
                              <textarea name="deskripsi" id="editor1" type="text" placeholder="Ketikan Isi berita.." class="form-control form-control-line">

                                </textarea>
                           </div>
                        </div>

                        <?php

                        ?>

                        <div class="form-group">
                           <div class="col-sm-12">
                              <input name="submit" type="submit" class="btn btn-primary" value="Tambah Wisata">
                           </div>
                        </div>
                     </form>

                  </div>
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
         </div>
         <!-- /#page-wrapper -->
         <footer class=" text-center"> 2022 &copy; Desa Wisata Karangtengah</a> </footer>
      </div>
      <!-- /#wrapper -->
      <!-- jQuery -->
      <script src="bower_components/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- Menu Plugin JavaScript -->
      <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
      <!--Nice scroll JavaScript -->
      <script src="js/jquery.nicescroll.js"></script>
      <!--Wave Effects -->
      <script src="js/waves.js"></script>
      <!-- Custom Theme JavaScript -->
      <script src="js/myadmin.js"></script>
      <script>
         CKEDITOR.replace('editor1');
         CKEDITOR.replace('editor2');
      </script>
</body>

</html>