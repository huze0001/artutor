<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();


	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',
                'users'=>array('@'),
                        ),
			array('allow',  // allow all users to create account
				'controllers'=>array('user'),
				'actions'=>array('create','createTutor','admin','view'),
				'users'=>array('*'),
			),
			array('allow',  // allow registered users to create skill
				'controllers'=>array('skill'),
				'actions'=>array('view'),
				'users'=>array('*'),
			),
			array('allow',  // allow registered users to create skill
				'controllers'=>array('skill'),
				'actions'=>array('create'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'controllers'=>array('user','skill'),
				'actions'=>array('delete','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'index' actions
				'controllers'=>array('user','skill'),
				'actions'=>array('index'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'controllers'=>array('user','skill'),
				'users'=>array('*'),
			),
		);
	}


}