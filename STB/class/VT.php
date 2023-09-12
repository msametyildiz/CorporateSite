<?php
class VT{
	var $sunucu="localhost";
	var $user="root";
	var $password="";
	var $dbname="stb_yonetimpaneli";
	var $baglanti;

	//veri tabananına bağlantı işlemi burada oluyor
	function __construct()
	{
		try {
			$this->baglanti=new PDO("mysql:host=".$this->sunucu.";dbname=".$this->dbname.";charset=utf8",$this->user,$this->password);
		
		} catch (PDOException $error) {
			echo $error->getMessage();
			exit();
		}
		

	}
    // select * FROM ayarlar WHERE ID=1 ORDER BY ID ASC LIMIT 1
	public function VeriGetir($tablo , $wherealanlar="",$wherearraydeger=array(),$ordeby="ORDER BY ID ASC",$limit=""){

		$this->baglanti->query("SET CHARACTER SET utf8");
		$sql="SELECT * FROM ".$tablo;
		if(!empty($wherealanlar) && !empty($wherearraydeger)){
			$sql.=" ".$wherealanlar;
			if(!empty($ordeby)){$sql.=" ".$ordeby;}
			if(!empty($limit)){$sql.=" LIMIT ".$limit;}
			$calistir=$this->baglanti->prepare($sql);
			$sonuc=$calistir->execute($wherearraydeger); // TODO
			$veri=$calistir->fetchAll (PDO::FETCH_ASSOC);
		}
		else {
			if(!empty($ordeby)){$sql.=" ".$ordeby;}
			if(!empty($limit)){$sql.=" LIMIT ".$limit;}
			$veri=$this->baglanti->query($sql,PDO::FETCH_ASSOC);
		}
		if ($veri!=false && !empty($veri)) {
			$datalar=array();
			foreach ($veri as $bilgiler) {
				$datalar[]=$bilgiler;/*  $sonuc[0]["baslik"]*/
			}
			return $datalar;
		}
		else{
			return false;
		}
	}























    
}
?>