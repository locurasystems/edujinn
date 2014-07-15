    <!-- Static navbar -->
    <div class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">EduJINN</a>
        </div>
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo $this->url->get('channel/') ?>"><?php echo $this->lang->T('home'); ?></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->lang->T('users'); ?> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo $this->url->get('channel/user/create'); ?>" ><?php echo $this->lang->T('adduser'); ?></a></li>
                <li><a href="<?php echo $this->url->get('channel/user/view') ?>" ><?php echo $this->lang->T('viewusers'); ?></a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->lang->T('student'); ?> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo $this->url->get('channel/student/create'); ?>" ><?php echo $this->lang->T('addstudent'); ?></a></li>
                <li><a href="<?php echo $this->url->get('channel/student/view') ?>" ><?php echo $this->lang->T('viewstudents'); ?></a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $this->url->get('channel/course/create'); ?>">CreateCourse</a></li>
                <li><a href="<?php echo $this->url->get('channel/course/view'); ?>">ViewCourse</a></li>
              </ul>
            </li>
           
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default"><?php echo $this->lang->T('search'); ?></button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <?php if($this->auth->getIdentity()): ?>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->auth->getName(); ?><span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                      <li><a href="<?php echo $this->url->get('session/logout') ?>"><?php echo $this->lang->T('signout'); ?></a></li>
                  </ul>
              </li>
              <?php else: ?>
                   <li><a href="<?php echo $this->url->get('session/signup'); ?>">SignUp</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign In <span class="caret"></span></a>
                 <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                        <li>
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form" role="form" method="post" action="<?php echo $this->url->get('session/signin'); ?>">
                                    <div class="form-group">
                                       <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                       <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Email address" name="user_name" required>
                                    </div>
                                    <div class="form-group">
                                       <label class="sr-only" for="exampleInputPassword2">Password</label>
                                       <input type="password" class="form-control" id="exampleInputPassword2" name="password" placeholder="Password" required>
                                    </div>
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" name="remember" value='1'> Remember me
                                       </label>
                                    </div>
                                    <input type="hidden" name="<?php echo $this->security->getTokenKey(); ?>" value="<?php echo $this->security->getToken(); ?>">
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-success btn-block">Sign in</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </li>
                    </ul>
                </li>
             
            <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
