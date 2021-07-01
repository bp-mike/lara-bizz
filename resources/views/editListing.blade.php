@extends('layouts.app')

@section('content')
@include('inc.messages')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header row">
                <div class="col-8">
                    {{ __('Edit Listing') }}
                </div>
                <div class="col-4">
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                </div>
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif                    
            </div>

           <div class="container">
               <hr />
            <form action="{{ route('edit.listing', $listing)}}" method="POST" class="m-4">
                @csrf
                @method('PUT')
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Company Name" value="{{ $listing->name }}">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="example@mail.com" value="{{ $listing->email }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Tel:no" value="{{ $listing->phone }}">
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" value="{{ $listing->address }}">
                </div>
                <div class="form-group">
                  <label for="website">Website</label>
                  <input type="text" name="website" class="form-control" id="website" placeholder="company website" value="{{ $listing->website }}">
                </div>
                <div class="form-group">
                  <label for="bio">Bio</label>
                  <textarea name="bio" class="form-control" id="bio" rows="5" placeholder="about the business">{{ $listing->bio }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
              </form>
           </div>
        </div>
    </div>
</div>
@endsection

