@extends('layouts.master')

@section('judul', ' Edit Data')

@section('content')

<div>
        <form action="/cast/{{ $CastById->id }}" method="POST">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="title">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" value={{ $CastById->nama }}>
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Umur</label>
                <input type="text" class="form-control" name="umur" id="umur" placeholder="Masukkan Umur" value={{ $CastById->umur }}>
                @error('umur')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Bio</label>
                <textarea type="text" class="form-control" name="bio" id="bio" placeholder="Masukkan Bio">{{ $CastById->bio }}</textarea>
                @error('bio')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
</div>
    
@endsection