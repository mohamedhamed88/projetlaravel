@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <a href="/category/create"> Créer une nouvelle categorie</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Categorie</th>
                                <th scope="col">Action</th>


                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->category }}</td>
                                    <td><a href="/category/{{ $category->id }}/edit" class="btn btn-primary">Modifier</a>
                                        <form action="/category/{{ $category->id }}" method="post">
                                            {{ method_field('delete') }}
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
