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
                            <form class="m-2 my-lg-0">
                                {{ csrf_field() }}

                                <label for="name">Title</label>
                                <input type="text" class="form-control b-a no-bg no-shadow mb-2"
                                       placeholder="Name" id="name" name="name">

                                <label for="visible">Visible</label>
                                <select class="form-control b-a no-bg no-shadow mb-2"
                                        placeholder="La catégorie est visible ?">
                                    <option value="0">Non visible</option>
                                    <option value="1">Visible</option>
                                </select>

                                <span class="input-group-btn pl-auto mt-3">
                                    <button type="button" class="btn  btn-success b-a no-shadow ml-auto">Add</button>
                                    <button type="reset" class="btn b-a no-shadow ml-3">Cancel</button>
                                </span>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="padding">
                                <h6>{{ Auth::user()->name }}, ajouter une nouvelle categorie</h6>
                                <p class="text-muted my-3">Vous pouvez ajouter une nouvelle categorie et définir si elle est visible ou non</p>
                                <p><span class="text-success">{{ $countCategories }}</span> catégories au total !</p>
                                <a href="#" class="btn btn-sm btn-rounded success theme">Add new category</a>
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