@extends("layouts.app")

@section("content")
{{--menampilkan error validasi --}}
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $errors)
            <li>{{ $errors }}</li>
        @endforeach
    </ul>
</div>
@endif

<h3> Form Person </h3>
<form method="post" action="/person/addProcess">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="person_name">Nama </label>
        <input type="text" class="form-control" name="person_name" placeholder="input Nama Anda">
    </div>

    <div class="form-group">
        <label for="person_email">Email </label>
        <input type="text" class="form-control" name="person_email" placeholder="input Alamat Email">
    </div>
    <div class="form-group">
        <button type="sumbit" class="btn btn-primary">Sumbit</button>
    </div>
</form>
@stop
