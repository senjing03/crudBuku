<?php
	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		public $connect;
		function __construct(){
			$connect = mysqli_connect("localhost", "root", "","akademik");
			
			$this->connect=$connect;
		}
		
		function execute($query){
			return mysqli_query($this->connect,$query);
		}
		
		function selectAll(){
			$query = "select * from mhs";
			return $this->execute($query);
		}
		
		function selectMhs($nim){
			$query = "select * from mhs where nim='$nim'";
			return $this->execute($query);
		}
		
		function updateMhs($nim, $nama, $angkatan, $fakultas, $prodi){
			$query = "update mhs set nim='$nim', nama='$nama', angkatan='$angkatan', fakultas='$fakultas', prodi='$prodi' where nim='$nim'";
			return $this->execute($query);
		}
		
		function deleteMhs($nim){
			$query = "delete from mhs where nim='$nim'";
			return $this->execute($query);
		}
		
		function insertMhs($nim, $nama, $angkatan, $fakultas, $prodi){
			$query = "insert into mhs values ('$nim', '$nama', '$angkatan', '$fakultas','$prodi')";
			return $this->execute($query);
		}
		
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
?>