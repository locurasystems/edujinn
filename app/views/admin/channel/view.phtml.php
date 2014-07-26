
<div class="col-md-3">
    <div class="panel panel-primary">
        <div class="panel-heading">Change Quota Limit
            <button type="button" class="close pull-right"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></div>
        <div class="panel-body">
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="band_width" class="col-sm-4 control-label">Bandwidth</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control input-sm" id="band_width" placeholder="BandWidth">
                    </div>
                    <span class="col-sm-3">0/0</span>
                </div>
                <div class="form-group">
                    <label for="space" class="col-sm-4 control-label">Space</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control input-sm" id="space" placeholder="Space">
                    </div>
                    <span class="col-sm-3">0/0</span>
                </div>

                <div class="form-group">
                    <label for="user" class="col-sm-4 control-label">No.of User</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control input-sm" id="user" placeholder="User">
                    </div>
                    <span class="col-sm-3">0/0</span>
                </div>
            </form>
        </div>
        <div class="panel-footer">
                <button class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok"></span> Save</button>
        </div>
    </div>
</div>
<div class="col-md-9" ng-app="admin">

    <?php $this->flash->output(); ?>


    <input id="csrf" type="hidden" name="<?php echo $this->security->getTokenKey();?>" value="<?php echo $this->security->getToken();?>" />
    <div id="no-more-tables"  ng-controller="channelController" ng-init="list()">

        <table class="col-md-12 table-bordered table-striped table-condensed ">
            <thead class="cf">
            <tr>
                <th>Sno</th>
                <th>Name</th>
                <th>Email</th>
                <th>Landing Name</th>
                <th>Action</th>
            </tr>
            </thead>    
            <tbody>
<!--                <tr ng-repeat="c in channels|limitTo: offset - channels.length | limitTo: limit">-->
                
                <tr ng-repeat="c in channels" ng-click="tr([[c.user.id]])">
                    <td data-title="Sno">[[c.user.id]]</td>
                    <td data-title="ChannelName">[[c.channel.name]]</td>
                    <td data-title="Email">[[c.user.email]]</td>
                    <td data-title="LandingPage">[[c.page.slug]]</td>
                    <td data-title="Action">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-md dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo $this->url->get('admin/page/create/'); ?>[[c.page.id]]">LandingPage</a></li>
                                <li><a href="<?php echo $this->url->get('admin/channel/delete/'); ?>[[c.channel.id]]">Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div  ng-init="paginate(dataLength);" class="pull-right">
            <pagination total-items="<?php echo $total_channel;?>" items-per-page="[[item_per_page]]" ng-model="currentPage" ng-change="pageChanged()"></pagination>
        </div>

    </div>
</div>
