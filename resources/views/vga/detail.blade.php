@extends('/template/layout')

@section('title', 'Detail VGA')

@section('subtitle', 'Detail Page')

@section('content')
  <a href="/vga" class="btn btn-primary">Kembali</a>
  <br/><br/>
  <h3>Detail VGA</h3>
  <div style="display: flex; flex-direction: row; align-items: center;">
    <div>
      <img src={{ $vga->id%2 == 0 ? $image[0] : $image[1] }} alt="image" style="width: 500px; height: 500px;">
    </div>
    <div style="margin-left: 20px; font-size: 24px;">
      <p>ID: {{ $vga->id }}</p>
      <p>Merk: {{ $vga->merk_vga }}</p>
      <p>Harga: {{ $vga->harga_vga }}</p>
      <p>Tersedia: {{ $vga->tersedia == 1 ? 'Ya' : 'Tidak' }}</p>
      <p>Berat: {{ $vga->berat }}</p>
    </div>
  </div>
  <br/>
  <div>
    <a href="/vga/detail/{{ $vga->id == 1 ? 1 : $vga->id-1 }}" class="btn btn-info">Sebelumnya</a> 
    <a href="/vga/detail/{{ $vga->id+1 }}" class="btn btn-info">Selanjutnya</a> 
  </div>
@endsection