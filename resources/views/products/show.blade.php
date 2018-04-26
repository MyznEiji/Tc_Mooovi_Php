@extends('review_site')

@section('content')
  <div id="main_cnt_wrapper">
    <div id="yjContentsBody">
      <div class="yjContainer">
        <span class="yjGuid"><a id="yjContentsStart" name="yjContentsStart"></a><img alt="ここから本文です" height="1" src="http://i.yimg.jp/yui/jp/tmpl/1.1.0/audionav.gif" width="1"></span>
        <div id="yjMain">
          <article class="section">
            <div class="container">
              <header class="header header--section">
                <h2 class="text-middle">
                  <i class="icon-movie color-gray-light"></i>{{ $product->title }}
                </h2>
              </header>
              <p style="text-align: center">
                <img src="{{ $product->image_url }}" alt="{{ $product->title }}">
              </p>
              <div style="text-align: right">
                <a href="/products/{{ $product->id }}/reviews/create">この作品を投稿する</a>
              </div>
              <header class="header header--section">
                <h2 class="text-middle">
                  <i class="icon-movie color-gray-light"></i>みんなのレビュー
                </h2>
              </header>
              <ul style="padding: 0">
                @foreach ($product->reviews()->get() as $review)
                  <li style="border-bottom: dotted 1px">
                    <div class="thumbnail__caption">
                      <h3 class="text-xsmall text-overflow" title="{{ $review->user->name }}">
                        <span><i class="text-xxsmall" title=""></i></span>{{ $review->user->name }}
                      </h3>
                      <p class="text-small">
                        <span class="rating-star"><i class="star-actived rate-{{ $review->rate }}0"></i></span>
                      </p>
                      <p>
                        {{ $review->review }}
                      </p>
                    </div>
                  </li>
                @endforeach
              </ul>
            </div>
          </article>
        </div>
        <div id="yjSub">
@endsection