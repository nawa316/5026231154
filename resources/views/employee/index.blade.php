@extends('/template/layout2')

@section('system', 'Employee')

@section('title', 'Homepage')

@section('page-title', 'Home Page')

@section('content')
    <div class="container w-full">
        <h3>List Karyawan</h3>

        <p>Cari Data Karyawan :</p>
        <form action="/employee/search" method="GET">
            <input class="form-control" type="text" name="cari" placeholder="Cari Karyawan ..">
            <input type="submit" value="Cari" class="btn btn-info">
        </form>
        <br />

        <table class="table table-striped table-hover">
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th>Action</th>
            </tr>

            @foreach ($employee as $v)
                <tr>
                    <td>{{ $v->kodepegawai }}</td>
                    <td>{{ $v->namalengkap }}</td>
                    <td>{{ $v->divisi }}</td>
                    <td>{{ $v->departemen }}</td>
                    <td>
                        <a href="/employee/edit/{{ $v->kodepegawai }}" class="btn btn-success">Edit</a>
                        <a href="/employee/delete/{{ $v->kodepegawai }}" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $employee->links() }}
    </div>
@endsection
