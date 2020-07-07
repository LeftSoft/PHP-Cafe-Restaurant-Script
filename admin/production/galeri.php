<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$galerisor=$db->prepare("SELECT * FROM galeri");
$galerisor->execute();


?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Galeri Listeleme <small>

              <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }
              elseif ($_GET['sil']=="ok") {?>

              <b style="color:green;">Silme İşlemi Başarılı...</b>

              <?php }
              elseif ($_GET['sil']=="no") {?>

              <b style="color:red;">Silme İşlemi Başarısız...</b>

              <?php }

              ?>


            </small></h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href="yorum-ekle.php"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>

            </div>
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Resim</th>
                  <th>Başlık</th>
                  <th>Alt Başlık</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                $say=0;

                while($galericek=$galerisor->fetch(PDO::FETCH_ASSOC)) { $say++?>


                <tr>
                 <td width="20"><?php echo $say ?></td>
                 <td><img width="100" src="../../<?php echo $galericek['galeri_fotograf'] ?>"></td>
                 <td><?php echo $galericek['galeri_baslik'] ?></td>
                  <td><?php echo $galericek['galeri_altbaslik'] ?></td>
                  <td><center><a href="galeri-duzenle.php?galeri_id=<?php echo $galericek['galeri_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
            <td><center><a href="../../baglan/islem.php?galeri_id=<?php echo $galericek['galeri_id']; ?>&galerisil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
          </tr>



          <?php  }

          ?>


        </tbody>
      </table>

      <!-- Div İçerik Bitişi -->


    </div>
  </div>
</div>
</div>




</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
