<?php
/* @var $this RequestController */
/* @var $data Request */
?>

<div class="view">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
		// 'id'=>'request-form',
		'enableAjaxValidation'=>false,
	)); ?> 

<!-- 	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br /> -->


	<b><?php echo CHtml::encode($data->getAttributeLabel('requester_id')); ?>:</b>
	<?php echo CHtml::encode($data->requester_id); ?>
	<br />



	<b><?php echo CHtml::encode($data->getAttributeLabel('skill_id')); ?>:</b>
	<?php echo CHtml::encode($data->skill_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hour_per_week')); ?>:</b>
	<?php echo CHtml::encode($data->hour_per_week); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hourly_rate')); ?>:</b>
	<?php echo CHtml::encode($data->hourly_rate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_request')); ?>:</b>
	<?php echo CHtml::encode($data->time_request); ?>
	<br />


<!-- 
	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br /> -->





	<hr>
	<?php echo CHtml::submitButton("I want"); ?>
	<?php echo CHtml::submitButton("I dont want"); ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>


<!--   $sql = "SELECT * FROM tbl_project_user_assignment WHERE project_
   id=:projectId AND user_id=:userId AND role=:role";
   $command = Yii::app()->db->createCommand($sql);
   $command->bindValue(":projectId", $this->id, PDO::PARAM_INT);
   $command->bindValue(":userId", Yii::app()->user->getId(), PDO::PARAM_
   INT);
   $command->bindValue(":role", $role, PDO::PARAM_STR);
   return $command->execute()==1; -->


<?php $this->endWidget(); ?> 

</div>

</div>