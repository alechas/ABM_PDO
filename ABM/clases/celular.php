<?php
class celular
{
	public $id;
 	public $marca;
  	public $modelo;
  	public $fechaFabricacion;
  	public $so;
  	public $cantSim;
  	public $liberado;


	public static function Borrarcelular($id)
	 {

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				delete 
				from celulares 				
				WHERE id=:id");	
				$consulta->bindValue(':id',$id, PDO::PARAM_INT);		
				$consulta->execute();
				return $consulta->rowCount();

	 }
  
	
  	public function mostrarDatos()
	{
	  	return "Metodo mostar:".$this->marca."  ".$this->modelo."  ".$this->fechaFabricacion."  ".$this->so."  ".$this->cantSim."  ".$this->liberado;
	}

	
	 public function InsertarElcelular()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				var_dump($this);
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into celulares (marca,modelo,fechaFabricacion,so,cantSim,liberado)values('$this->marca','$this->modelo','$this->fechaFabricacion','$this->so','$this->cantSim','$this->liberado')");
				$consulta->execute();
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
				

	 }
	 public function InsertarElcelularParametros()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into celulares (marca,modelo,fechaFabricacion,so,cantSim,liberado)values(:marca,:modelo,:fechaFabricacion,:so,:cantSim,:liberado)");
				$consulta->bindValue(':marca',$this->marca, PDO::PARAM_INT);
				$consulta->bindValue(':modelo',$this->modelo, PDO::PARAM_INT);
				$consulta->bindValue(':fechaFabricacion',$this->fechaFabricacion, PDO::PARAM_INT);
				$consulta->bindValue(':so',$this->so, PDO::PARAM_INT);
				$consulta->bindValue(':cantSim',$this->cantSim, PDO::PARAM_INT);
				$consulta->bindValue(':liberado',$this->liberado, PDO::PARAM_INT);

				$consulta->execute();		
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }
	 


	public static function TraerTodosLoscelulares()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
		$consulta=$objetoAccesoDato->RetornarConsulta("select id, marca,modelo,fechaFabricacion,so,cantSim,liberado from celulares");
		$consulta->execute();

		return $consulta->fetchall(PDO::FETCH_CLASS,"celular");
	}

<?php
class Celular
{
	public $id;
 	public $marca;
  	public $modelo;
  	public $fechaFabricacion;
  	public $so;
  	public $cantSim;
  	public $liberado;


	public static function Borrarcelular($id)
	 {

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				delete 
				from celulares 				
				WHERE id=:id");	
				$consulta->bindValue(':id',$id, PDO::PARAM_INT);		
				$consulta->execute();
				return $consulta->rowCount();

	 }
  
	
  	public function mostrarDatos()
	{
	  	return "Metodo mostar:".$this->marca."  ".$this->modelo."  ".$this->fechaFabricacion."  ".$this->so."  ".$this->cantSim."  ".$this->liberado;
	}

	
	 public function InsertarElcelular()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				var_dump($this);
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into celulares (marca,modelo,fechaFabricacion,so,cantSim,liberado)values('$this->marca','$this->modelo','$this->fechaFabricacion','$this->so','$this->cantSim','$this->liberado')");
				$consulta->execute();
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
				

	 }
	 public function InsertarElcelularParametros()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into celulares (marca,modelo,fechaFabricacion,so,cantSim,liberado)values(:marca,:modelo,:fechaFabricacion,:so,:cantSim,:liberado)");
				$consulta->bindValue(':marca',$this->marca, PDO::PARAM_INT);
				$consulta->bindValue(':modelo',$this->modelo, PDO::PARAM_INT);
				$consulta->bindValue(':fechaFabricacion',$this->fechaFabricacion, PDO::PARAM_INT);
				$consulta->bindValue(':so',$this->so, PDO::PARAM_INT);
				$consulta->bindValue(':cantSim',$this->cantSim, PDO::PARAM_INT);
				$consulta->bindValue(':liberado',$this->liberado, PDO::PARAM_INT);

				$consulta->execute();		
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }
	 


	public static function TraerTodosLoscelulares()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
		$consulta=$objetoAccesoDato->RetornarConsulta("select id, marca,modelo,fechaFabricacion,so,cantSim,liberado from celulares");
		$consulta->execute();

		return $consulta->fetchall(PDO::FETCH_CLASS,"celular");
	}
	
	public static function ModificarPersona($id)
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 

			$consulta =$objetoAccesoDato->RetornarConsulta("CALL ModificarPersona(:id,:marca,:modelo,:fechaFabricacion,:so,:cantSim,:liberado)");
			$consulta->bindValue(':marca',$this->marca, PDO::PARAM_INT);
			$consulta->bindValue(':modelo',$this->modelo, PDO::PARAM_INT);
			$consulta->bindValue(':fechaFabricacion',$this->fechaFabricacion, PDO::PARAM_INT);
			$consulta->bindValue(':so',$this->so, PDO::PARAM_INT);
			$consulta->bindValue(':cantSim',$this->cantSim, PDO::PARAM_INT);
			$consulta->bindValue(':liberado',$this->liberado, PDO::PARAM_INT);

			return $consulta->execute();
	}

}