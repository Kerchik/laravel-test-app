@extends('layouts.app')

@section('title-block') Contact @endsection

@section('content')
    <h1>Update message</h1>


    <form action="{{route('contact-update-submit', $data->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Input name</label>
            <input type="text" name="name" placeholder="Name" value="{{$data->name}}" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Input email</label>
            <input type="email" name="email" placeholder="email" value="{{$data->email}}" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Input subject</label>
            <input type="text" name="subject" placeholder="subject" value="{{$data->subject}}" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Input message</label>
            <textarea name="message" id="message" class="form-control">{{$data->message}}</textarea>
        </div>
        <button type='submit' class="btn btn-success">Update</button>
    </form>
@endsection