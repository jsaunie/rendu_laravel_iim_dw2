@extends('app')

@section('content')
    <div class="container">
        
        <div class="row">
            <h1 class="my-4 ml-3">Envoyé un message a un membre !
            </h1>
        </div>
        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <!-- Blog Post -->
                <form method="POST" action="{{ action('App\MessageController@send') }}" enctype="multipart/form-data">
                    <div class="card mb-4">
                        <div class="card-body">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputPassword4">Membre</label>
                                    <select class="form-control js-example-basic-single" name="user[]">
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}" {{ $user->id === Auth::user()->id ? 'disabled' : '' }}>{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Contenue</label>
                                <textarea class="form-control" name="content" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            <button class="btn btn-success">
                                Envoyé le message
                            </button>
                            
                        </div>
                    </div>
                </form>
                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                </ul>
            
            </div>
        </div>
@stop