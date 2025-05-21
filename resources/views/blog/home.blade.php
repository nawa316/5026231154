<!-- Menghubungkan dengan view template master -->
@extends('template/master')
 
<!-- isi bagian title -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Home')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
	<p>Ini Adalah Halaman Home</p>
	<p>Selamat datang !</p>
@endsection

<!-- isi bagian footer -->
@section('footer')
  <p>&copy; Copyright by Muhammad Ade Dzakwan</p>
@endsection