@extends('layouts.app')

@section('content')
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h3>Form Person</h3>
    <form action="/person/addProcess"method="post">
        @csrf
        <div class="form-group">
            <label for="person_name">Nama</label>
            <input type="text" class="form-control" name="person_name" placeholder="Input Nama Anda">
        </div>

        <div class="form-group">
            <label for="person_email">Email</label>
            <input type="email" class="form-control" name="person_email" placeholder="Input Alamat Email">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection