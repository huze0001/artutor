ISHU Pte. Ltd.
Project Artutor.sg

============================Genearl Information============================

Author:  HU Ze, TAN Chen, SONG Chonggang

Current Version: 1.0

Date: July  2013 - 

Timeline: 

	August: launch
	September: iteration and additional feature
	October:
	2014: Expansion and 2nd Project

================================File System===============================
css
js
fonts
images


assets: temp files, auto-generated

protected	
	components
	
	config
		console.php
		main.php:site map for the project, define parameters for modules, components etc
	
	controllers: actions to be performed on views
		SiteController.php
		SkillController.php
		UserController.php
	
	data: for sql database
	
	models: associate database with its own CRUD
		ContactForm.php:
		LoginForm.php
		Skill.php
		User.php

	runtime

	tests

	views: presentation files
		layouts: common templates for the site
		site
			page: stand-alone pages
		skill
		user

themes: theme files

index.php: entry point, define association with yii as well

README.md