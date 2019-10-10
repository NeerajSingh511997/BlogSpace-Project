@extends('layouts.website')
	
@section('content')

  	<div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <article class="hentry post post-standard has-post-thumbnail sticky">

                        <div class="post-thumb">
                            <img src="{{ asset($recent_post->featured) }}" alt="seo">
                            <div class="overlay"></div>
                            <a href="{{ asset($recent_post->featured) }}" class="link-image js-zoom-image">
                                <i class="seoicon-zoom"></i>
                            </a>
                            <a href="{{ route('get.post', ['slug' => $recent_post->slug]) }}" 
                                class="link-post">
                                <i class="seoicon-link-bold"></i>
                            </a>
                        </div>

                        <div class="post__content">

                            <div class="post__content-info">

                                    <h2 class="post__title entry-title ">
                                        <a href="{{ route('get.post', ['slug' => $recent_post->slug]) }}">
                                        	{{ str_limit($recent_post->title, 45) }}</a>
                                    </h2>

                                    <div class="post-additional-info">

                                        <span class="post__date">

                                            <i class="seoicon-clock"></i>

                                            <time class="published" datetime="2016-04-17">
                                                {{ $recent_post->created_at }}
                                            </time>

                                        </span>

                                        <span class="category">
                                            <i class="seoicon-tags"></i>
                                            <a href="{{ route('get.category', ['id' => $recent_post->category_id]) }}"> 
                                                {{ $recent_post->category->name }}
                                            </a>
                                            
                                        </span>

                                        <span class="post__comments">
                                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                            0
                                        </span>

                                    </div>
                            </div>
                        </div>

                </article>
            </div>
            <div class="col-lg-2"></div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <article class="hentry post post-standard has-post-thumbnail sticky">

                        <div class="post-thumb">
                            <img src="{{ asset($second_post->featured) }}" alt="$second_post-title">
                            <div class="overlay"></div>
                            <a href="{{ asset($second_post->featured) }}" class="link-image js-zoom-image">
                                <i class="seoicon-zoom"></i>
                            </a>
                            <a href="{{ route('get.post', ['slug' => $recent_post->slug]) }}" 
                                class="link-post">
                                <i class="seoicon-link-bold"></i>
                            </a>
                        </div>

                        <div class="post__content">

                            <div class="post__content-info">
                                <h2 class="post__title entry-title ">
                                    <a href="{{ route('get.post', ['slug' => $second_post->slug]) }}">
                                    {{ str_limit($second_post->title, 30) }}</a>
                                </h2>

                                <div class="post-additional-info">

                                    <span class="post__date">

                                        <i class="seoicon-clock"></i>

                                        <time class="published" datetime="2016-04-17 12:00:00">
                                            {{ $second_post->created_at }}
                                        </time>

                                    </span>

                                    <span class="category">
                                        <i class="seoicon-tags"></i>
                                        <a href="{{ route('get.category', ['id' => $second_post->category_id]) }}">
                                            {{ $second_post->category->name }}</a>
                                    </span>

                                    <span class="post__comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                        0
                                    </span>

                                </div>
                            </div>
                        </div>

                </article>
            </div>
            <div class="col-lg-6">
                <article class="hentry post post-standard has-post-thumbnail sticky">

                        <div class="post-thumb">
                            <img src="{{ asset($third_post->featured) }}" alt="seo">
                            <div class="overlay"></div>
                            <a href="{{ asset($third_post->featured) }}" class="link-image js-zoom-image">
                                <i class="seoicon-zoom"></i>
                            </a>
                            <a href="{{ route('get.post', ['slug' => $recent_post->slug]) }}" 
                                class="link-post">
                                <i class="seoicon-link-bold"></i>
                            </a>
                        </div>

                        <div class="post__content">

                            <div class="post__content-info">

                                <h2 class="post__title entry-title ">
                                    <a href="{{ route('get.post', ['slug' => $third_post->slug]) }}">
                                    {{ str_limit($third_post->title, 40) }}</a>
                                </h2>

                                <div class="post-additional-info">

                                    <span class="post__date">

                                        <i class="seoicon-clock"></i>

                                        <time class="published" datetime="2016-04-17 12:00:00">
                                            {{ $third_post->created_at }}
                                        </time>

                                    </span>

                                    <span class="category">
                                        <i class="seoicon-tags"></i>
                                        <a href="{{ route('get.category', ['id' => $third_post->category_id]) }}">
                                            {{ $third_post->category->name }}
                                        </a>
                                    </span>

                                    <span class="post__comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                        0
                                    </span>

                                </div>
                            </div>
                        </div>

                </article>
            </div>
        </div>
	</div>


    <div class="container-fluid">
        <div class="row medium-padding120 bg-border-color">
            <div class="container">
                <div class="col-lg-12">
                    <!-- first row -->
                    <div class="offers">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                <div class="heading">
                                    <h4 class="h1 heading-title">{{ $first_row_title }}</h4>
                                    <div class="heading-line">
                                        <span class="short-line"></span>
                                        <span class="long-line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="case-item-wrap">
                            @foreach($first_row_post as $post)

                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="case-item">
                                        <div class="case-item__thumb">
                                            <img src="{{ asset($post->featured) }}" alt="$post->title">
                                        </div>
                                        <h6 class="case-item__title">
                                            <a href="{{ route('get.post', ['slug' => $post->slug]) }}">
                                                {{ str_limit($post->title, 40) }}
                                            </a>
                                        </h6>
                                    </div>
                                </div>

                            @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="padded-50"></div>

                    <!-- second-row -->
                    <div class="offers">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                <div class="heading">
                                    <h4 class="h1 heading-title">{{ $second_row_title }}</h4>
                                    <div class="heading-line">
                                        <span class="short-line"></span>
                                        <span class="long-line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="case-item-wrap">
                                @foreach($second_row_post as $post)

                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="case-item">
                                        <div class="case-item__thumb">
                                            <img src="{{ asset($post->featured) }}" alt="{{ $post->title }}">
                                        </div>
                                        <h6 class="case-item__title">
                                            <a href="{{ route('get.post', ['slug' => $post->slug]) }}">
                                            {{ str_limit($post->title, 40) }}
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="padded-50"></div>

                    <!-- third-row -->
                    <div class="offers">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                <div class="heading">
                                    <h4 class="h1 heading-title">{{ $third_row_title }}</h4>
                                    <div class="heading-line">
                                        <span class="short-line"></span>
                                        <span class="long-line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="case-item-wrap">
                            @foreach($third_row_post as $post)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="case-item">

                                        <div class="case-item__thumb">
                                            <img src="{{ asset($post->featured) }}" alt="{{ $post->title }}">
                                        </div>
                                        <h6 class="case-item__title">
                                         <a href="{{ route('get.post', ['slug' => $post->slug]) }}">
                                            {{ str_limit($post->title, 40) }}
                                            </a>
                                        </h6>

                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="padded-50"></div>

                    <!-- fourth-row -->
                    <div class="offers">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                <div class="heading">
                                    <h4 class="h1 heading-title">{{ $fourth_row_title }}</h4>
                                    <div class="heading-line">
                                        <span class="short-line"></span>
                                        <span class="long-line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="case-item-wrap">
                                @foreach($fourth_row_post as $post)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="case-item">

                                        <div class="case-item__thumb">
                                            <img src="{{ asset($post->featured) }}" alt="{{ $post->title }}">
                                        </div>
                                        <h6 class="case-item__title">
                                            <a href="{{ route('get.post', ['slug' => $post->slug]) }}">
                                            {{ str_limit($post->title, 40) }}
                                            </a>
                                        </h6>

                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="padded-50"></div>

                    <!-- fifth-row -->
                    <div class="offers">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                <div class="heading">
                                    <h4 class="h1 heading-title">{{ $fifth_row_title }}</h4>
                                    <div class="heading-line">
                                        <span class="short-line"></span>
                                        <span class="long-line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="case-item-wrap">
                                @foreach($fifth_row_post as $post)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="case-item">

                                        <div class="case-item__thumb">
                                            <img src="{{ asset($post->featured) }}" alt="{{ $post->title }}">
                                        </div>
                                        <h6 class="case-item__title">
                                           <a href="{{ route('get.post', ['slug' => $post->slug]) }}">
                                            {{ str_limit($post->title, 40) }}
                                            </a>
                                        </h6>

                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="padded-50"></div>

               
                
                </div>
            </div>
        </div>
    </div>

@endsection