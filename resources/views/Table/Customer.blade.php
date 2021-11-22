<div class="card">
    <div class="card-header">
        <h3 class="card-title">Table Customer</h3>                
        <button type="button" class="float-right inactive btn btn-primary" data-toggle="modal" data-target="#modalCreate">Create</button>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table table-striped">
        <thead>
          <tr>
            <th style="width: 10px">ID</th>
            <th>Email</th>
            <th>Password</th>
            <th>address</th>
            <th>Phone</th>
            <th style="width: 8%;">Action</th>
          </tr>
        </thead>
        <tbody>
        
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->password }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->phone }}</td>
                <td>
                    <form action="{{ Route('TDCustomer') }}" method="POST" class="m-0 p-0">
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

<form action="{{ Route('ACustomer') }}" method="POST" class="m-0 p-0">
    @csrf
    <div class="modal fade" id="modalCreate" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Customer Form</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">                                                                       
                        
                        <div class="card-body">
                            
                            <div class="form-group">
                                <label for="EmailI">Email</label>
                                <input onchange="checkE(this, 1)" name="EmailI" type="email" class="form-control" placeholder="Type something...">
                                <p class="form-text text-muted">Required</p>
                            </div>                                
                            
                            <div class="form-group">
                                <label for="PasswordI">Password</label>
                                <input onchange="checkE(this, 2)" type="password" class="form-control" name="PasswordI" placeholder="Password">
                                <p class="form-text text-muted">Required</p>
                            </div>      
                            
                            <div class="form-group">
                                <label for="AddressI">Address</label>
                                <input onchange="checkE(this, 3)" name="AddressI" type="text" class="form-control" placeholder="Type something...">
                                <p class="form-text text-muted">Required</p>
                            </div>

                            <div class="form-group">
                                <label for="PhoneI">Phone</label>
                                <input onchange="numberE(this, 4)" name="PhoneI" type="text" class="form-control"  placeholder="Type something...">
                                <p class="form-text text-muted">Required, Number Only</p>
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