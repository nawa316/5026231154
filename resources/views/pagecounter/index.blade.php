@extends('../template')

@section('content')
    <h3>All Page Counter</h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Page</th>
            <th>Jumlah View</th>
            <th>Opsi</th>
        </tr>

        @foreach ($pageCounters as $p)
            <tr>
                <td>{{ 'Page ' . $p->id }}</td>
                <td>{{ $p->jumlah }}</td>
                <td>
                    <a href="/pagecounter/page{{ $p->id }}" class="btn btn-info">View Page {{ $p->id }}</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
