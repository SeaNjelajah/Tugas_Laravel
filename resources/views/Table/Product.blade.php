<div class="card">
    <div class="card-header">
        <h3 class="card-title">Table Product</h3>                
        <button type="button" class="float-right inactive btn btn-primary" data-toggle="modal" data-target="#modalCreate">Create</button>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table table-striped">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Stock</th>
            <th>Price</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @php  $num = 1;  @endphp
        @foreach ($data as $item)
        <tr>
            <td>{{ $num++ }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $category[$item->category_id] }}</td>
            <td style="width: 50%;">{{ $item->description }}</td>
            <td>{{ $item->stock }}</td>
            <td>{{ $item->price }}</td>
            <td>
                <form action="{{ Route('TDProduct') }}" method="POST" class="m-0 p-0">
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

<form action="{{ Route('AProduct') }}" method="POST" class="m-0 p-0">
    @csrf
    <div class="modal fade" id="modalCreate" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Product Form</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">                        
                        
                       
                        
                          <div class="card-body">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="namaI">Nama</label>
                                    <input onchange="checkE(this, 1)" name="namaI" type="text" class="form-control" id="namaI" placeholder="Type something...">
                                    <p class="form-text text-muted">Required</p>
                                </div>
                                <div class="form-group col-6">
                                    <label for="CategoryI">Category</label>
                                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" id="CategoryI" name="CategoryI" tabindex="-1" aria-hidden="true">
                                      <option value="null" selected="selected">None</option>
                                      @foreach ($category as $K => $item)
                                      <option value="{{ $K }}">{{ $item }}</option>
                                      @endforeach                                      
                                    </select>
                                    <p class="form-text text-muted">Required</p>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="StockI">Stock</label>
                                    <input onchange="numberE(this,2)" name="StockI" type="text" class="form-control" id="StockI" placeholder="Type something...">
                                    <p class="form-text text-muted">Required, Number only</p>
                                </div>
                                <div class="form-group col-6">
                                    <label for="PriceI">Price</label>
                                    <input onchange="numberE(this,3)" name="PriceI" type="text" class="form-control" id="PriceI" placeholder="Type something...">
                                    <p class="form-text text-muted">Required, Number only</p>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="DesciptionI">Desciption</label>
                                <textarea onchange="checkE(this, 4)" name="DesciptionI" cols="3" class="form-control" id="DesciptionI" placeholder="Type something..."></textarea>
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