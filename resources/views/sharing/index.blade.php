@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Banner -->
    <div class="row leftside">
        <div class="messages text-center col-md-12">
            All Shared Books
            <hr>
        </div>
        @forelse($book as $value)
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="listing">
                <h3>{{$value->name}}
                    <h3>
                        <ul>
                            <li><a href="{{ route('profile.show',$value->user_id) }}">Shared by {{$value->user->name}}</a></li>
                            <li>Edition: {{$value->edition}}</li>
                            <li>Company: {{$value->company}}</li>
                        </ul>
            </div>
        </div>
        @empty
        <div>
            <p class="text-center">No Shared Books Yet</p>
        </div>
        @endforelse
        <div class="clearfix"></div>
    </div>
</div>
@endsection