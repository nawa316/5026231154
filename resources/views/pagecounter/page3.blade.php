@extends('../template')

@section('content')
    <a href="/pagecounter" class="btn btn-success">Home Page</a>
    <h3>Page Counter: Page 3</h3>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Total Views:</strong> {{ $page->jumlah }}
    </div>

    <a href="/pagecounter/page1" class="btn btn-info">Page 1</a>
    <a href="/pagecounter/page2" class="btn btn-info">Page 2</a>
    <a href="/pagecounter/page3" class="btn btn-primary">Page 3</a>
@endsection
