@extends('layouts.main')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                {{-- <div class="card-header">{{ __('Rooms') }} </div> --}}
                    
                <div style = "display: flex;" class="card-header ">
                    <div class="main-top d-flex flex-column" style="margin-top: 8px; ">
                        {{ __('Rooms') }}
                      {{-- <i class="">Room</i> --}}
                    </div>
                    <div>
                        <a href="/home" class="btn btn-success">Back</a>
                    </div>
                </div>

                    <div style = "display: flex; text-align: center;" class="card-body ">
                        <div class="main-top d-flex flex-column ">
                        <h3>{{$college->collegeabbr}}</h3>
                        <h4 style="color: #808080;">{{$college->college}}</h4>
                          {{-- <i class=""></i> --}}
                        </div>
                        {{-- <div class="card" style = "display: flex;">
                            <a href="/rooms/form/0/{{$college->id}}" ><button >Add Room</button></a>  
                        </div> --}}
                    </div>
                  
                   
                    <table>
                        
                            <thead>
                                <th>Building/Room No.</th>
                                <th>Status</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </thead>

                            <tbody>
                                @forelse($rooms as $room)
                               
                                    <tr>
                                        <td class="border-top px-0">{{$room->name}}</td>
                                        <td class="border-top px-0">
                                            @if($room->status == 1)
                                                Available
                                            @else 
                                                Occupied
                                            @endif
                                    </td>
                                    <td class="border-top px-0">
                                        @if($room->type == 1)
                                            Lecture
                                        @else 
                                            Laboratory
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#"><button class="btn btn-outline-primary" >Attendees</button></a>
                                        <a href="/rooms/form/{{$room->id}}/{{$college->id}}"><button class="btn btn-outline-primary">Edit</button></a>
                                        {{-- <a href="/"><button class="btn btn-danger">Delete</button></a> --}}
                                        <a href="/attendance/{{$room->token}}/1"><button class="btn btn-outline-success">Time In</button></a>
                                        <a href="/attendance/{{$room->token}}/0"><button class="btn btn-outline-success">Time Out</button></a>
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <button class="rounded bg-blue-500 py-2 px-2 mr-2 btn btn-danger" onclick="deleteName('{{$room->id}}')">DELETE</button>

                                    </td>
                                   
                                    {{-- <td clas="border px-4 py-2">{{$room['type']}}</td> --}}
                                    
                                    {{-- <td class="border px-4 py-2"><button><a href="/name-form/{{$name->id}}"
                                        class="rounded bg-blue-500 py-2 px-2 mr-2">EDIT</a></button> --}}
                                        {{-- <button class="rounded bg-blue-500 py-2 px-2 mr-2"
                                        onclick="deleteName('{{$name->id}}')">DELETE</button></td> --}}
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">
                                            No Rooms Found
                                        </td>
                                    </tr>
                                
                                @endforelse
                                
                            </tbody> 
                         
                        </div> 
                       
                            
                    </table>
                        <div style = "display: flex; " class="card-body backAdd">
                            <div class="card" style = "display: flex;">
                                <a href="/rooms/form/0/{{$college->id}}" ><button class="btn btn-warning">Add Room</button></a>  
                            </div>
                        </div>
                </div>
                
            </div >
             
        </div>
       
    </div>
    
</div>


    
    
    
            
@endsection

@section('script')
    <script>
        function deleteName(id){
            let data = {
                _token: '{{csrf_token()}}',
                id:id
            }
            if(confirm("You're about to delete a Room, Comfirm?")){
                $.post('/delete-name',data,function(result){
                    if(result){
                        alert('Delete Successful');
                        window.location.reload();
                    }
                    
                })
            }
        }
    </script>
@endsection

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700");
*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
    table, th, td{
        /* border: 1px solid; */
        /* margin-top: -2%; */
        padding-bottom: 1%;
        margin-left: 15%;
        justify-items: center;
        align-items: center;
    }

    /* .rooms{
        position: relative;
        background: blue;
        justify-items: center;
        align-items: center;
    } */

    .main-top{
        display: flex;
        width: 100%;
    }

    .backAdd {
        margin-top: -1%;
        margin-left: 78.8%;
    }
    
</style>