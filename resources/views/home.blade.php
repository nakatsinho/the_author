@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Banner -->
    <div class="row leftside">
        <div class="messages text-center col-md-12">
            All Categories
            <hr>
        </div>
        @foreach($caty as $value)
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="listing">
                <h3>{{$value->name}}<h3>
                        <ul>
                            <?php $book = DB::table('books')->where('category_id',$value->id)->limit(10)->get() ?>
                            @forelse($book as $value2)
                            <li><a href="{{ route('books.show',$value2->id) }}">{{$value2->name}}</a></li>
                            @empty
                            <li><a href="#">No Books Added Yet</a></li>
                            @endforelse
                        </ul>
            </div>
        </div>
        @endforeach
        <div class="clearfix"></div>
    </div>
</div>
<!-- /.content-wrapper -->
@endsection