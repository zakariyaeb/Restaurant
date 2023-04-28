

    <x-app-layout>


    </x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
    <title>users</title>
      @include("admin.admincss")
    </head>
    <body>
     
       
          
        <div class="d-flex  vh-100">
    
       @include("admin.navbar")
       <table class="table table-striped ">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach($data as $data)
          <tr>
            <th scope="row">{{$data->name}}</th>
            <td>{{$data->email}}</td>

            @if($data->usertype=="0")
            <td><a href="{{ url('/deleteuser',$data->id)}}">Delete</a></td>
            @else
            <td>Not Allowed</td>
            @endif
          </tr>
           @endforeach
        </tbody>
      </table>
          
        </div>
            
         
     @include("admin.adminscript")
    </body>
    
    </html>


