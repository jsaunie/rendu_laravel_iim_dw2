@extends('app')

@section('content')
    <div class="container">
        
        <div class="row">
            <h1 class="my-4 ml-3">Update Posts {{ $post->title }}
            </h1>
        </div>
        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <!-- Blog Post -->
                <form method="POST" action="{{ action('App\BlogController@postUpdate', $slug = $post->slug) }}" enctype="multipart/form-data">
                    <div class="card mb-4">
                        <div class="card-body">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Titre</label>
                                    <input type="text" name="title" class="form-control" id="inputEmail4" placeholder="{{ $post->title }}" value="{{ $post->title }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Categories</label>
                                    <select class="form-control js-example-basic-single" name="categorie[]">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Contenue</label>
                                <textarea class="form-control" name="content" rows="3" placeholder="{{ $post->content }}">{{ $post->content }}</textarea>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            <button class="btn btn-success">
                                Modifier le post
                            </button>
                        </div>
                    </div>
                </form>
                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                </ul>
            
            </div>
        </div>
    </div>
@stop