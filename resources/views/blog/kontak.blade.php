<!-- Menghubungkan dengan view template master -->
@extends('template/master')
 
<!-- isi bagian title -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Kontak')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
	<p>Ini Adalah Halaman Kontak</p>
	
	<table border="1">
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>malasngoding@gmail.com</td>
		</tr>
		<tr>
			<td>Hp</td>
			<td>:</td>
			<td>0896-0676-7404</td>
		</tr>
	</table>
@endsection

<!-- isi bagian footer -->
@section('footer')
  <p>&copy; Copyright by Muhammad Ade Dzakwan</p>
@endsection 