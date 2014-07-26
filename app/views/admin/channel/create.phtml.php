<?php $this->flash->output(); ?>
<div class="row-fluid">
<div class="col-md-2">
</div>
<div class="col-md-9">
<form name="channel" method="post" action="<?php echo $this->url->get('admin/channel/create'); ?>" class="form-horizontal">
	<div class="form-group">
	<label class="col-sm-2 control-label" for="ch_name">ChannelName</label>
		<div class="col-sm-4">
			<input type="text" name='ch_name' id="ch_name" placeholder='Channel Name' value='bhoopal' class="form-control" />
		</div>
		
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" for="slug_name">Landing Name</label>
		<div class="col-sm-4">
			<input type="text" name='slug_name' id="slug_name" placeholder='SlugName' value='last' class="form-control"/>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" for="ch_email">Email</label>
		<div class="col-sm-4">
			<input type="text" name='ch_email' id="ch_email" placeholder="Email" value='ram@gmail.com' class="form-control" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" for="ch_password">Password</label>
		<div class="col-sm-4">
			<input type="password" name='ch_password' id="ch_password" placeholder="Password" value='123' class="form-control" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" for="ch_conf_password">ConfirmPassword</label>
		<div class="col-sm-4">
			<input type="password" name='ch_conf_password' id="ch_conf_password" placeholder="ConfirmPassword" value='123' class="form-control"/>
		</div>
	</div>
	<input type='hidden' name="<?php echo $this->security->getTokenKey(); ?>" value="<?php echo $this->security->getToken(); ?>">
	<div class="form-group">
		   	<div class="col-sm-offset-2 col-sm-4">
			<button type="submit" class="btn btn-default btn-block">AddChannel</button>
		</div>
	</div>
</form>
</div>
</div>