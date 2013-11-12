<?php
/* @var $this RequestController */
/* @var $model Request */

$this->breadcrumbs=array(
	'Requests'=>array('index'),
	$model->id,
);

// $this->menu=array(
// 	array('label'=>'List Request', 'url'=>array('index')),
// 	array('label'=>'Create Request', 'url'=>array('create')),
// 	array('label'=>'Update Request', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Delete Request', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage Request', 'url'=>array('admin')),
// );
?>

<h1>View Request #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		// 'id',
		'requester_id',
		'tutor_id',
		'skill_id',
		'hour_per_week',
		'hourly_rate',
		'time_request',
		// 'time_confirm',
		// 'time_cancel',
		// 'time_reject',
		// 'time_expire',
		// 'remark',
		// 'status',
	),
)); ?>


		