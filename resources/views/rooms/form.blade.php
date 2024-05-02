@extends('layouts.main')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                
                {{-- <div class="card-header">{{ __('Rooms') }} <a href="/rooms/{{$college->id}}" class="btn btn-primary">Back</a></div> --}}
                     
                    <div style = "display: flex;" class="card-header ">
                        <div class="main-top d-flex flex-column" style="margin-top: 8px; ">
                            {{ __('Edit Room') }}
                          {{-- <i class="">Room</i> --}}
                        </div>
                        <div>
                            <a href="/rooms/{{$college->id}}" class="btn btn-success">Back</a>
                        </div>
                    </div>
                    <div style = "display: flex; text-align: center;" class="card-body ">
                        <div class="main-top d-flex flex-column ">
                          <h1>{{$college->college}}</h1>
                          {{-- <i class="">Room</i> --}}
                        </div>
                        <div>
                            {{--  --}}
                        </div>
                    </div>


                    <div class="main-form mx-5">
                        <form id="roomsForm">
                            @csrf
                            <input type="text" name="college_id" value="{{$college->id}}" hidden>
                            <input type="text" name="id" value="{{$data['id']}}" hidden>
                            <div class="input-field mb-2">
                                <label for="">Room Description</label>
                                <input type="text" name="room" required placeholder="e.g. Bldg 1, Rm 200" class="form-control" value="{{$data['room']}}">
                            </div>
                            <div class="mb-2 ">
                                <label for="">Room Type</label>
                                <select name="type" id="roomtype" class="form-control">
                                    <option hidden>Type</option>
                                    <option value="2">Laboratory</option>
                                    <option value="1">Lecture</option>
                                </select>
                            </div>
                        
                            <div class="buttons">
                                <button id="submit-btn" type="button" class="submit" onclick="submitRoom(event)">
                                <span type="submit" class="btn btn-success">Save</span></button> &nbsp
                                <a id="submit-btn" type="submit" class="submit" href="/rooms/{{$college->id}}">
                                <span type="submit" class="btn btn-danger">Cancel</span></a>
                            </div> <br>
                        </form>
                      </div>
                  
                
                </div>
                
            </div >
             
        </div>
       
    </div>
    
</div>


    
    
    
            
@endsection

@section('script')
    <script>
        $(()=>{
            $('#roomtype').val({{$data['type']}})
        })
        function submitRoom(event){
            event.preventDefault();
            $.post('/room/saveForm', $('#roomsForm').serializeArray(),function(result){
                if (result){
                    alert('Save Successfully');
                    window.location.href='/rooms/'+{{$college->id}};
                }else{
                    alert('Unsuccessfully Saved');

                }
            })
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
    
    
</style>