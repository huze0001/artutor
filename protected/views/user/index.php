<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
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


<h1>Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
