<?php
/* @var $this RequestController */
/* @var $model Request */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'requester_id'); ?>
		<?php echo $form->textField($model,'requester_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tutor_id'); ?>
		<?php echo $form->textField($model,'tutor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'skill_id'); ?>
		<?php echo $form->textField($model,'skill_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hour_per_week'); ?>
		<?php echo $form->textField($model,'hour_per_week'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hourly_rate'); ?>
		<?php echo $form->textField($model,'hourly_rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_request'); ?>
		<?php echo $form->textField($model,'time_request'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_confirm'); ?>
		<?php echo $form->textField($model,'time_confirm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_cancel'); ?>
		<?php echo $form->textField($model,'time_cancel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_reject'); ?>
		<?php echo $form->textField($model,'time_reject'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_expire'); ?>
		<?php echo $form->textField($model,'time_expire'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remark'); ?>
		<?php echo $form->textField($model,'remark',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->