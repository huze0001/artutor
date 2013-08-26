<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->name,
);


// Tutor Menu
if($model->type =='tutor')
	$this->menu=array(
		// array('label'=>'List User', 'url'=>array('index')),
		// array('label'=>'Create User', 'url'=>array('create')),
		array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Add Skill', 'url'=>array('skill/create')), 
		// array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		// array('label'=>'Manage User', 'url'=>array('admin')),
	);
else if ($model->type=='user')
	$this->menu=array(
		// array('label'=>'List User', 'url'=>array('index')),
		// array('label'=>'Create User', 'url'=>array('create')),
		array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
		// array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		// array('label'=>'Manage User', 'url'=>array('admin')),
	);
?>




<h1>Your Profile</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'email',
		'password',
		'name',
		'mobile',
		'type',
		array(
			'name'=>'gender',
			'value'=>CHtml::encode($model->getGenderText())
			),
		// 'time_create',
		// 'last_login_time',
		// 'rating',
		// 'payment_ref',
		// 'auth_type',
		// 'photo',
		// 'introduction',
		// 'remark',
	),
)); ?>



<br/>
   <h1>Skills </h1>
   <?php  $this->widget('zii.widgets.CListView', array(
     'dataProvider'=>$skillDataProvider,
     'itemView'=>'/skill/_view',
)); ?>


