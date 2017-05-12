@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading"><h1>New Product</h1></div>
            <div class="panel-body">
                {!! Form::open(array('route' => 'products.store')) !!}
                    <div class="form-group">
                        {{ Form::label('code', 'Code') }}
                        {{ Form::text('code', '', ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', '', ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('category_id', 'Category') }}
                        {!! Form::select('category_id', $categories, null, ['class' => 'form-control'])  !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('price', 'Price') }}
                        {{ Form::text('price', '', ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('increment', 'Increment') }}
                        {{ Form::text('increment', '', ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('autoincrement', 'AutoIncrement') }}
                        {{ Form::text('autoincrement', '', ['class' => 'form-control']) }}
                    </div>
                {{ Form::submit('Create', ['class' => 'btn btn-success btn-lg btn-block']) }}
                {!! Form::close() !!}

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
