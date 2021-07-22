@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="upload_listing">
        <!-- Banner -->
        <div class="row">
            <div class="messages text-center col-md-12">
                Adding Book
                <p>Submit you Book</p>
                <hr>
            </div>
            <div class="feedback col-md-10">
                <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="email-input">
                        <div class="midemail">
                            <img src="images/feedback/img1.png" alt="">
                            Title
                        </div>
                        <input type="text" name="name" placeholder="Input the Title">
                    </div>
                    <div class="email-input">
                        <div class="midemail">
                            <img src="images/menu-icon/Categoryicon.png" alt="">
                            Category
                        </div>
                        <div class="select-left">
                            <div class="loga">
                                Category
                            </div>
                            <select name="category_id">
                                @foreach($caty as $id=>$val)
                                <option value="{{$id}}"> {{$val}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="email-input">
                        <div class="midemail">
                            <img src="images/feedback/img1.png" alt=""> Description
                        </div>
                        <div class="editors">
                            <ul>
                                <li><strong>B</strong><i>I</i></li>
                            </ul>

                            <div class="clearfix"></div>
                        </div>
                        <textarea placeholder="Write description here" name="description"></textarea>
                    </div>
                    <div class="email-input">

                        <div class="midemail">
                            <img src="images/feedback/screen.png" alt=""> Images
                        </div>
                        </hr>
                        <div class="loga">
                            Cover Image
                        </div>
                        <div class="cover">
                            <img src="images/banner/M-bg.jpg" alt="">
                        </div>
                        <div class="screnshot" id="OpenImgUpload">
                            <button class="btn">Choose File</button>
                            <input type="file" name="cover">
                            <br>
                            <span>Maximum file size 1MB</span>
                        </div>
                        </hr>
                    </div>
                    <div class="email-input">
                        <div class="midemail">
                            <img src="images/feedback/1.png" alt="">
                            Contact Information
                        </div>
                        <div class="loga1">
                            Publishing Company
                        </div>
                        <input type="text" name="company" placeholder="Example : Plural Editora">
                        <div class="loga1">
                            ISBN
                        </div>
                        <input type="text" name="isbn" placeholder="1478-1565-P545E">
                    </div>

                    <div class="email-input searched">
                        <div class="midemail">
                            <img src="images/feedback/img1.png" alt="">
                            Edition
                        </div>
                        <input type="text" name="edition" placeholder="Input the Edition">
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