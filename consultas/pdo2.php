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
	$sql="SELECT nom_apre,des_tipo_id,nom_ciudad,nom_depto,des_centro FROM 
	aprendiz,desercion,ciudad,tipo_id,depto,centro,ficha,causadesercion WHERE 
	desercion.cod_causa=causadesercion.cod_causa and desercion.id_apre=aprendiz.id_apre	
	and desercion.num_ficha=ficha.num_ficha and aprendiz.cod_tipo_id=tipo_id.cod_tipo_id and 
	aprendiz.cod_ciudad=ciudad.cod_ciudad and ciudad.cod_depto=depto.cod_depto and ficha.cod_centro=centro.cod_centro";
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