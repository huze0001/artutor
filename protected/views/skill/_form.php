<?php
/* @var $this SkillController */
/* @var $model Skill */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'skill-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<?PHP $model->user_id = Yii::app()->user->id;?>
    <?php echo $form->hiddenField($model,'user_id',array('type'=>"hidden", 'size'=>2,'maxlength'=>2)); ?>


<!-- 
	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>
 -->

	<div class="row">
		<?php echo $form->labelEx($model,'skill'); ?>
		<?php echo $form->dropDownList($model,'skill', $model->getTypeOptions()); ?>
		<?php echo $form->error($model,'skill'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year_experience'); ?>
		<?php echo $form->textField($model,'year_experience'); ?>
		<?php echo $form->error($model,'year_experience'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'certificate'); ?>
		<?php echo $form->textField($model,'certificate',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'certificate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remark'); ?>
		<?php echo $form->textField($model,'remark',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'remark'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->