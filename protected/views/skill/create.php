<?php
/* @var $this SkillController */
/* @var $model Skill */

$this->breadcrumbs=array(
	'Skills'=>array('index'),
	'Create',
);

$this->menu=array(
		array('label'=>'My Profile', 'url'=>array('/user','view'=>Yii::app()->user->id)),
		array('label'=>'Update Profile', 'url'=>array('user/update', 'id'=>Yii::app()->user->id)),
		array('label'=>'Skill Management', 'url'=>array('create')), 
		array('label'=>'Manage My Request', 'url'=>array('request/index')),
);
?>

<h1>Create Skill</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>