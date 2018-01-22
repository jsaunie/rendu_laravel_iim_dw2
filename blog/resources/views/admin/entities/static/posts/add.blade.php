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
                    <div class="row no-gutters box">
                        <div class="col-sm-12 col-md-6 p-3">
                            <form class="m-2 my-lg-0" action="{{ action('Admin\PostsController@store') }}" method="POST">
                                {{ csrf_field() }}
                                <label for="name">Name</label>
                                <input type="text" class="form-control b-a no-bg no-shadow mb-2"
                                       placeholder="Name" id="title" name="title">
                                <label for="content">Content</label>
                                <textarea class="form-control b-a no-bg no-shadow mb-2"
                                          placeholder="Le contenue du post" id="content" name="content"
                                          rows="5"></textarea>

                                <label for="password">Password</label>
                                <span class="input-group-btn mb-2">
                                    <input type="password" class="form-control b-a no-bg no-shadow mr-2"
                                           placeholder="Password" id="password" name="password">
                                    <input type="password" class="form-control b-a no-bg no-shadow ml-2"
                                           placeholder="Confirm Password">
                                </span>
                                <label for="role">Role</label>
                                <select type="password" class="form-control b-a no-bg no-shadow mb-2"
                                       placeholder="Confirm Password">
                                    <option value="2">User</option>
                                    <option value="3">Admin</option>
                                </select>

                                <span class="input-group-btn pl-auto mt-3">
                                    <button type="submit" class="btn  btn-success b-a no-shadow ml-auto">Add</button>
                                    <button type="reset" class="btn b-a no-shadow ml-3">Cancel</button>
                                </span>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="padding">
                                <h6>{{ Auth::user()->name }}, ajouter un nouvel utilisateur</h6>
                                <p class="text-muted my-3">Vous pouvez ajouter, editer ou supprimer les
                                    utilisateurs.</p>
                                <p><span class="text-success">{{ $countUsers }}</span> utilisateurs au total !</p>
                                <a href="#" class="btn btn-sm btn-rounded success theme">Add new user</a>
                                <a href="{{ action('Admin\StaticsController@dashboard') }}"
                                   class="btn btn-sm btn-rounded white">Go to Dashboard</a>

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