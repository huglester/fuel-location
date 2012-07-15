<?php

namespace Cities;

class Model_CountryState extends \Orm\Model
{
	protected static $_table_name = 'country_states';

	protected static $_properties = array(
		'id',
		'code',
		'country_code',
		'country_id',
		'name',
	);

	protected static $_has_many = array(
		'cities' => array(
			'model_to' => 'Model_CountryStateCity',
			'key_from' => 'id',
			'key_to'   => 'state_id',
		),
	);

	protected static $_has_one = array(
		'country' => array(
			'model_to' => 'Model_Country',
			'key_from' => 'country_id',
			'key_to'   => 'id',
		),
	);
}