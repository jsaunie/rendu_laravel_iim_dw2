@extends('admin')

@section('content')
    <div id="content" class="app-content box-shadow-1 box-radius-1" role="main">
        <div class="content-header white box-shadow-1" id="content-header">
            <div class="navbar navbar-expand-lg">
                <a class="d-lg-none mx-2" data-toggle="modal" data-target="#aside">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                        <path d="M80 304h352v16H80zM80 248h352v16H80zM80 192h352v16H80z"/>
                    </svg>
                </a>
                <div class="navbar-text nav-title flex" id="pageTitle">Dashboard</div>
                <ul class="nav flex-row order-lg-2">
                </ul>
                <div class="collapse navbar-collapse no-grow order-lg-1" id="navbarToggler">
                    <form class="input-group m-2 my-lg-0"><input type="text" class="form-control b-a no-bg no-shadow"
                                                                 placeholder="Search projects..."> <span
                                class="input-group-btn"><button type="button"
                                                                class="btn white b-a no-bg no-shadow ml-3">Search</button></span>
                    </form>
                </div>
            </div>
        </div>
        <div class="content-main" id="content-main">
            <div>
                <div class="p-3 light lt box-shadow-0 d-flex">
                    <div class="flex">
                        <h1 class="text-md mb-0 _400">Welcome back, {{ Auth::user()->name }}.</h1>
                    </div>
                    <div>
                        <small class="text-muted d-block">Status</small>
                        <div class="mb-1 peity" data-plugin="peity" data-title="Status" data-option="
                           'bar',
                           {
                           height: 20,
                           width: 60,
                           fill: [app.color.primary]
                           }">56,32,21,16,25,23,42,24,6,10,44,27,34,52,54,59,61,68,78
                        </div>
                    </div>
                </div>
                <div class="padding">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="box list-item">
                                <span class="avatar w-40 text-center rounded primary"><span class="fa fa-dollar"></span></span>
                                <div class="list-body">
                                    <h4 class="m-0 text-md"><a href="#">75 <span class="text-sm">Sales</span></a></h4>
                                    <small class="text-muted">6 waiting payment.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="box list-item">
                                <span class="avatar w-40 text-center rounded info theme"><span
                                            class="fa fa-female"></span></span>
                                <div class="list-body">
                                    <h4 class="m-0 text-md"><a href="#">0 <span class="text-sm">Categories</span></a>
                                    </h4>
                                    <small class="text-muted">0 Confirmée.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="box list-item">
                                <span class="avatar w-40 text-center rounded success"><span
                                            class="fa fa-bookmark"></span></span>
                                <div class="list-body">
                                    <h4 class="m-0 text-md"><a href="#">{{ $countUsers }} <span
                                                    class="text-sm">Members</span></a></h4>
                                    <small class="text-muted">0 Confirmée.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="box list-item">
                                <span class="avatar w-40 text-center rounded warning"><span
                                            class="fa fa-comment"></span></span>
                                <div class="list-body">
                                    <h4 class="m-0 text-md"><a href="#">0 <span
                                                    class="text-sm">Posts</span></a></h4>
                                    <small class="text-muted">0 approved.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters box">
                        <div class="col-sm-8 offset-2">
                            <div class="padding">
                                <h6>Sales Statistical Overview</h6>
                                <p class="text-muted my-3">Sale information on advertising, exhibitions, market
                                    research, online media, customer desires, PR and much more</p>
                                <p><i class="fa fa-arrow-circle-o-up text-success mr-1"></i><span class="text-success">15%</span>
                                    more than last week</p>
                                <a href="#" class="btn btn-sm btn-rounded success theme">Update</a> <a href="#"
                                                                                                       class="btn btn-sm btn-rounded white">See
                                    detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="box">
                                <div class="box-header">
                                    <h3>Messages</h3>
                                </div>
                                <div class="list inset">
                                    <div class="list-item" data-id="item-10">
                                        <span class="w-40 avatar circle brown"><i class="on b-white avatar-right"></i> RO</span>
                                        <div class="list-body">
                                            <a href="" class="item-title _500">Postiljonen</a>
                                            <div class="item-except text-sm text-muted h-1x">Looking for some
                                                client-work
                                            </div>
                                            <div class="item-tag tag hide"></div>
                                        </div>
                                        <div><span class="item-date text-xs text-muted">08:00</span></div>
                                    </div>
                                    <div class="list-item" data-id="item-3">
                                        <span class="w-40 avatar circle brown"><i class="on b-white avatar-right"></i> RO</span>
                                        <div class="list-body">
                                            <a href="" class="item-title _500">Jeremy Scott</a>
                                            <div class="item-except text-sm text-muted h-1x">Submit a support ticket
                                            </div>
                                            <div class="item-tag tag hide"></div>
                                        </div>
                                        <div><span class="item-date text-xs text-muted">09:05</span></div>
                                    </div>
                                    <div class="list-item" data-id="item-13">
                                        <span class="w-40 avatar circle pink">AS</span>
                                        <div class="list-body">
                                            <a href="" class="item-title _500">Airi Satou</a>
                                            <div class="item-except text-sm text-muted h-1x">Looking for some
                                                client-work
                                            </div>
                                            <div class="item-tag tag hide"></div>
                                        </div>
                                        <div><span class="item-date text-xs text-muted">12:30</span></div>
                                    </div>
                                    <div class="list-item" data-id="item-5">
                                        <span class="w-40 avatar circle brown"><i class="on b-white avatar-right"></i> RO</span>
                                        <div class="list-body">
                                            <a href="" class="item-title _500">Radionomy</a>
                                            <div class="item-except text-sm text-muted h-1x">Competitive gaming
                                                ladders
                                            </div>
                                            <div class="item-tag tag hide"></div>
                                        </div>
                                        <div><span class="item-date text-xs text-muted">09:50</span></div>
                                    </div>
                                    <div class="list-item" data-id="item-8">
                                        <span class="w-40 avatar circle brown"><i class="on b-white avatar-right"></i> RO</span>
                                        <div class="list-body">
                                            <a href="" class="item-title _500">RYD</a>
                                            <div class="item-except text-sm text-muted h-1x">Added you to repo</div>
                                            <div class="item-tag tag hide"></div>
                                        </div>
                                        <div><span class="item-date text-xs text-muted">14:00</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="box custom">
                                <div class="box-header">
                                    <h3>Members</h3>
                                </div>
                                <div class="list inset custom">
                                    @foreach($users as $user)
                                        <div class="list-item" data-id="item-6">
                                            <span class="w-40 avatar circle brown">RO</span>
                                            <div class="list-body">
                                                <a href="" class="item-title _500">{{ $user->name }}</a>
                                                <div class="item-except text-sm text-muted h-1x">{{ $user->email }}</div>
                                                <div class="item-except text-sm h-1x {{ ($user->getRole->id === 2) || ($user->getRole->id === 3) ? 'text-muted' : 'text-danger' }} ">{{ $user->getRole->role }}</div>
                                                <div class="item-tag tag hide"></div>
                                            </div>
                                            {{--<div>
                                                <div class="item-action dropdown">
                                                    <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                                        <a class="dropdown-item"><i class="fa fa-tag"></i> Action </a><a class="dropdown-item"><i class="fa fa-pencil"></i> Another action </a><a class="dropdown-item"><i class="fa fa-reply"></i> Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item"><i class="fa fa-ellipsis-h"></i> Separated link</a>
                                                    </div>
                                                </div>
                                            </div>--}}
                                        </div>
                                    @endforeach
                                    <div class="d-flex justify-content-center mt-3 mb-3">
                                        {{ $users->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="box custom">
                                <div class="box-header">
                                    <h3>Posts</h3>
                                </div>
                                <div class="list inset" style="max-height: 600px; overflow: scroll">

                                        <div class="list-item" data-id="item-6">
                                            <span class="w-40 avatar circle brown">RO</span>
                                            <div class="list-body">
                                                <a href="" class="item-title _500">POST TITLE</a>
                                                <div class="item-except text-sm text-muted h-1x">POST CONTENT</div>
                                                <div class="item-except text-sm text-muted h-1x">POST AUTHOR</div>

                                                    <a href="#"
                                                       class="btn btn-danger">Confirmé le post</a>

                                                <div class="item-tag tag hide"></div>
                                            </div>
                                            {{--<div>
                                                <div class="item-action dropdown">
                                                    <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                                        <a class="dropdown-item"><i class="fa fa-tag"></i> Action </a><a class="dropdown-item"><i class="fa fa-pencil"></i> Another action </a><a class="dropdown-item"><i class="fa fa-reply"></i> Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item"><i class="fa fa-ellipsis-h"></i> Separated link</a>
                                                    </div>
                                                </div>
                                            </div>--}}
                                        </div>

                                    <div class="d-flex justify-content-center mt-3 mb-3">
                                        {{ $users->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="box custom">
                                <div class="box-header">
                                    <h3>Categories</h3>
                                </div>
                                <div class="list inset" style="max-height: 600px; overflow: scroll">
                                        <div class="list-item" data-id="item-6">
                                            <span class="w-40 avatar circle brown">RO</span>
                                            <div class="list-body">
                                                <a href="" class="item-title _500">CATEGORY TITLE</a>
                                                <div class="item-tag tag hide"></div>
                                            </div>
                                            {{--<div>
                                                <div class="item-action dropdown">
                                                    <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                                        <a class="dropdown-item"><i class="fa fa-tag"></i> Action </a><a class="dropdown-item"><i class="fa fa-pencil"></i> Another action </a><a class="dropdown-item"><i class="fa fa-reply"></i> Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item"><i class="fa fa-ellipsis-h"></i> Separated link</a>
                                                    </div>
                                                </div>
                                            </div>--}}
                                        </div>
                                    <div class="d-flex justify-content-center mt-3 mb-3">
                                        {{ $users->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters box">
                        <div class="col-md-8 offset-2">
                            <div class="padding">
                                <h6 class="mb-2">Global sales</h6>
                                <p class="text-sm"><i class="fa fa-caret-down text-warn"></i> <span class="text-muted">Min:</span>
                                    $39,050 <i class="fa fa-caret-up text-success ml-2"></i> <span class="text-muted">Max:</span>
                                    $78,560</p>
                                <div>
                                    <div class="p-1">
                                        <small><span class="float-right text-muted">45%</span> USA</small>
                                        <div class="progress my-1" style="height:6px">
                                            <div class="progress-bar primary" style="width: 45%"></div>
                                        </div>
                                    </div>
                                    <div class="p-1">
                                        <small><span class="float-right text-muted">25%</span> Germany</small>
                                        <div class="progress my-1" style="height:6px">
                                            <div class="progress-bar primary" style="width: 25%"></div>
                                        </div>
                                    </div>
                                    <div class="p-1">
                                        <small><span class="float-right text-muted">15%</span> France</small>
                                        <div class="progress my-1" style="height:6px">
                                            <div class="progress-bar primary" style="width: 15%"></div>
                                        </div>
                                    </div>
                                    <div class="p-1">
                                        <small><span class="float-right text-muted">5%</span> Other</small>
                                        <div class="progress my-1" style="height:6px">
                                            <div class="progress-bar grey lt" style="width: 5%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="padding box">
                                <span class="badge success float-right">5</span>
                                <h6 class="mb-3">Activity</h6>
                                <div class="streamline">
                                    <div class="sl-item b-">
                                        <div class="sl-left"><img src="../assets/images/a3.jpg" class="circle" alt=".">
                                        </div>
                                        <div class="sl-content">
                                            <span class="sl-date text-muted">09:05</span>
                                            <div><a href="#" class="text-primary">Jeremy Scott</a> Assign you a task
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item b-">
                                        <div class="sl-content">
                                            <span class="sl-date text-muted">11:30</span>
                                            <div><a href="#" class="text-primary">Ashton Cox</a> New feedback from John
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item b-">
                                        <div class="sl-content">
                                            <span class="sl-date text-muted">13:00</span>
                                            <div><a href="#" class="text-primary">Garrett Winters</a> Followed by Jessic
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item b-">
                                        <div class="sl-left"><img src="../assets/images/a8.jpg" class="circle" alt=".">
                                        </div>
                                        <div class="sl-content">
                                            <span class="sl-date text-muted">14:00</span>
                                            <div><a href="#" class="text-primary">RYD</a> Add inline SVG icon</div>
                                        </div>
                                    </div>
                                    <div class="sl-item b-">
                                        <div class="sl-left"><img src="../assets/images/a10.jpg.png" class="circle"
                                                                  alt="."></div>
                                        <div class="sl-content">
                                            <span class="sl-date text-muted">08:00</span>
                                            <div><a href="#" class="text-primary">Postiljonen</a> Add Google Cast
                                                support
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="padding box">
                                <h6 class="mb-3">Tasks</h6>
                                <div class="streamline streamline-xs">
                                    <div class="sl-item b-success">
                                        <div class="sl-content">
                                            <span class="sl-date text-muted">11:30</span>
                                            <div><a href="#" class="text-primary">Ashton Cox</a> New feedback from John
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item b-">
                                        <div class="sl-content">
                                            <span class="sl-date text-muted">08:00</span>
                                            <div><a href="#" class="text-primary">Postiljonen</a> Add Google Cast
                                                support
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item b-info">
                                        <div class="sl-content">
                                            <span class="sl-date text-muted">05:35</span>
                                            <div><a href="#" class="text-primary">Fifth Harmony</a> Bug fixes</div>
                                        </div>
                                    </div>
                                    <div class="sl-item b-info">
                                        <div class="sl-content">
                                            <span class="sl-date text-muted">15:00</span>
                                            <div><a href="#" class="text-primary">Pablo Nouvelle</a> Added API call to
                                                update track element
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item b-primary">
                                        <div class="sl-content">
                                            <span class="sl-date text-muted">16:00</span>
                                            <div><a href="#" class="text-primary">Tiger Nixon</a> Implemented new API
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="padding box">
                                <h6>Friends</h6>
                                <div class="list inset">
                                    <div class="list-item" data-id="item-13">
                                        <span class="w-24 avatar circle pink">AS</span>
                                        <div class="list-body">
                                            <a href="" class="item-title _500">Airi Satou</a>
                                            <div class="item-tag tag hide"></div>
                                        </div>
                                        <div>
                                            <div class="item-action dropdown">
                                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                                            class="fa fa-fw fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                                    <a class="dropdown-item"><i class="fa fa-tag"></i> Action </a><a
                                                            class="dropdown-item"><i class="fa fa-pencil"></i> Another
                                                        action </a><a class="dropdown-item"><i class="fa fa-reply"></i>
                                                        Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item"><i class="fa fa-ellipsis-h"></i> Separated
                                                        link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item" data-id="item-1">
                                        <span class="w-24 avatar circle grey">S</span>
                                        <div class="list-body">
                                            <a href="" class="item-title _500">Summerella</a>
                                            <div class="item-tag tag hide"></div>
                                        </div>
                                        <div>
                                            <div class="item-action dropdown">
                                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                                            class="fa fa-fw fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                                    <a class="dropdown-item"><i class="fa fa-tag"></i> Action </a><a
                                                            class="dropdown-item"><i class="fa fa-pencil"></i> Another
                                                        action </a><a class="dropdown-item"><i class="fa fa-reply"></i>
                                                        Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item"><i class="fa fa-ellipsis-h"></i> Separated
                                                        link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item" data-id="item-14">
                                        <span class="w-24 avatar circle brown">BW</span>
                                        <div class="list-body">
                                            <a href="" class="item-title _500">Brielle Williamson</a>
                                            <div class="item-tag tag hide"></div>
                                        </div>
                                        <div>
                                            <div class="item-action dropdown">
                                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                                            class="fa fa-fw fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                                    <a class="dropdown-item"><i class="fa fa-tag"></i> Action </a><a
                                                            class="dropdown-item"><i class="fa fa-pencil"></i> Another
                                                        action </a><a class="dropdown-item"><i class="fa fa-reply"></i>
                                                        Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item"><i class="fa fa-ellipsis-h"></i> Separated
                                                        link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item" data-id="item-15">
                                        <span class="w-24 avatar circle indigo">GW</span>
                                        <div class="list-body">
                                            <a href="" class="item-title _500">Garrett Winters</a>
                                            <div class="item-tag tag hide"></div>
                                        </div>
                                        <div>
                                            <div class="item-action dropdown">
                                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                                            class="fa fa-fw fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                                    <a class="dropdown-item"><i class="fa fa-tag"></i> Action </a><a
                                                            class="dropdown-item"><i class="fa fa-pencil"></i> Another
                                                        action </a><a class="dropdown-item"><i class="fa fa-reply"></i>
                                                        Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item"><i class="fa fa-ellipsis-h"></i> Separated
                                                        link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item" data-id="item-2">
                                        <span class="w-24 avatar circle light-blue">K</span>
                                        <div class="list-body">
                                            <a href="" class="item-title _500">Kygo</a>
                                            <div class="item-tag tag hide"></div>
                                        </div>
                                        <div>
                                            <div class="item-action dropdown">
                                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                                            class="fa fa-fw fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                                    <a class="dropdown-item"><i class="fa fa-tag"></i> Action </a><a
                                                            class="dropdown-item"><i class="fa fa-pencil"></i> Another
                                                        action </a><a class="dropdown-item"><i class="fa fa-reply"></i>
                                                        Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item"><i class="fa fa-ellipsis-h"></i> Separated
                                                        link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item" data-id="item-11">
                                        <span class="w-24 avatar circle blue">TN</span>
                                        <div class="list-body">
                                            <a href="" class="item-title _500">Tiger Nixon</a>
                                            <div class="item-tag tag hide"></div>
                                        </div>
                                        <div>
                                            <div class="item-action dropdown">
                                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                                            class="fa fa-fw fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right text-color" role="menu">
                                                    <a class="dropdown-item"><i class="fa fa-tag"></i> Action </a><a
                                                            class="dropdown-item"><i class="fa fa-pencil"></i> Another
                                                        action </a><a class="dropdown-item"><i class="fa fa-reply"></i>
                                                        Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item"><i class="fa fa-ellipsis-h"></i> Separated
                                                        link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-footer white" id="content-footer">
            <div class="d-flex p-3">
                <span class="text-sm text-muted flex">&copy; Copyright. Flatfull</span>
                <div class="text-sm text-muted">Version 1.0.2</div>
            </div>
        </div>
    </div>
    </div>
    <div id="setting">
        <div class="setting dark-white rounded-bottom" id="theme">
            <a href="#" data-toggle-class="active" data-target="#theme" class="dark-white toggle"><i
                        class="fa fa-gear text-primary fa-spin"></i></a>
            <div class="box-header"><a
                        href="https://themeforest.net/item/apply-web-application-admin-template/21072584?ref=flatfull"
                        class="btn btn-xs rounded danger float-right">BUY</a> <strong>Theme Switcher</strong></div>
            <div class="box-divider"></div>
            <div class="box-body">
                <p id="settingLayout"><label class="md-check my-1 d-block"><input type="checkbox" name="fixedAside">
                        <i></i> <span>Fixed Aside</span></label><label class="md-check my-1 d-block"><input
                                type="checkbox" name="fixedContent"> <i></i> <span>Fixed Content</span></label><label
                            class="md-check my-1 d-block"><input type="checkbox" name="folded"> <i></i> <span>Folded Aside</span></label><label
                            class="md-check my-1 d-block"><input type="checkbox" name="container"> <i></i> <span>Boxed Layout</span></label><label
                            class="md-check my-1 d-block"><input type="checkbox" name="ajax"> <i></i> <span>Ajax load page</span></label><label
                            class="pointer my-1 d-block" data-toggle="fullscreen" data-plugin="screenfull"
                            data-target="fullscreen"><span class="ml-1 mr-2 auto"><i class="fa fa-expand d-inline"></i> <i
                                    class="fa fa-compress d-none"></i> </span><span>Fullscreen mode</span></label></p>
                <p>Colors:</p>
                <p><label class="radio radio-inline m-0 mr-1 ui-check ui-check-color"><input type="radio" name="theme"
                                                                                             value="primary"> <i
                                class="primary"></i></label><label
                            class="radio radio-inline m-0 mr-1 ui-check ui-check-color"><input type="radio" name="theme"
                                                                                               value="accent"> <i
                                class="accent"></i></label><label
                            class="radio radio-inline m-0 mr-1 ui-check ui-check-color"><input type="radio" name="theme"
                                                                                               value="warn"> <i
                                class="warn"></i></label><label
                            class="radio radio-inline m-0 mr-1 ui-check ui-check-color"><input type="radio" name="theme"
                                                                                               value="info"> <i
                                class="info"></i></label><label
                            class="radio radio-inline m-0 mr-1 ui-check ui-check-color"><input type="radio" name="theme"
                                                                                               value="success"> <i
                                class="success"></i></label><label
                            class="radio radio-inline m-0 mr-1 ui-check ui-check-color"><input type="radio" name="theme"
                                                                                               value="warning"> <i
                                class="warning"></i></label><label
                            class="radio radio-inline m-0 mr-1 ui-check ui-check-color"><input type="radio" name="theme"
                                                                                               value="danger"> <i
                                class="danger"></i></label></p>
                <div class="row no-gutters">
                    <div class="col">
                        <p>Brand</p>
                        <p><label class="radio radio-inline m-0 mr-1 ui-check"><input type="radio" name="brand"
                                                                                      value="dark-white"> <i
                                        class="light"></i></label><label
                                    class="radio radio-inline m-0 mr-1 ui-check ui-check-color"><input type="radio"
                                                                                                       name="brand"
                                                                                                       value="dark"> <i
                                        class="dark"></i></label></p>
                    </div>
                    <div class="col mx-2">
                        <p>Aside</p>
                        <p><label class="radio radio-inline m-0 mr-1 ui-check"><input type="radio" name="aside"
                                                                                      value="white"> <i
                                        class="light"></i></label><label
                                    class="radio radio-inline m-0 mr-1 ui-check ui-check-color"><input type="radio"
                                                                                                       name="aside"
                                                                                                       value="dark"> <i
                                        class="dark"></i></label></p>
                    </div>
                    <div class="col">
                        <p>Themes</p>
                        <div class="clearfix"><label class="radio radio-inline ui-check"><input type="radio" name="bg"
                                                                                                value=""> <i
                                        class="light"></i></label><label
                                    class="radio radio-inline ui-check ui-check-color"><input type="radio" name="bg"
                                                                                              value="dark"> <i
                                        class="dark"></i></label></div>
                    </div>
                </div>
                <p>Demos</p>
                <div class="text-md"><a href="dashboard-folded=false&amp;bg=&amp;aside=dark&amp;brand=dark.html"
                                        class="no-ajax badge light">0</a> <a
                            href="dashboard.1-folded=false&amp;bg=&amp;aside=dark&amp;brand=dark-white.html"
                            class="no-ajax badge light">1</a> <a
                            href="dashboard.2-folded=false&amp;bg=&amp;aside=dark&amp;brand=white.html"
                            class="no-ajax badge light">2</a> <a
                            href="dashboard.3-folded=false&amp;bg=&amp;aside=white&amp;brand=white.html"
                            class="no-ajax badge light">3</a> <a
                            href="dashboard.4-folded=true&amp;bg=&amp;aside=dark.html" class="no-ajax badge light">4</a>
                    <a href="dashboard.5-folded=true&amp;bg=&amp;aside=dark&amp;brand=dark.html"
                       class="no-ajax badge light">5</a><a
                            href="dashboard.6-folded=false&amp;bg=&amp;aside=white&amp;brand=white.html"
                            class="no-ajax badge light">6</a> <a href="rtl-folded&amp;bg=.html"
                                                                 class="no-ajax badge light">RTL</a></div>
            </div>
        </div>
    </div>

@stop