<!-- Sidebar Widgets Column -->
<div class="col-md-4">
    <!-- Search Widget -->
    <div class="card mb-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
            </div>
        </div>
    </div>

@if(Auth::check())
    <!-- Side Widget -->
        @if(!Auth::user()->getPost == null)
            <div class="card my-4">
                <h5 class="card-header">Vos article <span class="rounded badge-danger px-2">{{ Auth::user()->getPost()->count() }}</span></h5>
                <div class="card-body">
                    <div class="row justify-content-around">
                        @foreach(Auth::user()->getPost as $post)
                            <a href="{{ action('App\StaticsController@showPost', $slug = $post->slug) }}" class="p-2 badge {{ $post->is_confirm === 0 ? 'badge-danger' : 'badge-success' }}">{{ $post->title }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        
        <div class="card my-4">
            <h5 class="card-header">Action</h5>
            <div class="card-body">
                <div class="row justify-content-around">
                    @if(Auth::user()->getRole->id < 2)
                        <a href="{{ action('App\AuthController@confirm') }}" class="mb-3 btn btn-warning">
                            Confirmer votre compte !
                        </a>
                        <button disabled class="mb-3 btn btn-danger">
                            Ajouter un posts
                        </button>
                        <button disabled class="mb-3 btn btn-danger">
                            Ajouter une categories
                        </button>
                    @else
                        <a href="{{ action('App\BlogController@create') }}" class="mb-3 btn btn-success">
                            Ajouter un posts
                        </a>
                        <a href="#" class="mb-3 btn btn-success">
                            Ajouter une categories
                        </a>
                    @endif
                </div>
            </div>
        </div>
    
    
        <div class="card my-4">
            <h5 class="card-header">Vos Post en attente de confirmation !</h5>
            <div class="card-body">
                <div class="row justify-content-around">
                   @if($postOfUser->isNotEmpty())
                        @foreach($postOfUser as $post)
                            <a href="{{ action('App\BlogController@show', $slug = $post->slug) }}" class="mb-3 btn badge badge-danger">
                                {{ substr($post->title, 0, 15) }}
                            </a>
                        @endforeach
                   @else
                       Vous n'avez publier aucun post !
                   @endif
                </div>
            </div>
        </div>
@endif



<!-- categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="">{{ $category->title }}</a>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="card-footer mb-0">
            <span class="d-flex justify-content-center">
                {{ $categories->links() }}
            </span>
        </div>
    </div>

</div>

</div>