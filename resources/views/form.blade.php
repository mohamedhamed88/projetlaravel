@extends('template')
@section('content')
    <form action="/submitform" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Champs 1</label>
            <input type="text" name="champ1" class="form-control" id="exampleInputEmail1" placeholder="Champs 1">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">champs 2</label>
            <input type="text" name="champ2" class="form-control" id="exampleInputPassword1" placeholder="Champs 2">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@endsection
