<?php
/* @var $this RequestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Requests',
);

$this->menu=array(
	array('label'=>'My Profile', 'url'=>array('/user','view'=>Yii::app()->user->id)),
	array('label'=>'Update Profile', 'url'=>array('user/update', 'id'=>Yii::app()->user->id)),
	array('label'=>'Skill Management', 'url'=>array('skill/create')), 
	array('label'=>'Manage My Request', 'url'=>array('index')),
	// array('label'=>'Create Request', 'url'=>array('create')),
	// array('label'=>'Manage Request', 'url'=>array('admin')),
);



?>



<?PHP
	$user = User::model()->findByPk(Yii::app()->user->id);
	if($user->requestCount>=1){ 
		?>
		<h1>
			<?php echo $user->requestCount>1 ? $user->requestCount.' requests' : 'One request'; ?>
		</h1>
		<?PHP
	}
?>



<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
