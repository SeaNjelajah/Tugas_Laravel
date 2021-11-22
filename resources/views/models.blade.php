@extends('adminTemplate')

@section('name_user')
    Asfahani Astanira G.A
@endsection

@section('content')
  @include($content)
@endsection

@section('script')
@if (Route::is('TProduct'))
<script>

  var checkOb = {
    1: 0,
    2: 0,
    3: 0,
    4: 0,
  }

  function checking (c) {
      var confirm = 0;
      for (let a = 1;a <= 4; a++) {        
        if (checkOb[a] == 1) {
          confirm = 1;
          continue;
        } else {
          confirm = 0;
          document.getElementById('SCreate').className = "btn btn-primary text-muted";
          document.getElementById('SCreate').type = 'button';
          break;
        }
      }

      if (confirm == 1) {
        document.getElementById('SCreate').className = "btn btn-primary";
        document.getElementById('SCreate').type = 'submit';
      }
  }


  numberE = (where, id) => {
    if (!isNaN(where.value) && where.value) {
      if (checkOb[id] != 1) checkOb[id] = 1;
      checking(checkOb);
    } else {
      if (checkOb[id] != 0) checkOb[id] = 0;
      checking(checkOb);
    }
  }
 

  checkE = (where, id) => {
    if (where.value) {
      if (checkOb[id] != 1) checkOb[id] = 1;
      checking(checkOb);
    } else {
      if (checkOb[id] !=0 ) checkOb[id] = 0;
      checking(checkOb);
    }
  }

  
  
</script>
@elseif (Route::is('TCategory'))
<script>

  var checkOb = {
    1: 0,
    2: 0,
  }

  function checking () {
      var confirm = 0;
      for (let a = 1;a <= 2; a++) {        
        if (checkOb[a] == 1) {
          confirm = 1;
          continue;
        } else {
          confirm = 0;
          document.getElementById('SCreate').className = "btn btn-primary text-muted";
          document.getElementById('SCreate').type = 'button';
          break;
        }
      }

      if (confirm == 1) {
        document.getElementById('SCreate').className = "btn btn-primary";
        document.getElementById('SCreate').type = 'submit';
      }
  }


  numberE = (where, id) => {
    if (!isNaN(where.value) && where.value) {
      if (checkOb[id] != 1) checkOb[id] = 1;
      checking(checkOb);
    } else {
      if (checkOb[id] != 0) checkOb[id] = 0;
      checking(checkOb);
    }
  }
 

  checkE = (where, id) => {
    if (where.value) {
      if (checkOb[id] != 1) checkOb[id] = 1;
      checking();
    } else {
      if (checkOb[id] !=0 ) checkOb[id] = 0;
      checking();
    }
  }

  
  
</script>
@elseif (Route::is('TCustomer'))
<script>

  var checkOb = {
    1: 0,
    2: 0,
    3: 0,
    4: 0
  }

  function checking () {
      var confirm = 0;
      for (let a = 1;a <= 4; a++) {        
        if (checkOb[a] == 1) {
          confirm = 1;
          continue;
        } else {
          confirm = 0;
          document.getElementById('SCreate').className = "btn btn-primary text-muted";
          document.getElementById('SCreate').type = 'button';
          break;
        }
      }

      if (confirm == 1) {
        document.getElementById('SCreate').className = "btn btn-primary";
        document.getElementById('SCreate').type = 'submit';
      }
  }


  numberE = (where, id) => {
    if (!isNaN(where.value) && where.value) {
      if (checkOb[id] != 1) checkOb[id] = 1;
      checking(checkOb);
    } else {
      if (checkOb[id] != 0) checkOb[id] = 0;
      checking(checkOb);
    }
  }
 

  checkE = (where, id) => {
    if (where.value) {
      if (checkOb[id] != 1) checkOb[id] = 1;
      checking();
    } else {
      if (checkOb[id] !=0 ) checkOb[id] = 0;
      checking();
    }
  }

  
  
</script>
@endif

@endsection