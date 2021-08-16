@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.connection.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.connections.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.connection.fields.id') }}
                        </th>
                        <td>
                            {{ $connection->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.connection.fields.database_url') }}
                        </th>
                        <td>
                            {{ $connection->database_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.connection.fields.username') }}
                        </th>
                        <td>
                            {{ $connection->username }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.connection.fields.password') }}
                        </th>
                        <td>
                            {{ $connection->password }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.connections.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<input type="hidden" name="username" value="{{ $connection->username }}" id="username">
<input type="hidden" name="password" value="{{ $connection->password }}" id="password">
<center> <div class="form-group">
    <button type="button" id="connect" class="btn btn-primary">Connect</button>
</div></center>

<script>


$("#connect").click(function(event){
      event.preventDefault();

      let username = $("#username").val();
      let password = $("#password").val();
      let _token   = $('meta[name="csrf-token"]').attr('content');

      connect(username , password , _token , function(response){

         console.log(response)

         if(response.status){

  Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Connection Success',
  showConfirmButton: false,
  timer: 2000
})
         }else{

  Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: response.error,

})

         }
      } , function(ex){
          console.log(ex)
      });


      let timerInterval
Swal.fire({
  title: 'Connecting To Back-end',

  cancelButtonText: 'Cancel',
  showCancelButton: true,
  timer: 2000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()



    // const b = Swal.getHtmlContainer().querySelector('b')
    // timerInterval = setInterval(() => {
    //   b.textContent = Swal.getTimerLeft()
    // }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
//   if (result.dismiss === Swal.DismissReason.timer) {
//     console.log('I was closed by the timer')
//   }

// Swal.DismissReason.timer
})

});












    </script>











<script>

function connect(username , password , _token , success , error ){
    $.ajax({
        url: "{{ route('connections.connect') }}",
        type:"POST",
        data:{
          username:username,
          password:password,
          _token: _token
        },
        success:function(response){
          
           if(response) {
            success(response)
          }
        }, error: function (jqXHR, exception) { 

             error(jqXHR);
         }
       });
}



</script>

@endsection

