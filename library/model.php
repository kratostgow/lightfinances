<?php
abstract class Model
{
    public $table = null;

    public function insert($data)
    {
        return Db::insert($this->table, $data);
    }

    public function update($data, $where = null, $whereBind = null)
    {
        return Db::update($this->table, $data, $where, $whereBind);
    }

    public function delete($where = null, $whereBind = null)
    {
        return Db::delete($this->table, $where, $whereBind);
    }

    public static function load($model)
	{
		/**
		* Cria um model
		* Name:     Model.validate
		* Purpose:  Cria um objeto tipo Model de acordo com o nome da classe que extende essa
		*
		* @author Paulo Juchem
		*
		* @return model@self
		*/
		if (file_exists("library/models/{$model}.php")) {
			require_once "library/models/{$model}.php";
			return new $model;
		} else {
			die("404 Model <i>{$model}</i> não encontrado");
		}
	}

    public function __construct()
	{
		$this->table = get_called_class();
	}
}
