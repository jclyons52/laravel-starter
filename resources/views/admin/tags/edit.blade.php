@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'patch']) !!}

        @include('admin.tags.fields')

    {!! Form::close() !!}
</div>
@endsection
