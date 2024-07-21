@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Church Sermons
            </div>
            <div class="card-body">
                <p>Listen to the latest sermon:</p>
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/VIDEO_ID_HERE" frameborder="0" allowfullscreen></iframe>
                <p>Reflect on the Word:</p>
                <p>"The LORD is my shepherd; I shall not want." - Psalm 23:1</p>
            </div>
        </div>
    </div>
@endsection
