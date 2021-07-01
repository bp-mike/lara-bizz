@extends('layouts.app')

@section('content')
@include('inc.messages')
{{-- <div class="container"> --}}
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header row">
                    <div class="col-8">
                        {{ __('Dashboard') }}
                    </div>
                    <div class="col-4">
                        <a class="btn btn-success btn-xs" href="{{ route('create.listing')}}"><span>Add Listing</span></a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3> your listngs</h3>
                    @if (count($listings))
                        <table class="table table-striped">
                            <tr>
                                <th>Company(s)</th>
                                <th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
                            </tr>
                            @foreach ($listings as $listing)
                                <tr>
                                    <td>{{$listing->name}}</td>
                                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                                    <td><a href="{{route('edit.listing', $listing)}}" class="btn btn-secondary">Edit</a></td>
                                    <td>
                                        <form action="{{route('edit.listing', $listing)}}" method="POST" 
                                            onsubmit="return confirm('are you sure')"
                                        >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}
@endsection

