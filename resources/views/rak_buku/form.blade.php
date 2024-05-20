@extends('layouts.app')
@section('title', 'Daftar Rak Buku')
@section('content')
    <script>
    $(function() {
        $("#datepicker").datepicker();
    });

    </script>
    <h2>{{ $store }} Data Rak Buku</h2>
    <form method="POST" action="{{ $action }}">
        @csrf
        @if (strtolower($store) == 'ubah')
            @method('PUT')
        @endif
        <input type="hidden" name="id" value="{{ $rak->id }}" />
        <input type="text" class="mail_text" name="nama" placeholder="Nama Rak" value="{{ $rak->nama }}" />
        <input type="text" class="mail_text" name="lokasi" placeholder="Lokasi" value="{{ $rak->lokasi }}" />
        <input type="text" class="mail_text" name="keterangan" placeholder="keterangan" value="{{ $rak->keterangan }}" />
        <p><input type="text" id="datepicker" name="tanggal" placeholde="tanggal"></p>
        <input type="submit" value="{{ $store }}" />
        <div class="send_bt">   
            <a href="{{ url('/rak_buku') }}">Kembali</a>
        </div>
    </form>
@endsection
