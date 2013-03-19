<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Simple widget to display breadcrumbs
 * 
 * @author		Jamie Blacker
 */
class Widget_Breadcrumbs extends Widgets
{

	/**
	 * The translations for the widget title
	 *
	 * @var array
	 */
	public $title = array(
		'en' => 'Breadcrumbs',
	);

	/**
	 * The translations for the widget description
	 *
	 * @var array
	 */
	public $description = array(
		'en' => 'Simple widget to display breadcrumbs',
	);

	/**
	 * The author of the widget
	 *
	 * @var string
	 */
	public $author = 'Jamie Blacker';

	/**
	 * The author's website.
	 * 
	 * @var string 
	 */
	public $website = 'http://amitywebsolutions.co.uk/';

	/**
	 * The version of the widget
	 *
	 * @var string
	 */
	public $version = '1.0.0';
	
	/**
	 * The fields for customizing the options of the widget.
	 *
	 * @var array 
	 */
	public $fields = array(
		array(
			'field' => 'separator',
			'label' => 'Separator',
			'rules' => 'required'
		)
	);

	/**
	 * The main function of the widget.
	 *
	 * @param array $options The options for the Breadcrumbs widget.
	 * @return array 
	 */
	public function run($options)
	{
		return $options;
	}

}