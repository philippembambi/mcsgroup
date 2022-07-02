@extends('layouts.app', ['title' => "Group Mcs pub - Categories"])

@section('content')

<div id="page">
    @component('components.fixed-header')
    @endcomponent
<br>

<div class="container">
    @component('components.search-bar')
    @endcomponent
</div>
	<main class="pattern" id="main">
        <div class="container margin_60_35">
			<div class="main_title_3">
				<span></span>
				<h2>Collection {{  $category->label  }}</h2>
				<p>{{  $category->description  }}</p>

			</div>
            @if ($articles->count() > 0)
			<div class="row">
                    @foreach ($articles as $article)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                            <a href="{{ url("article/$article->id") }}" class="grid_item small">
                                <figure>
                                    <img src="{{  asset("uploadedFiles/$article->picture_1") }}" alt="">
                                    <div class="info">
                                        <h3>Victoria Secretes</h3>
                                    </div>
                                </figure>
                            </a>
                        </div>
                @endforeach
			</div>
            @endif
            {{  $articles->links()  }}
			<!-- /row -->
    </main>
    @component('components.footer')
    @endcomponent
@endsection
