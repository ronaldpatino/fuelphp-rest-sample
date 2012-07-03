<?php
use Orm\Model;

class Model_Picture extends Model
{
	protected static $_properties = array(
		'id',
		'imagen',
		'width',
		'height',
		'dimension_id',
		'seccion_id',
		'article_id',
		'estado',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('imagen', 'Imagen', 'required|max_length[255]');
		$val->add_field('width', 'Width', 'required|max_length[5]');
		$val->add_field('height', 'Height', 'required|max_length[5]');
		$val->add_field('dimension_id', 'Dimension Id', 'required|valid_string[numeric]');
		$val->add_field('seccion_id', 'Seccion Id', 'required|valid_string[numeric]');
		$val->add_field('article_id', 'Article Id', 'required|valid_string[numeric]');
		$val->add_field('estado', 'Estado', 'required|valid_string[numeric]');

		return $val;
	}

}
