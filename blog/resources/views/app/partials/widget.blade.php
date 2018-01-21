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


<!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="">{{ $category->categorie }}</a>
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