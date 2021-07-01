@extends('layouts.userui')

@section('uiContent')
<div class="container container1">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header row">
                        {{ ('Latest Listings') }}                  
                </div>

                <div class="card-body">
                    @if (count($listings))
                    <ul class="list-group">
                        @foreach ($listings as $listing)
                            <li class="list-group-item"><a href="{{ route('show.listing', $listing) }}">{{ $listing->name }}</a></li>
                        @endforeach
                    @else
                    <p>No listings found </p>
                    @endif             
                </div>
            </div>
        </div>
    </div>
</div>
@endsection