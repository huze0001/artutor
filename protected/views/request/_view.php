<?php
/* @var $this RequestController */
/* @var $data Request */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requester_id')); ?>:</b>
	<?php echo CHtml::encode($data->requester_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tutor_id')); ?>:</b>
	<?php echo CHtml::encode($data->tutor_id); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('time_confirm')); ?>:</b>
	<?php echo CHtml::encode($data->time_confirm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_cancel')); ?>:</b>
	<?php echo CHtml::encode($data->time_cancel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_reject')); ?>:</b>
	<?php echo CHtml::encode($data->time_reject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_expire')); ?>:</b>
	<?php echo CHtml::encode($data->time_expire); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remark')); ?>:</b>
	<?php echo CHtml::encode($data->remark); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>