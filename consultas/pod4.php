<?php
class DataBaseClass{
	private $host,
	$dbname,
	$port,
	$user,
	$pasword,
	$driver,
	$connect;

	public function __construct($host,$dbname,$user,$pasword,$port='3306',$drive='mysql')

	{
		$this->host=$host;
		$this->dbname=$dbname;
		$this->user=$user;
		$this->pasword=$pasword;
		$this->port=$port;
		$this->drive=$drive;
	}
//getInstancia:PEDIMOS LA INSTANCIA
	public function getInstance() {
	//$this->connect cambia la afirmacion, si es verdadero se invierte.
		if(!$this->connect) {
			try{
				$dsn=$this->drive
				.':host='
				.$this->host
				.';dbname='.$this->dbname
				.';port='.$this->port;
				$this->connect= new PDO($dsn,$this->user,
					$this->pasword);
			}catch(PDOException $exc){
				echo $exc->getMessage();
		//muerte:die();	
			}
		}
		Return $this->connect;



	}
}
try{

	$objDB=new DataBaseClass('localhost','bddesercion','root','');
	$sql="SELECT count(aprendiz.id_apre),des_causa, desc_centro FROM causa_desercion,desercion,aprendiz,centro,ficha WHERE desercion.id_apre=aprendiz.id_apre and desercion.cod_causa=causa_desercion.cod_causa and desercion.num_ficha=ficha.num_ficha and ficha.cod_centro=centro.cod_centro and cento.cod_centro=2";
	$arrData=$objDB->getInstance()
	->query($sql)
	->fetchAll(PDO::FETCH_ASSOC);
         //$db= new PDO($dsn,$username,$passwd);
         //$sql='SELECT * FROM usuario';
         //$src=$db->query($sql);
         //$arrData=$src->fetchAll(PDO::FETCH_ASSOC);

	echo '<pre>';
	print_r($arrData);
	echo '</pre>';
}catch (PDOExcepcion $ex){
	echo $exc->getmessage();

}



?>