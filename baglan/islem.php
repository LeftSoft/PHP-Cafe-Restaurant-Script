<?php 
ob_start();
session_start();
include '../ayarlar/baglan.php'; 
if (isset($_POST['rezervasyonekle'])) {


	$ayarekle=$db->prepare("INSERT INTO rezervasyon SET
		rez_ad=:rez_ad,
		rez_tel=:rez_tel,
		rez_email=:rez_email,
		rez_kisi=:rez_kisi,
		rez_tarih=:rez_tarih,
		rez_zaman=:rez_zaman
		");

	$insert=$ayarekle->execute(array(
		'rez_ad' => $_POST['rez_ad'],
		'rez_tel' => $_POST['rez_tel'],
		'rez_email' => $_POST['rez_email'],
		'rez_kisi' => $_POST['rez_kisi'],
		'rez_tarih' => $_POST['rez_tarih'],
		'rez_zaman' => $_POST['rez_zaman']
		));


	if ($insert) {
 
		Header("Location:../index.php?durum=ok");


	} else {

		Header("Location:../index.php?durum=no");
	}

}

if (isset($_POST['admingiris'])) {

	$kullanici_mail=$_POST['kullanici_mail'];
	$kullanici_password=md5($_POST['kullanici_password']);

	$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password");
	$kullanicisor->execute(array(
		'mail' => $kullanici_mail,
		'password' => $kullanici_password
		));

	echo $say=$kullanicisor->rowCount();

	if ($say==1) {

		$_SESSION['kullanici_mail']=$kullanici_mail;
		header("Location:../admin/production/index.php");
		exit;



	} else {

		header("Location:../admin/production/login.php?durum=no");
		exit;
	}
	

}

if (isset($_POST['iletisimekle'])) {


	$ayarekle=$db->prepare("INSERT INTO iletisim SET
		iletisim_isim=:iletisim_isim,
		iletisim_mail=:iletisim_mail,
		iletisim_tel=:iletisim_tel,
		iletisim_mesaj=:iletisim_mesaj
		");

	$insert=$ayarekle->execute(array(
		'iletisim_isim' => $_POST['iletisim_isim'],
		'iletisim_mail' => $_POST['iletisim_mail'],
		'iletisim_tel' => $_POST['iletisim_tel'],
		'iletisim_mesaj' => $_POST['iletisim_mesaj']
		));


	if ($insert) {
 
		Header("Location:../iletisim.php?durum=ok");


	} else {

		Header("Location:../iletisim.php?durum=no");
	}

}

if (isset($_POST['iletisimayarkaydet'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_tel=:ayar_tel,
		ayar_gsm=:ayar_gsm,
		ayar_faks=:ayar_faks,
		ayar_mail=:ayar_mail,
		ayar_ilce=:ayar_ilce,
		ayar_il=:ayar_il,
		ayar_adres=:ayar_adres,
		ayar_mesai=:ayar_mesai,
		ayar_footer=:ayar_footer
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_tel' => $_POST['ayar_tel'],
		'ayar_gsm' => $_POST['ayar_gsm'],
		'ayar_faks' => $_POST['ayar_faks'],
		'ayar_mail' => $_POST['ayar_mail'],
		'ayar_ilce' => $_POST['ayar_ilce'],
		'ayar_il' => $_POST['ayar_il'],
		'ayar_adres' => $_POST['ayar_adres'],
		'ayar_mesai' => $_POST['ayar_mesai'],
		'ayar_footer' => $_POST['ayar_footer']
		));


	if ($update) {

		header("Location:../admin/production/iletisim-ayarlar.php?durum=ok");

	} else {

		header("Location:../admin/production/iletisim-ayarlar.php?durum=no");
	}
	
}

if (isset($_POST['iletisimduzenle'])) {

	$iletisim_id=$_POST['iletisim_id'];
	

	$kaydet=$db->prepare("UPDATE urun SET
		iletsim_isim=:iletsim_isim,
		iletisim_mail=:iletisim_mail,
		iletisim_tel=:iletisim_tel,
		iletisim_mesaj=:iletisim_mesaj
		WHERE iletisim_id={$_POST['iletisim_id']}");
	$update=$kaydet->execute(array(
		'iletsim_isim' => $_POST['iletsim_isim'],
		'iletisim_mail' => $_POST['iletisim_mail'],
		'iletisim_tel' => $_POST['iletisim_tel'],
		'iletisim_mesaj' => $_POST['iletisim_mesaj']
		));

	if ($update) {

		Header("Location:../admin/production/iletisim-duzenle.php?durum=ok&iletisim_id=$iletisim_id");

	} else {

		Header("Location:../admin/production/iletisim-duzenle.php?durum=no&iletisim_id=$iletisim_id");
	}

}

if ($_GET['iletisimsil']=="ok") {
	
	$sil=$db->prepare("DELETE from iletisim where iletisim_id=:iletisim_id");
	$kontrol=$sil->execute(array(
		'iletisim_id' => $_GET['iletisim_id']
		));

	if ($kontrol) {

		Header("Location:../admin/production/iletisim.php?durum=ok");

	} else {

		Header("Location:../admin/production/iletisim.php?durum=no");
	}

}

if (isset($_POST['hakkimizdakaydet'])) {
	
	
	$ayarkaydet=$db->prepare("UPDATE hakkimizda SET
		hakkimizda_baslik=:hakkimizda_baslik,
		hakkimizda_icerik=:hakkimizda_icerik
		WHERE hakkimizda_id=0");

	$update=$ayarkaydet->execute(array(
		'hakkimizda_baslik' => $_POST['hakkimizda_baslik'],
		'hakkimizda_icerik' => $_POST['hakkimizda_icerik']
		));


	if ($update) {

		header("Location:../admin/production/hakkimizda.php?durum=ok");

	} else {

		header("Location:../admin/production/hakkimizda.php?durum=no");
	}
	
}



if ($_GET['kullanicisil']=="ok") {

	$sil=$db->prepare("DELETE from kullanici where kullanici_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['kullanici_id']
		));


	if ($kontrol) {


		header("location:../admin/production/kullanici.php?sil=ok");


	} else {

		header("location:../admin/production/kullanici.php?sil=no");

	}
}

if (isset($_POST['kullaniciduzenle'])) {

	$kullanici_id=$_POST['kullanici_id'];

	$ayarkaydet=$db->prepare("UPDATE kullanici SET
		kullanici_adsoyad=:kullanici_adsoyad,
		kullanici_mail=:kullanici_mail,
		kullanici_password=:kullanici_password
		WHERE kullanici_id={$_POST['kullanici_id']}");

	$update=$ayarkaydet->execute(array(
		'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
		'kullanici_mail' => $_POST['kullanici_mail'],
		'kullanici_password' => $_POST['kullanici_password']
		));


	if ($update) {

		Header("Location:../admin/production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=ok");

	} else {

		Header("Location:../admin/production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=no");
	}

}

if (isset($_POST['menuduzenle'])) {

	$menu_id=$_POST['food_menu_id'];
	$ayarkaydet=$db->prepare("UPDATE yemek_menu SET
		food_menu_name=:food_menu_name,
		food_menu_description=:food_menu_description,
		food_menu_price=:food_menu_price,
		menu_sira=:menu_sira,
		ozel_menu=:ozel_menu
		WHERE food_menu_id={$_POST['food_menu_id']}");

	$update=$ayarkaydet->execute(array(
		'food_menu_name' => $_POST['food_menu_name'],
		'food_menu_description' => $_POST['food_menu_description'],
		'food_menu_price' => $_POST['food_menu_price'],
		'menu_sira' => $_POST['menu_sira'],
		'ozel_menu' => $_POST['ozel_menu']
		));


	if ($update) {

		Header("Location:../admin/production/menu-duzenle.php?food_menu_id=$menu_id&durum=ok");

	} else {

		Header("Location:../admin/production/menu-duzenle.php?food_menu_id=$menu_id&durum=no");
	}

}
if ($_GET['menusil']=="ok") {

	$sil=$db->prepare("DELETE from yemek_menu where food_menu_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['food_menu_id']
		));


	if ($kontrol) {


		header("location:../admin/production/menu.php?sil=ok");


	} else {

		header("location:../admin/production/menu.php?sil=no");

	}


}

if (isset($_POST['menuresimkaydet'])) {

/*
	$uploads_dir = '../imaimages/content';
	@$tmp_name = $_FILES['ozel_menu_resim']["tmp_name"];
	@$name = $_FILES['ozel_menu_resim']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
*/
	$kaynak = $_FILES["ozel_menu_resim"]["tmp_name"]; // tempdeki adı
        $ad =  $_FILES["ozel_menu_resim"]["name"]; // dosya adı
        $tip = $_FILES["ozel_menu_resim"]["type"]; // dosya tipi
        $boyut = $_FILES["ozel_menu_resim"]["size"]; // boyutu
        $hedef = "../images/content"; // başta açtıgımız klasör adımız..
        $ekle = move_uploaded_file($kaynak,$hedef."/".$ad); // resmimizi klasöre kayıt ettiriyoruz.
		$refimgyol=substr($hedef, 3)."/".$ad;
$ozelmenuid=$_POST['ozel_menu_id'];
	$kaydet=$db->prepare("INSERT INTO ozel_menu_foto SET
		ozel_foto_id=:ozel_foto_id,
		ozel_menu_id=:ozel_menu_id,
		ozel_menu_resim=:ozel_menu_resim
		");
	$insert=$kaydet->execute(array(
		'ozel_foto_id' => $_POST['ozel_foto_id'],
		'ozel_menu_id' => $_POST['ozel_menu_id'],
		'ozel_menu_resim' => $refimgyol
		));

	if ($insert) {

		Header("Location:../admin/production/ozelmenuresim.php?ozel_menu_id=$ozelmenuid&durum=ok");

	} else {

		Header("Location:../admin/production/ozelmenuresim.php?ozel_menu_id=$ozelmenuid&durum=no");
	}




}




if(isset($_POST['urunfotosil'])) {

	$urun_id=$_POST['ozel_menu_id'];


	echo $checklist = $_POST['urunfotosec'];

	
	foreach($checklist as $list) {

		$sil=$db->prepare("DELETE from ozel_menu_foto where ozel_foto_id=:ozel_foto_id");
		$kontrol=$sil->execute(array(
			'ozel_foto_id' => $list
			));
	}

	if ($kontrol) {

		Header("Location:../admin/production/ozelmenuresim.php?ozel_menu_id=$urun_id&durum=ok");

	} else {

		Header("Location:../admin/production/ozelmenuresim.php?ozel_menu_id=$urun_id&durum=no");
	}
} 

if (isset($_POST['sliderduzenle'])) {

	
	

		//Video Ekleme İşlemi..
	if ($_FILES['slider_resimyol']['size']>0) {
		$name = $_FILES['slider_resimyol']['name'];
		$temp = $_FILES['slider_resimyol']['tmp_name'];
		move_uploaded_file($temp,"../images/slide/".$name);
		$url = "images/slide/$name";
	
		

		//Resim Ekleme İşlemi...
	
		$kaynak = $_FILES["slider_poster"]["tmp_name"]; // tempdeki adı
        $ad =  $_FILES["slider_poster"]["name"]; // dosya adı
        $tip = $_FILES["slider_poster"]["type"]; // dosya tipi
        $boyut = $_FILES["slider_poster"]["size"]; // boyutu
        $hedef = "../images/slide"; // başta açtıgımız klasör adımız..
        $ekle = move_uploaded_file($kaynak,$hedef."/".$ad); // resmimizi klasöre kayıt ettiriyoruz.
		$refimgyol=substr($hedef, 3)."/".$ad;


		$slider_id=$_POST['slider_id'];
		$duzenle=$db->prepare("UPDATE slider SET
			slider_ad=:ad,
			slider_ico=:ico,
			slider_sira=:sira,
			slider_durum=:durum,
			slider_poster=:poster,
			slider_resimyol=:resimyol	
			WHERE slider_id={$_POST['slider_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['slider_ad'],
			'ico' => $_POST['slider_ico'],
			'sira' => $_POST['slider_sira'],
			'durum' => $_POST['slider_durum'],
			'poster' => $refimgyol,
			'resimyol' => $url
			));
		

		if ($update) {

			Header("Location:../admin/production/slider-duzenle.php?slider_id=$slider_id&durum=ok");

		} else {

			Header("Location:../admin/production/slider-duzenle.php?slider_id=$slider_id&durum=no");
		}

}
else
{
	$slider_id=$_POST['slider_id'];
	Header("Location:../admin/production/slider-duzenle.php?slider_id=$slider_id&durum=no");
}

	} 

	
	if (isset($_POST['sliderekle'])) {
//Video Ekleme İşlemi..
	if ($_FILES['slider_resimyol']['size']>0) {
		$name = $_FILES['slider_resimyol']['name'];
		$temp = $_FILES['slider_resimyol']['tmp_name'];
		move_uploaded_file($temp,"../images/slide/".$name);
		$url = "images/slide/$name";

$kaynak = $_FILES["slider_poster"]["tmp_name"]; // tempdeki adı
        $ad =  $_FILES["slider_poster"]["name"]; // dosya adı
        $tip = $_FILES["slider_poster"]["type"]; // dosya tipi
        $boyut = $_FILES["slider_poster"]["size"]; // boyutu
        $hedef = "../images/slide"; // başta açtıgımız klasör adımız..
        $ekle = move_uploaded_file($kaynak,$hedef."/".$ad); // resmimizi klasöre kayıt ettiriyoruz.
		$refimgyol=substr($hedef, 3)."/".$ad;

		$kaynak2 = $_FILES["slider_ico"]["tmp_name"]; // tempdeki adı
        $ad2 =  $_FILES["slider_poster"]["name"]; // dosya adı
        $tip2 = $_FILES["slider_poster"]["type"]; // dosya tipi
        $boyut2 = $_FILES["slider_poster"]["size"]; // boyutu
        $hedef2 = "../images"; // başta açtıgımız klasör adımız..
        $ekle2 = move_uploaded_file($kaynak2,$hedef2."/".$ad2); // resmimizi klasöre kayıt ettiriyoruz.
		$ico=substr($hedef2, 3)."/".$ad2;
		
$kaydet=$db->prepare("INSERT INTO slider SET
		slider_ad=:slider_ad,
		slider_poster=:poster,
		slider_resimyol=:resimyol,
		slider_ico=:slider_ico,
		slider_sira=:slider_sira,
		slider_durum=:durum
		");
	

	$insert=$kaydet->execute(array(
			'slider_ad' => $_POST['slider_ad'],
			'slider_poster' => $refimgyol,
			'slider_resimyol' => $url,
			'slider_ico' => $ico,
			'slider_sira' => $_POST['slider_sira'],
			'slider_durum' => $_POST['slider_durum']
			
			
			));


	if ($insert) {
 
		Header("Location:../admin/production/slider.php?durum=ok");


	} else {

		Header("Location:../admin/production/slider.php?durum=no");
	}
	}
	else
{
	
	Header("Location:../admin/production/slider.php?durum=video");
}

}

	if (isset($_POST['menukaydet'])) {


	$ayarekle=$db->prepare("INSERT INTO yemek_menu SET
		food_menu_name=:food_menu_name,
		food_menu_description=:food_menu_description,
		food_menu_price=:food_menu_price,
		menu_sira=:menu_sira,
		ozel_menu=:ozel_menu
		");

	$insert=$ayarekle->execute(array(
		'food_menu_name' => $_POST['food_menu_name'],
		'food_menu_description' => $_POST['food_menu_description'],
		'food_menu_price' => $_POST['food_menu_price'],
		'menu_sira' => $_POST['menu_sira'],
		'ozel_menu' => $_POST['ozel_menu']
		));


	if ($insert) {
 
		Header("Location:../admin/production/menu.php?durum=ok");


	} else {

		Header("Location:../admin/production/menu.php?durum=no");
	}

}

if ($_GET['rezsil']=="ok") {
	
	$sil=$db->prepare("DELETE from rezervasyon where rez_id=:rez_id");
	$kontrol=$sil->execute(array(
		'rez_id' => $_GET['rez_id']
		));

	if ($kontrol) {

		Header("Location:../admin/production/rezervasyon.php?durum=ok");

	} else {

		Header("Location:../admin/production/rezervasyon.php?durum=no");
	}

}

if ($_GET['galerisil']=="ok") {

	$sil=$db->prepare("DELETE from galeri where galeri_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['galeri_id']
		));


	if ($kontrol) {


		header("location:../admin/production/galeri.php?sil=ok");


	} else {

		header("location:../admin/production/galeri.php?sil=no");

	}


}
if (isset($_POST['galeriduzenle'])) {

	
		
	$kaynak = $_FILES["galeri_fotograf"]["tmp_name"]; // tempdeki adı
        $ad =  $_FILES["galeri_fotograf"]["name"]; // dosya adı
        $tip = $_FILES["galeri_fotograf"]["type"]; // dosya tipi
        $boyut = $_FILES["galeri_fotograf"]["size"]; // boyutu
        $hedef = "../images/gallery"; // başta açtıgımız klasör adımız..
        $ekle = move_uploaded_file($kaynak,$hedef."/".$ad); // resmimizi klasöre kayıt ettiriyoruz.
		$refimgyol=substr($hedef, 3)."/".$ad;
		
		//Resim Ekleme İşlemi...
		$galeri_id=$_POST['galeri_id'];
		$duzenle=$db->prepare("UPDATE galeri SET
			galeri_fotograf=:galeri_fotograf,
			galeri_baslik=:galeri_baslik,
			galeri_altbaslik=:galeri_altbaslik
			WHERE galeri_id={$_POST['galeri_id']}");
		$update=$duzenle->execute(array(
			'galeri_fotograf' => $refimgyol,
			'galeri_baslik' => $_POST['galeri_baslik'],
			'galeri_altbaslik' => $_POST['galeri_altbaslik']
			));
		

		if ($update) {

			Header("Location:../admin/production/galeri-duzenle.php?galeri_id=$galeri_id&durum=ok");

		} else {

			Header("Location:../admin/production/galeri-duzenle.php?galeri_id=$galeri_id&durum=no");
		}




	}
?>