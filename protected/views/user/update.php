<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

// Tutor Menu
if($model->type =='tutor')
	$this->menu=array(
		// array('label'=>'List User', 'url'=>array('index')),
		// array('label'=>'Create User', 'url'=>array('create')),
		array('label'=>'My Profile', 'url'=>array('/user','view'=>Yii::app()->user->id)),
		array('label'=>'Update Profile', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Add Skill', 'url'=>array('skill/create')), 
		array('label'=>'Manage My Request', 'url'=>array('request/index')),
		// array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		// array('label'=>'Manage User', 'url'=>array('admin')),
	);
else if ($model->type=='user')
	$this->menu=array(
		// array('label'=>'List User', 'url'=>array('index')),
		// array('label'=>'Create User', 'url'=>array('create')),
		array('label'=>'Update Profile', 'url'=>array('update', 'id'=>$model->id)),
		// array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		// array('label'=>'Manage User', 'url'=>array('admin')),
	);
?>


<h1>Update User <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'type'=>$model->type)); ?>