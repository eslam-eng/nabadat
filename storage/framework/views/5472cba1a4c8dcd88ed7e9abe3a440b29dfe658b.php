<div class="sidebar-wrapper">
	<div>
		<div class="logo-wrapper">
			<a href="<?php echo e(route('/')); ?>"><img class="img-fluid for-light" src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" alt=""><img class="img-fluid for-dark" src="<?php echo e(asset('assets/images/logo/logo_dark.png')); ?>" alt=""></a>
			<div class="back-btn"><i class="fa fa-angle-left"></i></div>
			<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
		</div>
		<div class="logo-icon-wrapper"><a href="<?php echo e(route('/')); ?>"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a></div>
		<nav class="sidebar-main">
			<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
			<div id="sidebar-menu">
				<ul class="sidebar-links" id="simple-bar">
					<li class="back-btn">
						<a href="<?php echo e(route('/')); ?>"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a>
						<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
					</li>
					<li class="sidebar-main-title">
						<div>
							<h6 class="lan-1"><?php echo e(trans('lang.General')); ?> </h6>
                     		<p class="lan-2"><?php echo e(trans('lang.Dashboards,widgets & layout.')); ?></p>
						</div>
					</li>
					<li class="sidebar-list">
						<label class="badge badge-success">2</label><a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/dashboard' ? 'active' : ''); ?>" href="#"><i data-feather="home"></i><span class="lan-3"><?php echo e(trans('lang.Dashboards')); ?></span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/dashboard' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/dashboard' ? 'block;' : 'none;'); ?>">
							<li><a class="lan-4 <?php echo e(Route::currentRouteName()=='index' ? 'active' : ''); ?>" href="<?php echo e(route('index')); ?>"><?php echo e(trans('lang.Default')); ?></a></li>
                     		<li><a class="lan-5 <?php echo e(Route::currentRouteName()=='dashboard-02' ? 'active' : ''); ?>" href="<?php echo e(route('dashboard-02')); ?>"><?php echo e(trans('lang.Ecommerce')); ?></a></li>
						</ul>
					</li>
					<li class="sidebar-list">
							<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/widgets' ? 'active' : ''); ?>" href="#"><i data-feather="airplay"></i><span class="lan-6"><?php echo e(trans('lang.Widgets')); ?></span>
								<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/widgets' ? 'down' : 'right'); ?>"></i></div>
							</a>
							<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/widgets' ? 'block;' : 'none;'); ?>">
			                    
			                    
		                  	</ul>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/page-layouts' ? 'active' : ''); ?>" href="#"><i data-feather="layout"></i>
							<span class="lan-7"><?php echo e(trans('lang.Page layout')); ?></span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/page-layouts' ? 'down' : 'right'); ?>"></i></div>
						</a>
	                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/page-layouts' ? 'block;' : 'none;'); ?>">
                          
                      </ul>
                  	</li>

					<li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='bookmark' ? 'active' : ''); ?>" href="<?php echo e(route('bookmark')); ?>"><i data-feather="heart"> </i><span><?php echo e(trans('lang.Bookmarks')); ?></span></a></li>

                    <li class="sidebar-main-title">
						<div>
							<h6><?php echo e(trans('lang.Forms & Table')); ?></h6>
                 			<p><?php echo e(trans('lang.Ready to use froms & tables')); ?></p>
						</div>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/forms' ? 'active' : ''); ?>" href="#">
							<i data-feather="file-text"></i><span><?php echo e(trans('lang.Forms')); ?></span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/forms' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;'); ?>">
							<li>
								<a class="submenu-title <?php echo e(in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : ''); ?>" href="#">Form Controls
									<div class="according-menu"><i class="fa fa-angle-<?php echo e(in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'down' : 'right'); ?>"></i></div>
								</a>
								<ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'block' : 'none;'); ?>;">
									
								</ul>
							</li>
							<li>
								<a class="submenu-title <?php echo e(in_array(Route::currentRouteName(), ['datepicker', 'time-picker', 'datetimepicker','daterangepicker' ,'touchspin', 'select2', 'switch', 'typeahead', 'clipboard']) ? 'active' : ''); ?>" href="#">Form Widgets
									<div class="according-menu"><i class="fa fa-angle-<?php echo e(in_array(Route::currentRouteName(), ['datepicker', 'time-picker', 'datetimepicker','daterangepicker' ,'touchspin', 'select2', 'switch', 'typeahead', 'clipboard']) ? 'down' : 'right'); ?>"></i></div>
								</a>
								<ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['datepicker', 'time-picker', 'datetimepicker','daterangepicker' ,'touchspin', 'select2', 'switch', 'typeahead', 'clipboard']) ? 'block' : 'none;'); ?>;">
										
								</ul>
							</li>
							<li>
								<a class="submenu-title <?php echo e(in_array(Route::currentRouteName(), ['default-form', 'form-wizard', 'form-wizard-two', 'form-wizard-three']) ? 'active' : ''); ?>" href="#">Form Layout
									<div class="according-menu"><i class="fa fa-angle-<?php echo e(in_array(Route::currentRouteName(), ['default-form', 'form-wizard', 'form-wizard-two', 'form-wizard-three']) ? 'down' : 'right'); ?>"></i></div>
								</a>
								<ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['default-form', 'form-wizard', 'form-wizard-two', 'form-wizard-three']) ? 'block' : 'none;'); ?>;">
	                              	<li><a href="<?php echo e(route('default-form')); ?>" class="<?php echo e(Route::currentRouteName()=='default-form' ? 'active' : ''); ?>">Default Forms</a></li>
	                              	<li><a href="<?php echo e(route('form-wizard')); ?>" class="<?php echo e(Route::currentRouteName()=='form-wizard' ? 'active' : ''); ?>">Form Wizard 1</a></li>
	                              	<li><a href="<?php echo e(route('form-wizard-two')); ?>" class="<?php echo e(Route::currentRouteName()=='form-wizard-two' ? 'active' : ''); ?>">Form Wizard 2</a></li>
	                              	<li><a href="<?php echo e(route('form-wizard-three')); ?>" class="<?php echo e(Route::currentRouteName()=='form-wizard-three' ? 'active' : ''); ?>">Form Wizard 3</a></li>
	                        	</ul>
							</li>
						</ul>
					</li>
					<li class="mega-menu">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/others' ? 'active' : ''); ?>" href="#"><i data-feather="layers"></i><span><?php echo e(trans('lang.Others')); ?></span>
							<div class="according-menu other"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/others' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<div class="mega-menu-container menu-content">
							<div class="container-fluid">
								<div class="row">
									<div class="col mega-box">
										<div class="link-section">
											<div class="submenu-title">
												<h5>Error Page</h5>
												<div class="according-menu"><i class="fa fa-angle-<?php echo e(in_array(Route::currentRouteName(), ['error-400', 'error-401', 'error-403', 'error-404', 'error-500', 'error-503']) ? 'down' : 'right'); ?>"></i></div>
											</div>
											<ul class="submenu-content opensubmegamenu" style="display: <?php echo e(in_array(Route::currentRouteName(), ['error-400', 'error-401', 'error-403', 'error-404', 'error-500', 'error-503']) ? 'block;' : 'none;'); ?>">
												
											</ul>
										</div>
									</div>
									<div class="col mega-box">
										<div class="link-section">
											<div class="submenu-title">
												<h5> Authentication</h5>
												<div class="according-menu"><i class="fa fa-angle-<?php echo e(in_array(Route::currentRouteName(), ['login', 'login-one', 'login-two', 'login-bs-validation', 'login-bs-tt-validation', 'login-sa-validation', 'sign-up', 'sign-up-one', 'sign-up-two', 'sign-up-wizard', 'unlock', 'forget-password', 'reset-password', 'maintenance']) ? 'down' : 'right'); ?>"></i></div>
											</div>
											<ul class="submenu-content opensubmegamenu" style="display: <?php echo e(in_array(Route::currentRouteName(), ['login', 'login-one', 'login-two', 'login-bs-validation', 'login-bs-tt-validation', 'login-sa-validation', 'sign-up', 'sign-up-one', 'sign-up-two', 'sign-up-wizard', 'unlock', 'forget-password', 'reset-password', 'maintenance']) ? 'block;' : 'none;'); ?>">
												
											</ul>
										</div>
									</div>
									<div class="col mega-box">
										<div class="link-section">
											<div class="submenu-title">
												<h5>Coming Soon</h5>
												<div class="according-menu"><i class="fa fa-angle-<?php echo e(in_array(Route::currentRouteName(), ['comingsoon', 'comingsoon-bg-video', 'comingsoon-bg-img']) ? 'down' : 'right'); ?>"></i></div>
											</div>
											<ul class="submenu-content opensubmegamenu"  style="display: <?php echo e(in_array(Route::currentRouteName(), ['comingsoon', 'comingsoon-bg-video', 'comingsoon-bg-img']) ? 'block;' : 'none;'); ?>">
												
											</ul>
										</div>
									</div>
									<div class="col mega-box">
										<div class="link-section">
											<div class="submenu-title">
												<h5>Email templates</h5>
												<div class="according-menu"><i class="fa fa-angle-<?php echo e(in_array(Route::currentRouteName(), ['basic-template', 'email-header', 'template-email', 'ecommerce-templates', 'email-order-success']) ? 'down' : 'right'); ?>"></i></div>
											</div>
											<ul class="submenu-content opensubmegamenu" style="display: <?php echo e(in_array(Route::currentRouteName(), ['basic-template', 'email-header', 'template-email', 'ecommerce-templates', 'email-order-success']) ? 'block;' : 'none;'); ?>">
												
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
                </ul>
			</div>
			<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
		</nav>
	</div>
</div>
<?php /**PATH /code/Nabadat/resources/views/layouts/simple/sidebar.blade.php ENDPATH**/ ?>