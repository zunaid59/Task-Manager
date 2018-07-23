@extends('layouts.index')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">{{ __('ADD') }}</div>

                    <div class="card-body">

                        <form action="" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            {!! csrf_field() !!}
                            Name:
                            <input type="text"  class="form-control" value="{{$data->name}}"><br>
                            Name:
                            <input type="text" class="form-control" value="{{$data->email}}"><br>
                        </form>

                    </div>

                    </div>
                </div>
            </div>
        </div>
@endsection