@extends('layout.main')

@section('container')
    <div class="card shadow mx-auto my-5">
        <div class="card-body">
            {{-- table --}}
            <livewire:kontak-index></livewire:kontak-index>
            {{-- end table --}}
        </div>
    </div>
@endsection
