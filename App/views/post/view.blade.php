@extends('layout/master')

@section('maincontent')
<div class="container">
    <div class="v-main">
        <div class="row d-flex justify-content-center">
            <div class="mt-5 col-10">
                <div class="card">
                    <div class="card-header">
                        {{$data->title}} 
                        <span class="badge badge-light">
                            {{ $data->writer }}
                        </span>
                        <span class="badge badge-primary">
                            {{ $data->wdate }}
                        </span>
                    </div>
                    <div class="v-content">
                        <div class="card-body">
                            {!! $data->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection