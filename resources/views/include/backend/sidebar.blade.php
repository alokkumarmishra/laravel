<?php $profile=Common::getAdminProfile(Auth::guard('admin')->user()->id);?>
  <?php  $path = Route::getCurrentRoute()->getPath();
  $path=explode("/", $path);
  if(isset($path[1]))
  {
    $path=trim($path[1]);
  }
  else
  {
    $path=null;
  }
  
 ?>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{SITEURL}}data/images/{{$profile->profile_image}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{$profile->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form" style="display: none;">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="" style="display: none;">
          <a href="admin/example">
            <i class="fa fa-dashboard"></i> <span>Example</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>        
        <li class="active">
          <a href="admin/dashboard">
            <i class="fa fa-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">Main</small>
            </span>
          </a>
        </li>
        <li class="treeview" >
            <a href="#">
              <i class="fa fa-certificate"></i> <span>Category Management</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="admin/category/add"><i class="fa fa-circle-o"></i> Add New Category</a></li>            
              <li><a href="admin/category/view"><i class="fa fa-circle-o"></i> View/Edit Category</a></li>
            </ul>
          </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-product-hunt"></i> <span>Product Management</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="admin/product/add"><i class="fa fa-circle-o"></i> Add New Product</a></li>            
              <li><a href="admin/product/view"><i class="fa fa-circle-o"></i> View/Edit Product</a></li>
            </ul>
        </li>
        <li class="active">
            <a href="admin/enquiry">
              <i class="fa fa-envelope"></i> <span>Enquiry Management</span>
              <span class="pull-right-container">               
              </span>
            </a>
          </li>

        <li class="treeview <?php if($path=='edit-homepage-text'){ echo 'active'; }?>" >
          <a href="#">
            <i class="fa fa-share"></i> <span>Homepage Text</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin/add-homepage-text"><i class="fa fa-circle-o"></i> Add Homepage Text</a></li>            
            <li><a href="admin/view-homepage-text"><i class="fa fa-circle-o"></i> View/Edit Homepage Text</a></li>
          </ul>
        </li>
        <li class="treeview" >
          <a href="#">
            <i class="fa fa-share"></i> <span>Portfolio Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin/add-portfolio"><i class="fa fa-circle-o"></i> Add Portfolio</a></li>            
            <li><a href="admin/view-portfolio"><i class="fa fa-circle-o"></i> View/Edit Portfolio</a></li>
          </ul>
        </li>
       



<!-- example of multi level menus -->
        <li class="treeview" style="display: none;">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>