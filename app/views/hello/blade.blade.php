
@extends ('hello.layout')
@section('content')
<p>This is my content</p>
@stop

@section ('head')
@parent
<p>new Head</p>
@stop

