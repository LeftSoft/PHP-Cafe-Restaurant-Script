<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$menusor=$db->prepare("SELECT * FROM yemek_menu order by menu_sira ASC");
$menusor->execute();

$ozelmenusor=$db->prepare("SELECT * FROM ozel_menu_foto where ozel_foto_id=:id");
$ozelmenusor->execute(array(
  'id' => $_GET['ozel_foto_id']
  ));

$ozelmenucek=$ozelmenusor->fetch(PDO::FETCH_ASSOC);
?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Menü Listeleme <small>,

              <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>


            </small></h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href="menu-ekle.php"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>

            </div>
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Menü Ad</th>
                  <th>Menü Açıklama</th>
                  <th>Menü Sırası</th>
                  <th>Menü Fiyat</th>
                  <th>Özel Menü</th>
                  <th>Resim Yükle</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                $say=0;

                while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) { $say++?>


                <tr>
                 <td width="20"><?php echo $say ?></td>
                 <td><?php echo $menucek['food_menu_name'] ?></td>
                 <td><?php echo $menucek['food_menu_description'] ?></td>
                <td><?php echo $menucek['menu_sira'] ?></td>
                <td><center><?php echo $menucek['food_menu_price'] ?>₺</center></td>

                 <td><center><?php 

                  if ($menucek['ozel_menu']==1) {?>

                  <button class="btn btn-success btn-xs">Aktif</button>

                  <!--

                  success -> yeşil
                  warning -> turuncu
                  danger -> kırmızı
                  default -> beyaz
                  primary -> mavi buton

                  btn-xs -> ufak buton 

                -->

                <?php } else {?>

                <button class="btn btn-danger btn-xs">Pasif</button>


                <?php } ?>
              </center>


            </td>
 <td><center><a href="ozelmenuresim.php?ozel_menu_id=<?php echo $menucek['food_menu_id']; ?>"><button class="btn btn-warning btn-xs">Resim Ekle</button></a></center></td>

            <td><center><a href="menu-duzenle.php?food_menu_id=<?php echo $menucek['food_menu_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
            <td><center><a href="../../baglan/islem.php?food_menu_id=<?php echo $menucek['food_menu_id']; ?>&menusil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
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
