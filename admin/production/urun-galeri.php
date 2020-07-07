<?php 

include 'header.php';


?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">


    </div>

    <div class="col-md-12">
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

          <form action="" method="POST" >
            <div class="input-group">
              <input type="text" class="form-control" name="aranan" placeholder="Anahtar Kelime Giriniz...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit" name="arama">Ara!</button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>


    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
             <div align="left" class="col-md-6">
              <h2 >Resim Ürün Fotoğraf İşlemleri <small>
                <?php
                echo $say." kayıt listelendi.";
                if ($_GET['durum']=='ok') {?> 
                
                <b style="color:green;">İşlem başarılı...</b>

                <?php } elseif ($_GET['durum']=='no')  {?>

                <b style="color:red;">İşlem Başarısız...</b>

                <?php } ?></small></h2><br>
              </div>
              <form  action="../netting/islem.php" method="POST" enctype="multipart/form-data">

              <input type="hidden" name="urun_id" value="<?php echo $_GET['urun_id']; ?>">

                <div align="right" class="col-md-6">
                  <button type="submit" name="urunfotosil"  class="btn btn-danger "><i class="fa fa-trash" aria-hidden="true"></i> Seçilenleri Sil</button>
                  <a class="btn btn-success" href="urun-foto-yukle.php?urun_id=<?php echo $_GET['urun_id'];?>"><i class="fa fa-plus" aria-hidden="true"></i> Ürün Fotoğraf Yükle</a>
                </div>
                <div class="clearfix"></div>
              </div>


              <div class="x_content">


                <?php

                $sayfada = 25; // sayfada gösterilecek içerik miktarını belirtiyoruz.


                $sorgu=$db->prepare("select * from urunfoto");
                $sorgu->execute();
                $toplam_urunfoto=$sorgu->rowCount();

                $toplam_sayfa = ceil($toplam_urunfoto / $sayfada);

                  // eğer sayfa girilmemişse 1 varsayalım.
                $sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;

          // eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
                if($sayfa < 1) $sayfa = 1; 

        // toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım.
                if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 

                $limit = ($sayfa - 1) * $sayfada;

                $urunfotosor=$db->prepare("select * from urunfoto where urun_id=:urun_id order by urunfoto_id DESC limit $limit,$sayfada");
                $urunfotosor->execute(array(
                  'urun_id' => $_GET['urun_id']
                  ));

                  while($urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC)) { ?>



                  <div class="col-md-55">
                   <label>
                    <div class="image view view-first">
                      <img style="width: 250px; height: 100px; display: block;" src="../../<?php echo $urunfotocek['urunfoto_resimyol']; ?>" alt="image" />
                      <div class="mask">
                        <p><?php echo $urunfotocek['urunfoto_ad']; ?> <?php echo $urunfotocek['urunfoto_id']; ?></p>
                        <div class="tools tools-bottom">

                          <!--<a href="#"><i class="fa fa-times"></i></a>-->

                        </div>

                      </div>

                    </div>

                    <?php  array("$urunfotosec"); ?>


                    <input type="checkbox" name="urunfotosec[]"  value="<?php echo $urunfotocek['urunfoto_id']; ?>" > Seç
                  </label>


                </div>

                <?php } ?>

                <div align="right" class="col-md-12">
                  <ul class="pagination">

                    <?php

                    $s=0;

                    while ($s < $toplam_sayfa) {

                      $s++; ?>

                      <?php 

                      if ($s==$sayfa) {?>

                      <li class="active">

                        <a href="urunfoto.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>

                      </li>

                      <?php } else {?>


                      <li>

                        <a href="urunfoto.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>

                      </li>

                      <?php   }

                    }

                    ?>

                  </ul>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /page content -->



<?php include 'footer.php'; ?>
