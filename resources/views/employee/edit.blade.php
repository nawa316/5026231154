  @extends('../template/layout2')

  @section('system', 'Employee')

  @section('title', 'Edit Karyawan')

  @section('subtitle', 'Edit Page')

  @section('content')
      <h3>Edit Karyawan</h3>

      <a href="/employee" class="btn btn-info">Kembali</a>

      <br />
      <br />

      @foreach ($employee as $v)
          <form action="/employee/update" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="id" value="{{ $v->kodepegawai }}">
              <div class="form-group has-success">
                  <label class="control-label col-sm-2" for="id1">
                      Nama Lengkap
                  </label>
                  <div class="col-sm-6">
                      <input class="form-control" type="text" id="id1" placeholder="Input nama lengkap"
                          name="namalengkap" required="required" value="{{ $v->namalengkap }}">
                  </div>
              </div>
              <div class="form-group has-success">
                  <label class="control-label col-sm-2" for="id2">
                      Divisi
                  </label>
                  <div class="col-sm-6">
                      <input class="form-control" type="text" id="id2" placeholder="Input divisi" name="divisi"
                          required="required" value="{{ $v->divisi }}">
                  </div>
              </div>
              <div class="form-group has-success">
                  <label class="control-label col-sm-2" for="id3">
                      Departemen
                  </label>
                  <div class="col-sm-6">
                      <input class="form-control" type="text" id="id3" placeholder="Input departemen"
                          name="departemen" required="required" value="{{ $v->departemen }}">
                  </div>
              </div>
              <input type="submit" class="btn btn-primary" value="Simpan Data">
          </form>
      @endforeach
  @endsection
