<?php
/* @var $this SiteController */

$this->layout='//layouts/column2-rightheavy';
$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);

$this->menu=array(
	array('label'=>'About ISHU', 'url'=>array('')),
	array('label'=>'About Artutor.sg', 'url'=>array('create')),
	array('label'=>'View Skill', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Skill', 'url'=>array('admin')),
);

?>

<h1>About</h1>

<div id="content-rightheading" class="title page-heading">			
	<!-- <img src="../resources/banner1.png" style="width:100%; margin-bottom:30px;"> -->
	<div class="clear"></div>
	nI MEI A 
</div>

<div id="content-rightcontent">

	<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam 
		pellentesque ipsum a suscipit dapibus. Maecenas placerat turpis iaculis 
		tortor malesuada, quis aliquet metus consectetur. Sed vel quam neque. 
		Vivamus tincidunt augue ante. Duis blandit laoreet mattis. Fusce leo nibh,
		venenatis at dictum in, elementum in arcu. Sed volutpat nec dui vitae 
		luctus. Sed tempus imperdiet massa, et consectetur ante pharetra a. 
		Phasellus nec egestas ligula. Quisque aliquet, ligula a tincidunt pretium, 
		nisl odio dapibus velit, luctus tincidunt quam velit quis sem. Maecenas 
		congue ac risus eget tincidunt.
	</p>
	<p>
		Quisque euismod venenatis justo, et posuere sem vulputate id. 
		Mauris commodo tellus ac pulvinar interdum. Vestibulum convallis 
		nibh felis, accumsan sagittis ante vehicula vel. Morbi congue nec ante 
		ac laoreet. Suspendisse potenti. Fusce a eros nisl. Donec vitae venenatis
		diam, at suscipit lorem. Suspendisse vitae sodales lectus. Ut hendrerit 
		nisi est. Nullam vehicula semper velit. Nullam sapien ligula, laoreet eu 
		elit in, porttitor rutrum elit. Vivamus et ante cursus turpis luctus posuere 
		vel et metus. Maecenas at lacus risus. Aliquam dapibus nisl tortor, sed 
		viverra neque pulvinar eu. Vestibulum in est varius, pulvinar diam a, 
		euismod libero.
	</p>
</div>




