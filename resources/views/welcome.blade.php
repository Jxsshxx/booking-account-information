@extends('layout.main')

    <style>
      .heading{
        margin-top:50px;
      }
      .space{
        margin-bottom:50px;
      }
      img{
        width: 25px;
        height: 25px;
      }
      p{
        color: #43ccb3;
      }
      
    </style>

  <body>
  <div class="form-group">
    <div class="container-sm">

      <form action="{{ route('BookingDetails') }}" method="POST">

      @csrf

      <h1 class="heading">ACOUNT INFORMATION</h1>
      <h6><b>Fill up the need information to continue<b></h6>
        <!--first row -->
        <div class="row">

          <div class="col">
            <p>Surname</p>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><img src="/icons/person.png"></span>
              <input type="text" class="form-control" placeholder="Surname" aria-label="Surnamer" aria-describedby="basic-addon1" required>
            </div>
          </div>

          <div class="col">
            <p>First Name</p>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><img src="/icons/person.png"></span>
              <input type="text" class="form-control" placeholder="First Name" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
          </div>

          <div class="col">
            <p>Middle Initial</p>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><img src="/icons/person.png"></span>
                <input type="text" class="form-control" placeholder="Middle Initial" aria-label="Username" aria-describedby="basic-addon1" required>
              </div>
          </div>

        </div>
        <!--Second row --> 
        <div class="row">

          <div class="col">
          <p>Birthday</p>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><img src="/icons/calendar.png"></span>
              <input type="date" class="form-control" placeholder="Birthday" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
          </div>

          <div class="col">
            <p>Age</p>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><img src="/icons/person.png"></span>
              <input type="number" class="form-control" placeholder="Age" aria-label="Username" aria-describedby="basic-addon1"  min="18" max="59" required>
            </div>
          </div>

          <div class="col"></div>

        </div>

        <h6><b>Addresses<b></h6>
        <!--Third row --> 
        <div class="row">

        <div class="col">
        <p>Street Name</p>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><img src="/icons/location.png"></span>
            <input type="text" class="form-control" placeholder="Street Name" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
        </div>

        <div class="col">
          <p>City</p>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><img src="/icons/building.png"></span>
            <input type="text" class="form-control" placeholder="City" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
        </div>

        <div class="col">
          <p>Postal Code</p>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><img src="/icons/postal.png"></span>
            <input type="text" class="form-control" placeholder="Postal Code" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
        </div>

        </div>

        <h6><b>Contacts<b></h6>
        <!--Forth row --> 
        <div class="row">

        <div class="col">
        <p>Phone Number</p>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><img src="/icons/telephone.png"></span>
            <input type="text" class="form-control" placeholder="Phone Number" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
        </div>

        <div class="col">
          <p>Mobile Number</p>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><img src="/icons/mobile.png"></span>
            <input type="text" class="form-control" placeholder="Mobile Number" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
        </div>

        <div class="col">
          <p>Email Address</p>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><img src="/icons/@.png"></span>
            <input type="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
        </div>

        </div>

        <h6><b>Incase of Emergency Please Contact the following:<b></h6>
        <!--Forth row --> 
        <div class="row">

        <div class="col">
        <p>Full Name</p>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><img src="/icons/person.png"></span>
            <input type="text" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
        </div>

        <div class="col">
          <p>Mobile Number</p>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><img src="/icons/mobile.png"></span>
            <input type="text" class="form-control" placeholder="Mobile Number" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
        </div>

        <div class="col">
          <p>Relationship</p>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><img src="/icons/person.png"></span>
            <input type="text" class="form-control" placeholder="Relationship" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
        </div>

        </div>

        <div class="row space">
          <div class="col"></div>
          <div class="col-md-auto">
            <input type="submit" value="SUBMIT" name="#" class="btn btn-light">
          </div>
          <div class="col"></div>
        </div>
       
        </form>

    </div>
  </div>
  </body>
      