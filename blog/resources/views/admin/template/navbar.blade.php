<div id="aside" class="app-aside fade nav-expand white" aria-hidden="true">
    <div class="sidenav modal-dialog dk">
        <div class="navbar">
            <a href="{{ action('Admin\StaticsController@dashboard') }}" class="navbar-brand">
                <svg viewBox="0 0 24 24" height="28" width="28" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path d="M19.51 3.08L3.08 19.51c.09.34.27.65.51.9.25.24.56.42.9.51L20.93 4.49c-.19-.69-.73-1.23-1.42-1.41zM11.88 3L3 11.88v2.83L14.71 3h-2.83zM5 3c-1.1 0-2 .9-2 2v2l4-4H5zm14 18c.55 0 1.05-.22 1.41-.59.37-.36.59-.86.59-1.41v-2l-4 4h2zm-9.71 0h2.83L21 12.12V9.29L9.29 21z"
                          fill="#965251" class=""/>
                </svg>
                <span class="hidden-folded d-inline">Co-Blog</span>
                <div class="nav-item my-3 d-flex justify-content-center">
                    <a href="{{ action('App\BlogController@index') }}" class="btn btn-light">
                        Retourner au Site
                    </a>
                </div>
            </a>
        </div>
        <div class="flex hide-scroll">
            <div class="scroll">
                <div class="nav-active-theme" data-nav>
                    <ul class="nav bg">
                        <li class="nav-header w-100"><span class="d-flex justify-content-center text-xs hidden-folded">Nav</span>
                        </li>
                        <li><a href="{{ action('Admin\StaticsController@dashboard') }}"><span
                                        class="nav-text">Dashboard</span></a></li>
                        <li><a href="{{ action('Admin\CategoriesController@index') }}">
                                <span class="nav-badge">
                                    <b class="badge badge-sm badge-pill success">{{ $countCategoriesConfirm }}</b> </span>
                                <span class="nav-icon">
                                    <i class="fa fa-folder-open"></i>
                                </span>
                                <span class="nav-text">Categories</span></a></li>
                        <li><a href="{{ action('Admin\PostsController@index') }}">
                                <span class="nav-badge">
                                    <b class="badge badge-sm badge-pill success">{{ $countPostsConfirm }}</b> </span>
                                <span class="nav-icon">
                                    <i class="fa fa-comment"></i>
                                </span>
                                <span class="nav-text">Posts</span></a></li>
                        <li><a href="{{ action('Admin\UsersController@index') }}">
                                 <span class="nav-badge">
                                    <b class="badge badge-sm badge-pill success">{{ $countUsersConfirm }}</b> </span>
                                <span class="nav-icon">
                                    <i class="fa fa-user"></i>
                                </span>
                                <span class="nav-text">Users</span></a></li>
                        <li class="pb-2 hidden-folded"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="no-shrink lt">
            <div class="nav-fold">
                <div class="hidden-folded flex p-2-3 bg">
                    <div class="d-flex p-1">
                        <a href="{{ action('Admin\StaticsController@dashboard') }}" class="flex text-nowrap">
                            <i class="fa fa-bell text-muted mr-1"></i>
                            <span class="badge badge-pill theme">{{ $countTotal }}</span>
                        </a><a href="{{ action('App\AuthController@logout') }}" class="px-2" data-toggle="tooltip" title="Logout">
                            <i class="fa fa-power-off text-muted"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>