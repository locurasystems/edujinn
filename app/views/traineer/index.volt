<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
    <link href="<?php echo $this->publicUrl->get('css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->publicUrl->get('css/custom.css') ?>">
    
    <link rel="stylesheet" type="text/css" href="<?php echo $this->publicUrl->get('css/bootstrap-markdown.min.css') ?>">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.19/angular.min.js"></script>
	<!-- // <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.13/angular-animate.js"></script> -->
	<script type="text/javascript" src="<?php echo $this->publicUrl->get('js/channel/ng-app/ng-channel.js') ?>"></script>
	<script type="text/javascript" src="<?php echo $this->publicUrl->get('js/ui-bootstrap.js') ?>"></script>


	</head>
	<body>
		{{content()}}
		<script type="text/javascript" src="<?php echo $this->publicUrl->get('js/bootstrap.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo $this->publicUrl->get('js/bootstrap-markdown.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->publicUrl->get('js/to-markdown.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo $this->publicUrl->get('js/custom.js'); ?>"></script>
		 <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
		 <link rel="stylesheet" type="text/css" href="<?php echo $this->publicUrl->get('css/bootstrap-theme.min.css') ?>">
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
