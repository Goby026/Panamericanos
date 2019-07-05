<?php
class Notificacion
{
	private $pdo;
    
    public $idnotificacion;
    public $fecha;
    public $idEvento;
    public $estado;
    public $titulo;
    public $descripcion;
    public $idtiponotificacion;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("CALL SP_GETNOTIFICACIONES()");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("CALL SP_GETNOTIFICACION(?)");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

    public function ObtenerPorUsuario($idUsuario)
    {
        try
        {
            $stm = $this->pdo
                ->prepare("CALL SP_GETNOTIFICACIONUSUARIO(?)");


            $stm->execute(array($idUsuario));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM alumnos WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Notificacion $data)
	{
		try 
		{
			$sql = "CALL SP_UPDATENOTIFICACION(?,?,?,?,?,?,?)";

			$this->pdo->prepare($sql)->execute(
				    array(
				        $data->idnotificacion,
                        $data->fecha,
                        $data->idEvento,
                        $data->estado,
                        $data->titulo,
                        $data->descripcion,
                        $data->idtiponotificacion
                    )
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Notificacion $data)
	{
		try
		{
		$sql = "CALL SP_REGNOTIFICACION(?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->fecha,
                    $data->idEvento,
                    $data->estado,
                    $data->titulo,
                    $data->descripcion,
                    $data->idtiponotificacion
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
