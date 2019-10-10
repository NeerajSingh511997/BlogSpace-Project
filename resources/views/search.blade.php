@extends('layouts.website')

@section('content')

<!-- Stunning Header -->

<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">Result: {{ $query }}</h1>
    </div>
</div>	<!-- /Stunning Header -->

<!-- Category Section-->

<div class="container">
    <div class="row medium-padding120">
        <main class="main">

        @if($posts->count() > 0)
            <!-- Post Details -->
            <div class="row">
                <div class="case-item-wrap">
                @foreach($posts as $post)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="case-item">
                            <div class="case-item__thumb">
                                <img src="{{ asset($post->featured) }}" alt="{{ $post->title }}">
                            </div>
                            <h6 class="case-item__title">
                            	<a href="{{ route('get.post', ['slug' => $post->slug]) }}">
                            		{{ str_limit($post->title, 50) }}
                            	</a>
                            </h6>
                        </div>
                    </div>
                @endforeach
            	</div>
            </div>	<!-- /Post Details -->
        @else
        	<div class="container">
        		<h2 class="h2 text-center text-secondary">Sorry, No Results Founds !</h2>
        		<div class="my-4 search-info text-center">
	        		<p>Try, search again with the different keyword this time.</p>
	        		<p class="my-4">
	        			For e.g, Instead of typing whole Sentence like <br>
	        			"Laravel Version 6.0 announce this august". <br>
	        			You can <b>Keywords</b> like <cite>Laravel Version 6.0</cite></p>
	        		<p class="text-secondary">
	        			<cite>Try the below tags to suits your best interest</cite>
	        		</p>
	        	</div>
        	</div>
        @endif 

            <br>
            <br>
            <br>
            
           <!-- Sidebar-->
            <div class="col-lg-12">
                <aside aria-label="sidebar" class="sidebar sidebar-right">
                    <div  class="widget w-tags">
                        <div class="heading text-center">
                            <h4 class="heading-title">ALL BLOG TAGS</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>

                        <div class="tags-wrap">
                        @foreach($tags as $tag)
                            <a href="{{ route('get.tag', ['id' => $tag->id]) }}" class="w-tags-item">
                                {{ $tag->name }}</a>
                        @endforeach
                        </div>
                    </div>
                </aside>
            </div>	<!-- /Sidebar-->

        </main>
    </div>
</div>	<!-- /Category Section-->



@endsection
