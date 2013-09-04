<?php foreach($requests as $request): ?>


	<div class="request">
		<div class="author">
			<?php echo CHtml::encode($request->requester->name); ?>:
		</div>

		<div class="time">
			on <?php echo date('F j, Y \a\t h:i a',strtotime($request->time_request)); ?>
		</div>

		<div class="content">
			skill requested is:<?php echo CHtml::encode($request->skill_id); ?> |
			hour per week is:<?php echo CHtml::encode($request->hour_per_week); ?> |
			hourly rate is:<?php echo CHtml::encode($request->hourly_rate); ?>
		</div> 


		<hr>
	</div><!-- comment -->

<?php endforeach; ?>