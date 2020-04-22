@extends('_layouts.master')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>

    <form name="contact" method="post" data-netlify="true">
        <div>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="message">Message</label><br>
            <textarea name="message" id="message" required></textarea>
        </div>

        <button type="submit">Send</button>
    </form>
@endsection
