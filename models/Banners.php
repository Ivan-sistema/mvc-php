<?php
class Banners extends model{
public function __construct() {
	parent::__construct();
}

	public function getAll(){
		$array = array();

		$sql = "SELECT * FROM banners";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}
		public function getAllLimit(){
		$array = array();

		$sql = "SELECT * FROM banners LIMIT 3";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}
public function get($id){
	$array = array();
	$sql = "SELECT * FROM banners WHERE id = :id";
	$sql = $this->db->prepare($sql);
	$sql->bindValue(':id', $id);
	$sql->execute();

	if($sql->rowCount() > 0){
		$array = $sql->fetch();
	}
	return $array;
}
	public function add($companies,$name, $images,$status){

		$url = '';
		if(count($images) > 0){
			$tipos = array('image/jpeg', 'image/jpg', 'image/png');
			if(in_array($images['type'], $tipos)){
				$tipo = 'images';

				$url = md5(time().rand(0,999));
				switch ($images['type']) {
					case 'image/jpeg':
					case 'image/jpg':
						$url .= '.jpg';
						break;
					case 'image/png';
						$url .= '.png';
						break;	
					
				}
				move_uploaded_file($images['tmp_name'], 'assets/images/uploads/banners/'.$url);
			}
		}


		$sql = "INSERT INTO banners (id_company,name,images,status) VALUES (:id_company,:name,:images,:status)";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id_company', $companies);
		$sql->bindValue(':name', $name);
		$sql->bindValue(':images', $url);
		$sql->bindValue(':status', $status);
		$sql->execute();
	}

	public function delete($id){
		$sql = "DELETE FROM banners WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();
	}
}