@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'categories.store']) !!}

        @include('admin.categories.fields')

    {!! Form::close() !!}
</div>
@endsection
