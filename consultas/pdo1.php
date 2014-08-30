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
	$sql="SELECT count(aprendiz.id_apre),fase_desercion FROM aprendiz,desercion WHERE desercion.id_apre=aprendiz.id_apre group by fase_desercion";
	$arrData=$objDB->getInstance()
	->query($sql)
	->fetchAll(PDO::FETCH_ASSOC);
         //$db= new PDO($dsn,$username,$passwd);
         //$sql='SELECT * FROM usuario';
         //$src=$db->query($sql);
         //$arrData=$src->fetchAll(PDO::FETCH_ASSOC);
}catch (PDOExcepcion $ex){
	echo $exc->getmessage();

}



?>
<html>
<head>
    <title></title>
</head>
<body background="blue"><center>
<?php foreach ($arrData as $row): ?>
<table border='2'>
	<tr>
		<th>Total de Aprendices</th>
		<th>Fase Desercion</th>
	</tr>
	<tr>
		<td><?php echo $row['count(aprendiz.id_apre)'] ?></td>
		<td><?php echo $row['fase_desercion'] ?></td>
	</tr>
</table>
<?php endforeach ?>
</center>
</body>
</html>