<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$rezsor=$db->prepare("SELECT * FROM Rezervasyon");
$rezsor->execute();


?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Rezervasyon Listeleme <small>
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


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Ad</th>
                  <th>Telefon</th>
                  <th>E-Mail</th>
                  <th>Kişi</th>
                  <th>Tarih</th>
                  <th>Zaman</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                $say=0;

                while($rezcek=$rezsor->fetch(PDO::FETCH_ASSOC)) { $say++?>


                <tr>
                 <td width="20"><?php echo $say ?></td>
                 <td><?php echo $rezcek['rez_ad'] ?></td>
                 <td><?php echo $rezcek['rez_tel'] ?></td>
                 <td><?php echo $rezcek['rez_email'] ?></td>
	            <td><?php echo $rezcek['rez_kisi'] ?></td>
	            <td><?php echo $rezcek['rez_tarih'] ?></td>
	            <td><?php echo $rezcek['rez_zaman'] ?></td>
	            
	            <td><center><a href="../../baglan/islem.php?rez_id=<?php echo $rezcek['rez_id']; ?>&rezsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
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
