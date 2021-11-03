@extends('adminTemplate')

@section('name_user')
    Asfahani Astanira G.A
@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Responsive Hover Table</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama Tank</th>
                <th>Meriam</th>
                <th>Negara</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['NamaTank'] }}</td>
                <td>{{ $item['Meriam'] }}</td>
                <td><span class="tag">{{ $item['Negara'] }}</span></td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection