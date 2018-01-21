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
                    <div class="row no-gutters box">
                        <div class="col-sm-8">
                            <div class="padding">
                                <h6>{{ Auth::user()->name }}, manager vos utilisateurs.</h6>
                                <p class="text-muted my-3">Vous pouvez ajouter, editer ou supprimer les utilisateurs.</p>
                                <p><span class="text-success">{{ $countUsers }}</span> utilisateurs au total !</p>
                                <a href="#" class="btn btn-sm btn-rounded success theme">Add new user</a>
                                <a href="{{ action('Admin\StaticsController@dashboard') }}"class="btn btn-sm btn-rounded white">Go to Dashboard</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
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
                                            <div>
                                                <div class="item-action dropdown">
                                                    <a href="#" data-toggle="dropdown" class="text-muted"><i
                                                                class="fa fa-fw fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right text-color"
                                                         role="menu">
                                                        <a class="dropdown-item"><i class="fa fa-tag"></i> Action </a><a
                                                                class="dropdown-item"><i class="fa fa-pencil"></i>
                                                            Another action </a><a class="dropdown-item"><i
                                                                    class="fa fa-reply"></i> Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item"><i class="fa fa-ellipsis-h"></i>
                                                            Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="d-flex justify-content-center mt-3 mb-3">
                                        {{ $users->links() }}
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
                <span class="text-sm text-muted flex">&copy; Copyright. Glrd&Sn</span>
                <div class="text-sm text-muted">Laravel</div>
            </div>
        </div>
    </div>

@stop