@extends('layouts.app')

@section('title-block') Contact @endsection

@section('content')
    <h1>Contacts</h1>


    <form action="{{route('contact-form')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Input name</label>
            <input type="text" name="name" placeholder="Name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Input email</label>
            <input type="email" name="email" placeholder="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Input subject</label>
            <input type="text" name="subject" placeholder="subject" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Input message</label>
            <textarea name="message" id="message" class="form-control"></textarea>
        </div>
        <button type='submit' class="btn btn-success">Submit</button>
    </form>
@endsection