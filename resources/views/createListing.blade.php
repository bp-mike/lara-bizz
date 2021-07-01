@extends('layouts.app')

@section('content')
@include('inc.messages')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header row">
                <div class="col-8">
                    {{ __('Create Listing') }}
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
            <form action="{{ route('create.listing')}}" method="POST" class="m-4">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Company Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="example@mail.com">
                  </div>
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Tel:no">
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                  <label for="website">Website</label>
                  <input type="text" name="website" class="form-control" id="website" placeholder="company website">
                </div>
                <div class="form-group">
                  <label for="bio">Bio</label>
                  <textarea name="bio" class="form-control" id="bio" rows="5" placeholder="about the business"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
              </form>
           </div>
        </div>
    </div>
</div>
@endsection

