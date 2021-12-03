@extends('layout.main')

    <style>
    #box{
    margin-top: -30px;
    background-color: #e4ebe5;
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
    padding: 40px;
    height: auto;
    width: 500px;
    }
    #btncheck1{
        text-align:center;
    }
    .button{
        margin-top:10px;
    }
    .margin{
        margin-top:15px;
        margin-bottom: 1px;
    }
    h1{
        color: #43ccb3;
    }
    h6{
        color: #43ccb3;
    }
    </style>

  <body>
    <form action="{{ route('welcome') }}" method="post">
    @csrf  
    <div class="container-sm">
        <div class="row justify-content-center">
            <div id="box" class="col-md-auto">

                <h1>Booking Details</h1>
                <p><b>Fill up the need information to continue</b></p>

                <h6>Appointment Date</h6>
                
                <h6><input type="text" value="Select Date" id="datepicker"></h6>

                <p class="margin"><b>Morning</b></p>
                
                <div class="row justify-content-md-center">
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck1">08:30AM</label> 
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck2">09:00AM</label>
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck3">09:30AM</label>
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck4">10:00AM</label>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-md-center">
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck5">10:30AM</label> 
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck6">11:00AM</label>
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck7">11:30AM</label>
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck8">12:00AM</label>
                        </div>
                    </div>
                </div>

                <p class="margin"><b>Evening</b></p>
                
                <div class="row justify-content-md-center">
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btncheck9" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck9">12:30NN</label> 
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btncheck10" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck10">01:00PM</label>
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btncheck11" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck11">01:30PM</label>
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btncheck12" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck12">02:00PM</label>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-md-center">
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btncheck13" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck13">02:30PM</label> 
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btncheck14" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck14">03:00PM</label> 
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btncheck15" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck15">03:30PM</label>
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btncheck16" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck16">04:00PM</label>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-md-center">
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btncheck17" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck17">04:30PM</label> 
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btncheck18" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck18">05:00PM</label>
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btncheck19" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck19">05:30PM</label>
                        </div>
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="btncheck20" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck20">06:00PM</label>
                        </div>
                    </div>
                </div>

                <p class="margin"><b>Service types</b></p>

                <h6><b>Service types</b></h6>

                <select class="form-select" id="types" aria-label="Default select example" name="types">
                    <option selected>Choose here</option>
                    <option value="In-lounge">In-lounge</option>
                    <option value="Home Service">Home Service</option>
                </select>

                <h6><b>Service Categories</b></h6>

                <select class="form-select" id="categories" aria-label="Default select example" name="categories">
                    <option selected>Choose here</option>
                    <option value="LASH">LASH</option>
                    <option value="WAX">WAX</option>
                    <option value="NAILS">NAILS</option>
                    <option value="FOOT SPA">FOOT SPA</option>
                    <option value="PARAFFIN">PARAFFIN</option>
                    <option value="KIDDIE">KIDDIE</option>
                </select>

                <h6><b>Special Service</b></h6>

                <select class="form-select" id="service" aria-label="Default select example">
                    <option selected>Choose here</option>
                </select>

                <input type="submit" value="SUBMIT" name="#" class="btn btn-light button">


            </div>
        </div>
    </div>
    </form>
  </body>
@section('scripts')
  <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );

        $(document).ready(function() {
  
        $("#categories").change(function() {
            
            var el = $(this) ;
            var len = 40;

            if(el.val() === "LASH" ) {
                for(let i = 0; i<len; i++){
                    $("#service option:last-child").remove();
                }

                $("#service").append("   <option>Choose here</option>");
                $("#service").append("   <option>Natural Lash Extension</option>");
                $("#service").append("   <option>5D Lash Extension</option>");
                $("#service").append("   <option>Lash Removal</option>");
                $("#service").append("   <option>Retouch</option>");
                $("#service").append("   <option>Eyelash Repair</option>");
                $("#service").append("   <option>Oh! Happy Day Package</option>");
            }
            else if(el.val() === "WAX") {
                for(let i = 0; i<len; i++){
                    $("#service option:last-child").remove();
                }

                $("#service").append("   <option>Choose here</option>");
                $("#service").append("   <option>Arm Wax</option>");
                $("#service").append("   <option>Back Wax</option>");
                $("#service").append("   <option>Bikini Wax</option>");
                $("#service").append("   <option>Brazillian Wax</option>");
                $("#service").append("   <option>Butt Cheek Wax</option>");
                $("#service").append("   <option>Chest Wax</option>");
                $("#service").append("   <option>Eyebrow</option>");
                $("#service").append("   <option>Brazillian Wax</option>");
                $("#service").append("   <option>Whole Face Wax</option>");
                $("#service").append("   <option>Fingers Wax</option>");
                $("#service").append("   <option>Full Body Wax</option>");
                $("#service").append("   <option>Full Leg Wax</option>");
                $("#service").append("   <option>Knees Wax</option>");
                $("#service").append("   <option>Lower Lip Wax</option>");
                $("#service").append("   <option>Brazillian with Soothing Mask Wax</option>");
                $("#service").append("   <option>Brazillian Wax</option>");
                $("#service").append("   <option>Nape Wax</option>");
                $("#service").append("   <option>Nosetrils Wax</option>");
                $("#service").append("   <option>Toes Wax</option>");
                $("#service").append("   <option>Underarm Wax</option>");
                $("#service").append("   <option>Upper Lip Wax</option>");
            }
            else if(el.val() === "NAILS" ) {
                for(let i = 0; i<len; i++){
                    $("#service option:last-child").remove();
                }

                $("#service").append("   <option>Choose here</option>");
                $("#service").append("   <option>Manicure</option>");
                $("#service").append("   <option>Pedicure</option>");
                $("#service").append("   <option>Gel Manicure</option>");
                $("#service").append("   <option>Gel Pedicure</option>");
                $("#service").append("   <option>Gel Removal</option>");
            }
            else if(el.val() === "FOOT SPA") {
                for(let i = 0; i<len; i++){
                    $("#service option:last-child").remove();
                }
                
                $("#service").append("   <option>Choose here</option>");
                $("#service").append("   <option>Regular Foot Spa</option>");
                $("#service").append("   <option>Foot Logix</option>");
            }
            else if(el.val() === "PARAFFIN") {
                for(let i = 0; i<len; i++){
                    $("#service option:last-child").remove();
                }

                $("#service").append("   <option>Choose here</option>");
                $("#service").append("   <option>Hand Paraffin</option>");
                $("#service").append("   <option>Foot Paraffin</option>");
            }
            else if(el.val() === "KIDDIE") {
                for(let i = 0; i<len; i++){
                    $("#service option:last-child").remove();
                }

                $("#service").append("   <option>Choose here</option>");
                $("#service").append("   <option>Kiddie Foot Spa</option>");
                $("#service").append("   <option>Kiddie Hand Spa</option>");
                $("#service").append("   <option>Kiddie Manicure</option>");
                $("#service").append("   <option>Kiddie Pedicure</option>");
            }
            else if(el.val() === "Choose here") {
                for(let i = 0; i<len; i++){
                    $("#service option:last-child").remove();
                }

                $("#service").append("   <option>Choose here</option>");
            }
        });
        
        });
    </script>
@endsection