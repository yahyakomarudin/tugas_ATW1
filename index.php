<?php

echo "Animal <php>";
echo " <hr>";

class kucing{
	   public $nama,  $jumlah_kaki, $bisa_terbang, $suara;
	}

	$kucing =  new kucing;
	$kucing->nama = "bangki";
	$kucing->jumlah_kaki = "4";
	$kucing->bisa_terbang = "tidak";
	$kucing->suara = "meoong";

	echo "kucing  <br>";
	echo "nama : $kucing->nama <br>";
	echo "jumlah kaki : $kucing->jumlah_kaki <br>";
	echo "bisa terbang : $kucing->bisa_terbang <br>";
	echo "suara : $kucing->suara <br>";
	echo "<hr>";

class anjing{
		public $nama, $jumlah_kaki, $bisa_terbang, $suara;
	}

	$anjing = new anjing;
	$anjing->nama = "cecan";
	$anjing->jumlah_kaki = "4";
	$anjing->bisa_terbang = "tidak";
	$anjing->suara = "guk guk";


	echo "anjing  <br>";
	echo "nama : $anjing->nama <br>";
	echo "jumlah kaki : $anjing->jumlah_kaki <br>";
	echo "bisa terbang : $anjing->bisa_terbang <br>";
	echo "suara : $anjing->suara <br>";
	echo "<hr>";

	class elang{
		public $nama, $jumlah_kaki, $bisa_terbang, $suara;
	}

	$elang = new elang;
	$elang->nama = "nino";
	$elang->jumlah_kaki = "2";
	$elang->bisa_terbang = "ya";
	$elang->suara = "miip";

	echo "elang  <br>";
	echo "nama : $elang->nama <br>";
	echo "jumlah kaki : $elang->jumlah_kaki <br>";
	echo "bisa terbang : $elang->bisa_terbang <br>";
	echo "suara : $elang->suara <br>";
	echo "<hr>";

	class angsa{
		public $nama, $jumlah_kaki, $bisa_terbang, $suara;
	}
	$angsa = new angsa;
	$angsa->nama = "hudada";
	$angsa->jumlah_kaki = "2";
	$angsa->bisa_terbang = "ya";
	$angsa->suara = "kuek kuek kuek";

	echo "angsa <br>";
	echo "nama : $angsa->nama <br>";
	echo "jumlah kaki : $angsa->jumlah_kaki <br>";
	echo "bisa terbang : $angsa->bisa_terbang <br>";
	echo "suara : $angsa->suara <br>";
	echo "<hr>";

