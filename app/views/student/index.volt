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
	<!-- // <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.13/angular-animate.js"></script> -->
	<?php echo $this->tag->javascriptInclude('public/js/channel/ng-app/ng-channel.js'); ?>
	<?php echo $this->tag->javascriptInclude('public/js/ui-bootstrap.js'); ?>


	</head>
	<body>
		{{content()}}
		{{javascript_include("public/js/bootstrap.min.js")}}
		{{javascript_include("public/js/bootstrap-markdown.js")}}
		{{javascript_include("public/js/to-markdown.js")}}
		{{javascript_include("public/js/custom.js")}}
		 <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
		 {{stylesheet_link("public/css/bootstrap-theme.min.css")}}
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
