@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div style = "display: flex; text-align: center;">
                        <div class="main-top d-flex flex-column ">
                          <h1>Colleges</h1>
                          <i class=""></i>
                        </div>
                        <!-- ADDING COLLEGE BUTTON -->
                        <div class="card" style = "display: flex; felx-">
                          <a href="form" ><button >Add College</button></a>
                        </div>
                    </div>
                    
                      
                     
                <div class="main-skills  d-flex flex-wrap justify-content-center gap-3">
                        @foreach ($colleges as $college)
                             <div class="card d-flex">
                                <i class=""></i>
                                <h3>{{$college->collegeabbr}}</h3>
                                <p style="color: 	#808080;">{{$college->college}}</p>
                                <button href="rooms">Room</button>
                                <a  class="align-items-start " href="/rooms/{{$college->id}}" ><button >View Room</button></a>
                              </div>
                        @endforeach
                </div>
                        
                        <div class="card">
                            <i class=""></i>
                            <h3>CCIS</h3>
                            <p></p>
                            <button>Open</button>
                          </div>
                        


                          <button type = "submit" name="update_button"><a href="form">Add College</a></button>
                <div class="main-skills  d-flex flex-wrap justify-content-center gap-2">
                    <div class="card">
               
                      
                        <!-- The Modal -->
                        <div id="myModal" class="modal">

                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close">&times;</span>
                            <form id="name-form">
                                    <thead>
                                          <th>College Name </th>
                                        <div class="card">
                                          <div>
                                            <div>
                                              <input type="text" placeholder="enter college">
                                            </div>
                                          </div>
                                        </div>
                                        <th>College Acronym </th>
                                        <div class="card">
                                          <div>
                                            <div>
                                              <input type="text" placeholder="enter college acronym">
                                            </div>
                                          </div>
                                        </div>
                                  </thead>  
                                  </form>
                                  <div>
                                    <button type="submit" value="Submit" onclick="submitName(event)">Submit</button>
                                    
                                </div>
                          </div>

                        </div>
                    </div>
                  
                      </div>

                
            </div>
        </div>
    </div>
  </div>
</div>
<br>
<br>
<div class="container">
  <div class="row justify-content-center">
      <div class="col">
          <div class="card">
              <div class="card-header">{{ __('Recent Room Visited') }}</div>

              <div class="card-body">
                  @if (session('status'))
                
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif


                  <div style = "display: flex; ">
                      <div class="main-top" style = "display: flex;">
                        <h1>Recent Activities</h1> 
                        <i class=""></i>
                      </div>
                        <div class="card" style = "display: flex; felx-">
                        <a href="form" ><button >View Room</button></a>
                        
                      </div>
                  </div>
                  
                    
                    <div class="main-skills  d-flex flex-wrap justify-content-center gap-2">

                    </div>
          </div>
      </div>
  </div>
</div>
</div>

@endsection
<script>
  function submitName(event){
            event.preventDefault();
            $.post('/submitName', $('#name-form').serializeArray(), function(result){
                if(result){
                    alert('Save Successfull');
                    window.location.href ='/names';
                }
            })
        }

  // Get the modal
  var modal = document.getElementById("myModal");
  
  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks the button, open the modal 
  btn.onclick = function() {
    modal.style.display = "block";
  }
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  </script>

<style>
/*  import google fonts */
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
body{
  background: #14437c;
}
.container{
  display: block;
}
/* nav{
  position: relative;
  top: 0;
  bottom: 0;
  height: 100vh;
  left: 0;
  background: #fff;
  width: 280px;
  overflow: hidden;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
} */
/* .logo{
  text-align: center;
  display: flex;
  margin: 10px 0 0 10px;
}
.logo img{
  width: 45px;
  height: 45px;
  border-radius: 50%;
} */
.logo span{
  font-weight: bold;
  padding-left: 15px;
  font-size: 18px;
  text-transform: uppercase;
}
.a{
  position: center;
  color: rgb(85, 83, 83);
  font-size: 14px;
  display: table;
  width: 280px;
  padding: 10px;
}
nav .fas{
  position: relative;
  width: 70px;
  height: 40px;
  top: 14px;
  font-size: 20px;
  text-align: center;
}

.logout{
  position: absolute;
  bottom: 0;
}

/* Main Section */
.main{
  position: relative;
  padding: 20px;
  width: 100%;
}
.main-top{
  display: flex;
  width: 100%;
}
/* .main-top i{
  position: absolute;
  right: 0;
  margin: 10px 30px;
  color: rgb(110, 109, 109);
  cursor: pointer;
} */
.main-skills{
  display: flex;
  margin-top: 20px;
}
.main-skills .card{
  /* width: 200PX; */
  margin: 0px;
  background: #fff;
  text-align: center;
  border-radius: 15px;
  padding: 10px;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.main-skills .card h3{
  margin: 10px;
  text-transform: capitalize;
}
.main-skills .card p{
  font-size: 12px;
}
.main-skills .card button{
  background: rgb(12, 75, 5);
  color: #fff;
  padding: 7px 15px;
  border-radius: 10px;
  margin-top: 15px;
  cursor: pointer;
}
.main-skills .card button:hover{
  background: rgb(255, 203, 0);
}
.main-skills .card i{
  font-size: 22px;
  padding: 10px;
}

/* Courses */
.main-course{
  margin-top:20px ;
  text-transform: capitalize;
}
.course-box{
  width: 100%;
  height: 300px;
  padding: 10px 10px 30px 10px;
  margin-top: 10px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.course-box ul{
  list-style: none;
  display: flex;
}
.course-box ul li{
  margin: 10px;
  color: gray;
  cursor: pointer;
}
.course-box ul .active{
  color: #000;
  border-bottom: 1px solid #000;
}
.course-box .course{
  display: flex;
}
.box{
  width: 33%;
  padding: 10px;
  margin: 10px;
  border-radius: 10px;
  background: rgb(235, 233, 233);
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.box p{
  font-size: 12px;
  margin-top: 5px;
}
.box button{
  background: #000;
  color: #fff;
  padding: 7px 10px;
  border-radius: 10px;
  margin-top: 3rem;
  cursor: pointer;
}
.box button:hover{
  background: rgba(0, 0, 0, 0.842);
}
.box i{
  font-size: 7rem;
  float: right;
  margin: -20px 20px 20px 0;
}
.html{
  color: rgb(25, 94, 54);
}
.css{
  color: rgb(104, 179, 35);
}
.js{
  color: rgb(28, 98, 179);
}

table, td, th {
            border: 1px solid;
      		width: 20%;
      		font-family: 'Poppins', sans-serif;
      		
            }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #eef4ed;
            }

.hidden {

display: none;

}

.modal {
  display: flex; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  display: flex;
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 30%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
  </style>

