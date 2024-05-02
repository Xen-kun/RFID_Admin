@extends('layouts.main')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">

                    <div style = "display: flex;" class="card-header ">
                        <div class="main-top d-flex flex-column" style="margin-top: 8px; ">
                            {{ __('Rooms Attendance') }}
                        {{-- <i class="">Room</i> --}}
                        </div>
                        <div>
                            <a href="/home" class="btn btn-success">Exit</a>
                            
                        </div>
                    </div>
                    
                    <div style = "display: flex; text-align: center;" class="card-body">
                        <div class="main-top d-flex flex-column ">
                          <h1>{{$room->college}}</h1>
                          <div>
                            {{$room->name}}
                          </div>
                          @if ($in_out == '1')
                              <div>
                            Time In
                          </div>
                          @else
                          <div>
                            Time Out
                          </div>
                          @endif
                          {{-- <form onkeypress="submitAttendance(event)" id="rfid-form">
                                @csrf
                              <input type="text" name="token" value='{{$room->token}}' hidden>
                              <input type="text" name="in_out" value='{{$in_out}}' hidden>
                              <input type="text" id="rfid" name="rfid" onkeypress="myFunction()">
                            </form> --}}

                            <form id="rfid-form">
                                @csrf
                                <input type="text" name="token" value='{{$room->token}}' hidden>
                                <input type="text" name="in_out" value='{{$in_out}}' hidden>
                                <input type="text" id="rfid" name="rfid" onkeypress="handleKeyPress(event)" autofocus>
                            </form>
                          <body onload=display_ct();>
                            <span id='ct' ></span>
                          <i class=""></i>
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
        var rfid = '';
        $(()=>{
            $("#rfid").focus()
        })

        // function submitAttendance(event) {
        //     event.preventDefault();
        //     alert('mayat')
        // }

        var student_list = [
            "Arby Anne Camorongan, 20-020196",  
            "Mark James Agustin, 20-020066",
            "Danilo Simon Jr., 20-020137",
            "Dharen Rojan Tagalicud, 19-020007"
        ];

        

        function getStudentName(){
            return student_list[Math.floor(Math.random()*student_list.length)];
        }

        

        function handleKeyPress(event) {
            if (event.key === "Enter") {
                event.preventDefault(); // Prevent form submission
                const inputElement = document.getElementById("rfid");
                const inputValue = inputElement.value.trim(); // Remove whitespace
                if (inputValue !== "") {
                    // alert(inputValue);
                    inputElement.value="";
                    alert(getStudentName());
                }
            }
        }








        function myFunction() {
            rfid = $("#rfid").val();
            // alert(rfid)
        }

        function display_c(){
            var refresh=1000; // Refresh rate in milli seconds
            mytime=setTimeout('display_ct()',refresh)
        }

            function display_ct() {
            var x = new Date()
            document.getElementById('ct').innerHTML = x;
            display_c();
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