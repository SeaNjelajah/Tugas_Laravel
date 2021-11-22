<div class="card">
    <div class="card-header">
        <h3 class="card-title">Table Category</h3>                
        <button type="button" class="float-right inactive btn btn-primary" data-toggle="modal" data-target="#modalCreate">Create</button>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table table-striped">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th style="width: 10px">Name</th>
            <th>Description</th>
            <th style="width: 8%;">Action</th>
          </tr>
        </thead>
        <tbody>
        @php  $num = 1;  @endphp
        @foreach ($data as $item)
            <tr>
                <td>{{ $num++ }}</td>
                <td>{{ $item->name }}</td>
                <td style="width: 50%;">{{ $item->description }}</td>
                <td>
                    <form action="{{ Route('TDCategory') }}" method="POST" class="m-0 p-0">
                        @csrf
                        <input type="hidden" name="pass" value="{{ $item->id }}">
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
          
          
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
</div>

<form action="{{ Route('ACategory') }}" method="POST" class="m-0 p-0">
    @csrf
    <div class="modal fade" id="modalCreate" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Category Form</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">                                                                       
                        
                        <div class="card-body">
                            
                            <div class="form-group">
                                <label for="namaI">Nama</label>
                                <input onchange="checkE(this, 1)" name="namaI" type="text" class="form-control" id="namaI" placeholder="Type something...">
                                <p class="form-text text-muted">Required</p>
                            </div>                                
                            
                                                
                            
                            <div class="form-group">
                                <label for="DesciptionI">Desciption</label>
                                <textarea onchange="checkE(this, 2)" name="DesciptionI" cols="3" class="form-control" id="DesciptionI" placeholder="Type something..."></textarea>
                                <p class="form-text text-muted">Required</p>
                            </div>
                        </div>
                                    
                        
                      </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id="SCreate" type="button" class="btn btn-primary text-muted">Save changes</button>
                </div>
            </div>              
        </div>            
    </div>
</form>
