@extends('template')

@section('content')
    <ul>
        @foreach ($categories as $category)
            <li>{{ $category->category }}</li>
        @endforeach
    </ul>
@endsection

@section('footer')
    <div class="links">
        <a href="/libre">Libre</a>
        <a href="{{ route('autre') }}">Libre aver route name</a>
        <a href="/libre/foued">Libre parametrer</a>
        <a href="{{ route('parametre', 'Ali') }}">
            Libre parametrer aver route name</a>

    </div>

@endsection
