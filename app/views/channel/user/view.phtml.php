<?php echo $this->tag->javascriptInclude('public/js/channel/ng-ctrl/traineerCtrl.js'); ?>
<div class="col-md-9" ng-app="channel">
<?php $this->flash->output(); ?>
<input id="csrf" type="hidden" name="<?php echo $this->security->getTokenKey();?>" value="<?php echo $this->security->getToken();?>" />
<div id="no-more-tables" ng-controller="traineerController" ng-init="list()">
<table class="col-md-12 table-bordered table-striped table-condensed cf"> 
	<thead class="cf">
		<tr>
			<th>Sno</th>
			<th>Name</th>
			<th>UserName</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	
		<tr ng-repeat="t in traineer">
			<td data-title="Sno"></td>
			<td data-title="Name">[[t.user.firstName]]</td>
			<td data-title="UserName">[[t.user.userName]]</td>
			<td data-title="Email">[[t.user.email]]</td>
			<td data-title="Action">
				<div class="btn-group">
					<button  class="btn btn-primary btn-md dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Edit</a></li>
						<li><a href="<?php echo $this->url->get('channel/user/delete/'); ?>[[t.traineer.id]]">Delete</a></li>
					</ul>
				</div>
			</td>
		</tr>
	</tbody>
</table>
<div  ng-init="paginate(dataLength);" class="pull-right">
            <pagination total-items="<?php echo $total;?>" items-per-page="[[item_per_page]]" ng-model="currentPage" ng-change="pageChanged()"></pagination>
</div>
</div>