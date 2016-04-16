<?php

class Paciente extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'paciente';
	protected $primaryKey = 'id';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function perfil()
	{
		return $this->BelongsTo('Perfil');
	}

	public function eps()
	{
		return $this->BelongsTo('Eps');
	}

	public function persona()
    {
        return $this->hasOne('Persona', 'id_persona', 'id');
    }
}