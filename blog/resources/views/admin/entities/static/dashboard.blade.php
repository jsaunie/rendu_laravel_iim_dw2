@extends('admin')

@section('content')

    <div id="content" class="app-content box-shadow-1 box-radius-1" role="main">
        @include('admin.template.nav')
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
                        <div class="col-sm-6 col-lg-4">
                            <div class="box list-item">
                                <span class="avatar w-40 text-center rounded info theme"><span
                                            class="fa fa-female"></span></span>
                                <div class="list-body">
                                    <h4 class="m-0 text-md"><a href="#">{{ $countCategories}} <span class="text-sm">Categories</span></a>
                                    </h4>
                                    <small class="text-muted">{{ $countCategoriesConfirm }} Confirmée.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="box list-item">
                                <span class="avatar w-40 text-center rounded success"><span
                                            class="fa fa-bookmark"></span></span>
                                <div class="list-body">
                                    <h4 class="m-0 text-md"><a href="#">{{ $countUsers }} <span
                                                    class="text-sm">Members</span></a></h4>
                                    <small class="text-muted">{{ $countUsersConfirm  }} Confirmée.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="box list-item">
                                <span class="avatar w-40 text-center rounded warning"><span
                                            class="fa fa-comment"></span></span>
                                <div class="list-body">
                                    <h4 class="m-0 text-md"><a href="#">{{ $countPosts }} <span
                                                    class="text-sm">Posts</span></a></h4>
                                    <small class="text-muted">{{ $countPostsConfirm }} approved.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
                                    <h3>Categories</h3>
                                </div>
                                <div class="list inset">
                                    @foreach($categories as $category)
                                        <div class="list-item" data-id="item-6">
                                            <span class="w-40 avatar circle brown">RO</span>
                                            <div class="list-body">
                                                <a href="" class="item-title _500">{{ $category->title }}</a>
                                                <div class="item-tag tag hide"></div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="d-flex justify-content-center mt-3 mb-3">
                                        {{ $users->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="box custom" style="overflow-y: scroll">
                                <div class="box-header">
                                    <h3>Posts</h3>
                                </div>
                                <div class="list inset">
                                    @foreach($posts as $post)
                                        <div class="list-item" data-id="item-6">
                                            <span class="w-40 avatar circle brown">RO</span>
                                            <div class="list-body">
                                                <a href="" class="item-title _500">{{ $post->title}}</a>
                                                <div class="item-except text-sm text-muted h-1x">{{ substr($post->content, 0, 140) }}</div>
                                                <div class="item-except text-sm text-muted h-1x">{{ $post->getAuthor->name }}</div>
                                                @if($post->is_confirm === 0)
                                                    <a href="{{ action('Admin\StaticsController@confirmPost', $slug = $post->slug ) }}"
                                                       class="btn btn-danger">Confirmé le post</a>
                                                @endif
                                                <div class="item-tag tag hide"></div>
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