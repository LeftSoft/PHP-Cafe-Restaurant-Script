<?php 

include 'header.php';
$menusor=$db->prepare("SELECT * FROM yemek_menu where food_menu_id=:food_menu_id");
$menusor->execute(array(
'food_menu_id' => $_GET['ozel_menu_id']
));

?>




<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Fotoğraf Yükleme İşlemi<small>

              <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız... | Birden Çok Resim Eklenemez.</b>
              <?php }

              ?>


            </small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            <form action="../../baglan/islem.php" method="POST" enctype="multipart/form-data"  data-parsley-validate class="form-horizontal form-label-left">

               

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="file" id="first-name"  name="ozel_menu_resim"  class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
<div hidden="" class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Ad<span class="required">*</span>
              </label>
              <div hidden="" class="col-md-6 col-sm-6 col-xs-12">
               <select  id="heard" class="form-control" name="ozel_menu_id" required>
<?php  

while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {?>

                  <option value="<?php echo $menucek['food_menu_id'] ?>" <?php echo $menucek['food_menu_id'] == $_GET['ozel_menu_id'] ? 'selected=""' : ''; ?>><?php echo $menucek['food_menu_name'] ?></option>

<?php } ?>

                  
                 

                 </select>
               </div>
             </div>
             
                
                <input type="hidden" name="ozel_foto_id" value="<?php echo $_GET['ozel_menu_id'];?>"> 
                
                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" name="menuresimkaydet" class="btn btn-primary">Ekle</button>
                </div>

              </form>

              

            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
            



          </div>
        </div>
      </div>
    </div>






  </div>
</div>

<!-- page content -->
<!----
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">


    </div>

    <div class="col-md-12">
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

          <form action="" method="POST">
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

              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Çoklu resim yükleme işlemleri</h2>

                      <div align="right" class="col-md-9">
                     
                        <a class="btn btn-success" href="ozelmenuresim.php?ozel_menu_id=<?php echo $_GET['ozel_menu_id'];?>"><i class="fa fa-plus" aria-hidden="true"></i> Yüklenen Resimleri Gör</a>
                      </div>

                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <p>Yüklenecek resimlerin bulunduğu klasöre giderek tamamını tek seferde seçerek yükleyebilirsiniz.</p>
                      





                      <form action="../../baglan/menugaleri.php" class="dropzone" >

                        <input type="hidden" name="ozel_menu_id" value="<?php echo $_GET['ozel_menu_id'];  ?>">
                        
                      </form>

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
</div>
</div>
--->
<!-- /page content -->



<?php include 'footer.php'; ?>
