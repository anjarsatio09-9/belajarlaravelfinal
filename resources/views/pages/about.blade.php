@extends('layouts.master')

@section('content')
<div>
    <h1>Selamat Datang</h1>
	<p>Saya {{ $nama }}, Dari Kelas {{ $kelas }} Dengan Nim {{ $nim }}</p>
</div>

@endsection