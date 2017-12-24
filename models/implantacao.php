<?php
class Implantacao extends model {

	public function getCliente(){
		$array = array();

		$sql = "SELECT * FROM clientes";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}

}

?>