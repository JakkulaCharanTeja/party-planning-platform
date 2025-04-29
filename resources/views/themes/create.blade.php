@extends('layouts.app')

@section('content')
    <h1>Create Custom Theme</h1>

    <form action="{{ route('createTheme') }}" method="POST">
        @csrf
        <label for="theme_name">Theme Name</label>
        <input type="text" name="theme_name" id="theme_name" required>

        <label for="primary_color">Primary Color</label>
        <input type="color" name="primary_color" id="primary_color">

        <label for="secondary_color">Secondary Color</label>
        <input type="color" name="secondary_color" id="secondary_color">

        <button type="submit">Save Theme</button>
    </form>
@endsection
