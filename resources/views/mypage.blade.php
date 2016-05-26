@extends('masterf')

@section('body')
	@foreach($tasks as $task)
	{{$task->name}}
	<br/>ggg
	@endforeach
@stop
