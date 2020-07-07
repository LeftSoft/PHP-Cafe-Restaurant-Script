<?php 

include 'header.php'; 


$galerisor=$db->prepare("SELECT * FROM galeri where galeri_id=:id");
$galerisor->execute(array(
  'id' => $_GET['galeri_id']
  ));

$galericek=$galerisor->fetch(PDO::FETCH_ASSOC);




?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Galeri Düzenleme <small>
              <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }
elseif ($_GET['fotograf']=="no") {?>

              <b style="color:red;">Lütfen Videoyu Seçmeyi Unutmayınız</b>

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

            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
            <form action="../../baglan/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
               

             

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Fotoğraf
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <img width="250" src="../../<?php echo $galericek['galeri_fotograf']; ?>">
                </div>
              </div>
<div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fotoğraf Seç<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="first-name"  name="galeri_fotograf"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <!-- Ck Editör Başlangıç -->

              
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Galeri Başlık <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="galeri_baslik"  required="required" value="<?php echo $galericek['galeri_baslik']; ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
            <!-- Ck Editör Bitiş -->

 <!-- Ck Editör Başlangıç -->

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Galeri Alt Başlık <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">

                  <textarea  class="ckeditor" id="editor2" name="galeri_altbaslik"><?php echo $galericek['galeri_altbaslik']; ?></textarea>
                </div>
              </div>

              <script type="text/javascript">

               CKEDITOR.replace( 'editor2',

               {

                filebrowserBrowseUrl : 'ckfinder/ckfinder.html',

                filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',

                filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',

                filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

                forcePasteAsPlainText: true

              } 

              );

            </script>

            <!-- Ck Editör Bitiş -->
             
             <input type="hidden" name="galeri_id" value="<?php echo $galericek['galeri_id'] ?>"> 


             <div class="ln_solid"></div>
             <div class="form-group">
              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="galeriduzenle" class="btn btn-success">Güncelle</button>
              </div>
            </div>

          </form>



        </div>
      </div>
    </div>
  </div>



  <hr>
  <hr>
  <hr>



</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
