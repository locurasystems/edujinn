<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
    <link href="<?php echo $this->url->get('public/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->url->get('public/css/custom.css') ?>">
    
    <link rel="stylesheet" type="text/css" href="<?php echo $this->url->get('public/css/bootstrap-markdown.min.css') ?>">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.19/angular.min.js"></script>
<?php echo $this->tag->javascriptInclude('public/js/ng-admin.js'); ?>
<?php echo $this->tag->javascriptInclude('public/js/ng-ctrl/channelCtrl.js'); ?>
<?php echo $this->tag->javascriptInclude('public/js/ui-bootstrap.js'); ?>

	</head>
	<body>
		<?php echo $this->getContent(); ?>
		<?php echo $this->tag->javascriptInclude('public/js/bootstrap.min.js'); ?>
		<?php echo $this->tag->javascriptInclude('public/js/bootstrap-markdown.js'); ?>
		<?php echo $this->tag->javascriptInclude('public/js/to-markdown.js'); ?>
		<?php echo $this->tag->javascriptInclude('public/js/custom.js'); ?>
		 <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
		 <?php echo $this->tag->stylesheetLink('public/css/bootstrap-theme.min.css'); ?>
		<?php if(isset($script)){
			echo $script;
			} ?>

		<script type="text/javascript">
		window.setTimeout(function(){
			$('.fadeout').fadeTo(500,0).slideUp(500,function(){
				$(this).remove();
			});
		},3000);
		<?php if(isset($scripts)){
			echo $scripts;
		} ?>
		</script>
		
	</body>

</html>
