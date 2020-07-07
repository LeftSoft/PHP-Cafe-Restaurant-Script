<?php 

include 'header.php'; 


$iletisimsor=$db->prepare("SELECT * FROM iletisim where iletisim_id=:id");
$iletisimsor->execute(array(
  'id' => $_GET['iletisim_id']
  ));

$iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC);

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Mesaj Oku<small>,

              <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>


            </small></h2>
           
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
            <form action="../../baglan/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">



              <!-- Kategori seçme başlangıç -->


              


                 <!-- kategori seçme bitiş -->


                 <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İsim:</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" disabled="" id="first-name" name="iletisim_isim" value="<?php echo $iletisimcek['iletisim_isim'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                  <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">E-Posta:</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" disabled="" id="first-name" name="iletisim_mail" value="<?php echo $iletisimcek['iletisim_mail'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon:</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="first-name" disabled="" name="iletisim_tel" value="<?php echo $iletisimcek['iletisim_tel'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <!-- Ck Editör Başlangıç -->

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mesaj:</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">

                    <textarea  disabled="" class="ckeditor" id="editor1" name="iletisim_mesaj"><?php echo $iletisimcek['iletisim_mesaj']; ?></textarea>
                  </div>
                </div>

                <script type="text/javascript">

                 CKEDITOR.replace( 'editor1',

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


             

             <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>"> 
          </form>

              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button class="btn btn-info"><a href="iletisim.php">Geri Git</button></a>
              </div>
          


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
