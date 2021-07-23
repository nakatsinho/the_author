@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="upload_listing">
        <!-- Banner -->
        <div class="row">
            <div class="messages text-center col-md-12">
                Sharing a Book
                <p>Share you Book</p>
                <hr>
            </div>
            <div class="feedback col-md-10">
                <form action="{{ route('sharing.store') }}" method="POST">
                    @csrf
                    <div class="email-input">
                    <div class="midemail">
                            <img src="images/menu-icon/Categoryicon.png" alt="">
                            Select the User
                        </div>
                        <div class="select-left">
                            <div class="loga">
                                Users
                            </div>
                            <select name="shared_id">
                                @foreach($user as $id=>$val)
                                <option value="{{$id}}"> {{$val}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="email-input">
                        <div class="midemail">
                            <img src="images/menu-icon/Categoryicon.png" alt="">
                            Select the Book
                        </div>
                        <div class="select-left">
                            <div class="loga">
                                Books
                            </div>
                            <select name="book_id">
                                @foreach($book as $id=>$val)
                                <option value="{{$id}}"> {{$val}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="sends">
                        <input type="submit" value="Submit">
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@endsection