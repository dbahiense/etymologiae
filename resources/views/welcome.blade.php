@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <form class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Search">
                </div>
            </form>

{{$result}}

<pre>
{{$json}}
</pre>

{{$data}}
        </div>
    </div>

</div>
@endsection
