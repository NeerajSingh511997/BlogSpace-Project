@extends('layouts.app')

@section('content')
    
    <div class="container">
        
        <div class="card">
            
            <!-- card header -->

            <div class="card-header">
                <h2 class="h1">Dashboard</h2>
                <div class="mt-4 card-header-details">
                    <p class="h5 text-dark card-title">Welcome Back, 
                        <b class="text-success">{{ Auth::user()->name }}</b>
                    </p>
                </div>
            </div>

            <!-- /card-header -->

            <!-- card-body -->

            <div class="card-body">

                <!-- first-row-details -->
                <div class="my-2 container_fluid">

                    <div class="row">
                        
                        <!-- recent-post-table  -->
                        <div class="col-lg-8 no-padding">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="h2 text-center">Recents Post </h2>
                                    <div class="container_fluid">
                                        <table class="table table-bordered table-striped text-center">
                                            <tr>
                                                <th>Sno.</th>
                                                <th>Feature</th>
                                                <th>Name</th>
                                                <th>View</th>
                                                <th>Delete</th>
                                            </tr>
                                        @if($posts->count() > 0)
                                            @foreach($posts as $post)
                                            <tr>
                                                <td>
                                                    <b class="h4 text-center text-secondary">
                                                        {{ $loop->index + 1 }} </b>
                                                </td>
                                                 <td>
                                                    <img src="{{ asset($post->featured) }}" alt="img" class="post-thumb">
                                                </td>
                                                <td>
                                                    <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="h6 text-secondary">
                                                        {{ str_limit($post->title, 35) }}    
                                                        
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="h5 btn btn-sm btn-success">
                                                        Edit
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('post.destroy', ['id' => $post->id]) }}" class="btn btn-sm btn-danger">
                                                        X
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="h5 text-center text-danger">
                                                    <b>Sorry, No Post Found!</b>
                                                </td>
                                            </tr>
                                        @endif
                                        </table>
                                    </div>  
                                </div>  
                            </div>  <!-- /recent-post-details -->
                        </div>  <!-- /recent-post-table  -->

                        <!-- category-table -->
                        <div class="col-lg-4 no-padding">
                            <div class="container-fluid">
                                <table class="table table-bordered table-striped text-center">
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Category</th>
                                        <th>Posts</th>
                                    </tr>
                                @if($categories->count() > 0)
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>
                                            <b class="text-center text-secondary">
                                                {{ $loop->index + 1 }}
                                            </b>
                                        </td>
                                        <td>
                                            <b class="text-secondary">
                                            {{ $category->name }}
                                            </b>
                                        </td>
                                        <td>
                                            <b class="h6 btn btn-sm btn-info">{{ $category->posts->count() }}</b>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else 
                                    <tr>
                                        <td colspan="3" class="6 text-center text-danger">
                                            <b>Sorry No Category Found !</b>
                                        </td>
                                    </tr>
                                @endif
                                </table>
                            </div> 
                        </div>  <!-- category-table -->

                    </div>  

                </div>  <!-- /first-row-details -->

                    
                <!-- second-row-details -->

                <div class="my-4 container">
                        
                    <!-- dashboard-overview -->
                    
                    <div class="row">

                        <div class="col-lg-3 no-padding">
                            <div class="mb-2 card ">
                                <div class="card-header bg-success">
                                    <h2 class="h5 text-center text-light">Pubished Post</h2>
                                </div>
                                <div class="card_body">
                                    <p class="h1 text-center text-success">{{ $postCount }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 no-padding">
                            <div class="mb-2 card ">
                                <div class="card-header bg-danger">
                                    <h2 class="h5 text-center text-light">Trashed Post</h2>
                                </div>
                                <div class="card_body">
                                    <p class="h1 text-center text-danger">{{ $trashCount }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 no-padding">             
                            <div class="mb-2 card ">
                                <div class="card-header bg-primary">
                                    <h2 class="h4 text-center text-light">Draft Post</h2>
                                </div>
                                <div class="card_body">
                                    <p class="h1 text-center text-info">{{ $draftCount }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 no-padding">
                            <div class="mb-2 card ">
                                <div class="card-header bg-dark">
                                    <h2 class="h4 text-center text-light">User</h2>
                                </div>
                                <div class="card_body">
                                    <p class="h1 text-center text-dark">{{ $userCount }}</p>
                                </div>
                           </div>
                       </div>

                    </div> <!-- dashboard-overview -->

                </div>  <!-- /second-row -->
                    

                <!-- third-row --> 

                <div class="my-2 container_fluid">

                    <div class='row'>


                        <div class="col-lg-8 no-padding">
                            
                            <!-- recycle-bin-table  -->

                            <div class="card">
                                <div class="card-body">
                                    <h2 class="h1 text-center">Recycle Bin</h2>
                                    <div class="container_fluid">
                                        <table class="table table-bordered table-striped text-center">
                                            <tr>
                                                <th>Sno.</th>
                                                <th>Featured</th>
                                                <th>Name</th>
                                                <th>Restore</th>
                                                <th>Delete</th>
                                            </tr>
                                        @if($trashedPosts->count() > 0)
                                            @foreach($trashedPosts as $trashedPost)
                                            <tr>
                                                <td>
                                                    <b class="h4 text-center text-secondary">
                                                        {{ $loop->index + 1 }}    
                                                    </b>
                                                </td>
                                                <td>
                                                    <img src="{{ asset($trashedPost->featured) }}" alt="image" class="post-thumb">
                                                </td>
                                                <td>
                                                    <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="h6 text-secondary">
                                                        {{ str_limit($trashedPost->title, 30) }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="h5 text-center btn btn-sm btn-warning">
                                                        Restore
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('post.destroy', ['id' => $post->id]) }}" class="btn btn-sm btn-danger">
                                                        X
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="h5 text-center text-danger">
                                                    <b> Trash is Empty !</b>
                                                </td>
                                            </tr>
                                        @endif
                                        </table>
                                    </div>  
                                </div>  
                            </div>  <!-- /recycle-bin-table -->

                            <!-- drafts-table -->

                            <div class="mt-2 card">
                                <div class="card-body">
                                    <h2 class="h1 text-center">Draft Posts</h2>
                                    <div class="container_fluid">
                                        <table class="table table-bordered table-striped text-center">
                                            <tr>
                                                <th>Sno.</th>
                                                <th>Featured</th>
                                                <th>Name</th>
                                                <th>Publish</th>
                                                <th>Delete</th>
                                            </tr>
                                        @if($draftPosts->count() > 0)
                                            @foreach($draftPosts as $draftPost)
                                            <tr>
                                                <td>
                                                    <b class="h4 text-center text-secondary">
                                                        {{ $loop->index + 1 }}    
                                                    </b>
                                                </td>
                                                <td>
                                                    <img src="{{ asset($draftPost->featured) }}" alt="image" class="post-thumb">
                                                </td>
                                                <td>
                                                    <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="h6 text-secondary">
                                                        {{ str_limit($draftPost->title, 35) }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="h5 text-center btn btn-sm btn-success">
                                                        publish
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('post.destroy', ['id' => $post->id]) }}" class="btn btn-sm btn-danger">
                                                        X
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="h5 text-center text-danger">
                                                    <b> Draft is Empty !</b>
                                                </td>
                                            </tr>
                                        @endif
                                        </table>
                                    </div>  
                                </div>  
                            </div> 

                        </div>  <!-- /recycle-bin-table -->

                        <!-- tags-table -->

                        <div class="col-lg-4 no-padding">
                            <div class="container-fluid">
                                <table class="table table-bordered table-striped text-center">
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Tags</th>
                                        <th>Posts</th>
                                    </tr>
                               
                                    
                                    @if($tags->count() > 0)
                                        @foreach($tags as $tag)
                                    <tr>
                                        <td>
                                            <b class="text-center text-secondary">
                                                {{ $loop->index + 1 }}    
                                            </b>
                                        </td>
                                        <td>
                                            <b class="text-secondary">
                                                {{ $tag->name }}
                                            </b>
                                        </td>
                                        <td>
                                            <b class="h5 btn btn-sm btn-success text-light">
                                                {{ $tag->posts->count()}}
                                            </b>
                                        </td>
                                    </tr>
                                        @endforeach
                                    @else
                                    <tr>
                                        <td colspan="3" class="h5 text-center text-danger">
                                            <b> No Tags Found !</b>
                                        </td>
                                    </tr>
                                    @endif
                                
                                </table>
                            </div> 
                        </div>  <!-- user-table -->

                    </div>  <!-- /third-row --> 

                </div>

            </div>  <!-- /card-body -->

        </div>  <!-- /card -->

    </div>  <!-- /container -->
@endsection
