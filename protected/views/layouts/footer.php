<div class="divider-orange"></div>



<div class="row">
	<h1 class="col-md-4 text-left"><?php echo CHtml::link('ARTUTOR.SG',array('site/')); ?></h1>
	<div class="col-md-8 text-right">
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label for="inputEmail" class="col-md-8 control-label">Register your email for news and special offers:</label>
				<div class="col-md-4">
					<input type="password" class="form-control" id="inputEmail" placeholder="Email">
				</div>
			</div>
		</form>
	</div>
</div>

<div class="row text-left">
	<div class="col-md-3">
		<h2>Catalogue</h2>
		Instrument<br>
		Vocal Training<br>
		Dance<br>
		Others<br>
	</div>
	<div class="col-md-2">
		<h2>Service</h2>
		Find a tutor<br>
		Search for a tutor<br>
		<?php echo CHtml::link('Become a tutor',array('site/page?view=tutor-registration-s1')); ?><br>
		Post a request<br>
	</div>
	<div class="col-md-2">
		<h2>About</h2>
		<?php echo CHtml::link('About ISHU',array('site/page?view=about')); ?><br>
		About artutor.sg<br>
		Partnership<br>
	</div>
	<div class="col-md-2">
		<h2>Media</h2>
		Media Coverage<br>
		News<br>
		Sitemap</br>
		FAQ</br>
	</div>
	<div class="col-md- text-left">
		<h2>CONTACT DETAILS</h2>
		Tel: (65) 6666 6666<br>
		Fax: (65) 6666 6666<br>
		Email: enquiry@artutor.sg<br>
	</div>		
</div>					

<div id="footer-bottomrow">
	<div class="row">
		<div class="col-md-4 text-left">@2013  ISHU Ptd Ltd. All rights reseved</div>
		<div class="col-md-4 text-middle">Terms of Use  |  Privacy Policy  |  Site Map  |  FAQ</div>
		<div class="col-md-4 text-right">Follow us on:
			<div class="footer-social" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/css/images/social/linkedin.png);"></div>
			<div class="footer-social" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/css/images/social/googleplus.png);"></div>
			<div class="footer-social" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/css/images/social/twitter.png);"></div>
			<div class="footer-social" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/css/images/social/facebook.png);"></div>
		</div>
	</div>
</div>	