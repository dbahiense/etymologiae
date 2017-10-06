@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12">
        	<!-- https://stackoverflow.com/questions/39838120/pass-parameter-from-form-to-controller-laravel -->
            <form action="{{action('SearchController@index')}}" class="form-inline" id="search-form" name="search-form" method="post">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input class="form-control" id="word" name="word" placeholder="Search" type="text">
					<button type="submit" class="btn btn-primary"> OK </button>
                </div>
            </form>
		</div>
	</div>

    <div class="row">
        <div class="col-md-12">

			<code>
{{$word or ''}}
			</code>

			<pre>
{{$json or ''}}
			</pre>
		</div>
	</div>
</div>
@endsection
