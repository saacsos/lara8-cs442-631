@extends('layouts.main')

@section('content')
    <h1>Show Page</h1>

    {{-- Blade Comment --}}
    <!-- HTML Comment -->

    <p>ID: {{ $id }}</p>
    <p>Name: {{ $name }}</p>

    @if ($id > 100)
        <p>{{ $id }} > 100</p>
    @endif

    @unless ($id > 100)
        <p>{{ $id }} <= 100</p>
    @endunless

    @isset($records)
        <p>มีตัวแปร $records ให้ใช้งาน</p>
    @endisset

    @empty($array)
        <p>ตรวจสอบแล้วเป็น array ว่าง หรือ string ว่าง หรือค่า null</p>
    @endempty
@endsection
