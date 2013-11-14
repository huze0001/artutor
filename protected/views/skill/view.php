<?php
/* @var $this SkillController */
/* @var $model Skill */

$this->breadcrumbs=array(
	'Skills'=>array('index'),
	$model->id,
);

if(!Yii::app()->user->isGuest && Yii::app()->user->id== $model->user_id){
	$this->menu=array(
		// array('label'=>'List Skill', 'url'=>array('index')),
		array('label'=>'My Profile', 'url'=>array('/user','view'=>Yii::app()->user->id)),
		// array('/user', 'view'=>Yii::app()->user->id)
		array('label'=>'Create Skill', 'url'=>array('create')),
		array('label'=>'Update Skill', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Delete Skill', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		// array('label'=>'Manage Skill', 'url'=>array('admin')),
	);
}
?>

<h1>View Skill #<?php echo $model->id; ?></h1>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		// 'user_id',
		'skill',
		'year_experience',
		'description',
		'certificate',
		'remark',
	),
)); ?>
