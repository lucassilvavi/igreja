<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
	/**
	 * Nome da tabela.
	 *
	 * @var string
	 */
	protected $table = 'tb_nome';
	
	/**
	 * Campo da chave primaria
	 *
	 * @var string
	 */
	protected $primaryKey = 'key';

	protected $dates = [];
	
	public $timestamps = false;
	
	public $sequence = 'sq_name';
	
	protected $fillable = [];
	

}