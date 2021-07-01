@extends('layouts.userui')

@section('uiContent')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header row">
                <div class="col-8">
                    {{ $listing->name }}
                </div>
                <div class="col-4">
                    <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Go back</a>
                </div>
            </div>

            <div class="card-body">
              <ul class="list-group">
                  <li class="list-group-item">Address: {{ $listing->address }}</li>                 
                  <li class="list-group-item">Website: <a href="{{ $listing->website }}" target="_blank">{{ $listing->website }}</a></li>                 
                  <li class="list-group-item">Email: {{ $listing->email }}</li>                 
                  <li class="list-group-item">Phone: {{ $listing->phone }}</li>                 
                  <li class="list-group-item">Bio: {{ $listing->bio }}</li>                 
            </div>
            Bio
            <div class="card-footer">
                {{ $listing->bio }}
            </div>

        </div>
    </div>
</div>
@endsection