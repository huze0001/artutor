<?php
/* @var $this RequestController */
/* @var $model Request */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'request-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<!-- 
	<div class="row">
		<?php echo $form->labelEx($model,'requester_id'); ?>
		<?php echo $form->textField($model,'requester_id'); ?>
		<?php echo $form->error($model,'requester_id'); ?>
	</div> -->

	<?PHP $model->requester_id = Yii::app()->user->id; ?>
    <?php echo $form->hiddenField($model,'requester_id',array('type'=>"hidden", 'size'=>2,'maxlength'=>2)); ?>



<!-- 	<div class="row">
		<?php echo $form->labelEx($model,'tutor_id'); ?>
		<?php echo $form->textField($model,'tutor_id'); ?>
		<?php echo $form->error($model,'tutor_id'); ?>
	</div>
 -->
	<?PHP $model->tutor_id = $request_tutor; ?>
    <?php echo $form->hiddenField($model,'tutor_id',array('type'=>"hidden", 'size'=>2,'maxlength'=>2)); ?>



	<div class="row">
		<?php echo $form->labelEx($model,'skill_id'); ?>
<?php echo  $model->tutor; ?>
		<?php echo $form->error($model,'skill_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hour_per_week'); ?>
		<?php echo $form->textField($model,'hour_per_week'); ?>
		<?php echo $form->error($model,'hour_per_week'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hourly_rate'); ?>
		<?php echo $form->textField($model,'hourly_rate'); ?>
		<?php echo $form->error($model,'hourly_rate'); ?>
	</div>
<!-- 
	<div class="row">
		<?php echo $form->labelEx($model,'time_request'); ?>
		<?php echo $form->textField($model,'time_request'); ?>
		<?php echo $form->error($model,'time_request'); ?>
	</div> -->
<!-- 
	<div class="row">
		<?php echo $form->labelEx($model,'time_confirm'); ?>
		<?php echo $form->textField($model,'time_confirm'); ?>
		<?php echo $form->error($model,'time_confirm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_cancel'); ?>
		<?php echo $form->textField($model,'time_cancel'); ?>
		<?php echo $form->error($model,'time_cancel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_reject'); ?>
		<?php echo $form->textField($model,'time_reject'); ?>
		<?php echo $form->error($model,'time_reject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_expire'); ?>
		<?php echo $form->textField($model,'time_expire'); ?>
		<?php echo $form->error($model,'time_expire'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remark'); ?>
		<?php echo $form->textField($model,'remark',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'remark'); ?>
	</div> -->

<!-- 	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
 -->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->