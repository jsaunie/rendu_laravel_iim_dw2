@extends('app')

@section('content')
    
    <!-- Page Content -->
    <div class="container">
        
        <div class="row">
            <h1 class="my-4 ml-3">Lasted Posts</h1>
        </div>
        <div class="row">
            <!-- Blog Entries Column -->
            
            <div class="col-md-8">
                <!-- Blog Post -->
                
                @foreach($messages->sortByDesc('id') as $message)
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-title">De : {{ $message->getSender->name }}</h2>
                            <p class="card-text">Contenue : <br>{{ $message->content }}</p>
                        </div>
                    </div>
            @endforeach
            
            
            <!-- Pagination -->
            </div>
            
            <!-- Sidebar Widgets Column -->
{{--            @include('app.partials.widget')--}}
        
        </div>
        <!-- /.row -->
    
    </div>
    <!-- /.container -->

@endsection