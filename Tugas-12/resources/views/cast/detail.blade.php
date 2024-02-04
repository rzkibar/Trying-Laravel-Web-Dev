@extends('layouts.master')

@section('judul', 'Detail Data')

@section('content')
    <p>Nama: {{ $CastById->nama }}</p>
    <p>Umur: {{ $CastById->umur }}</p>
    <p>Bio: {{ $CastById->bio }}</p>
@endsection