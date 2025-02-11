@extends('layouts.default')

@section('content')
<div class="register-page">
<div class="register-box">
    <div class="register-logo">
      <a href="../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.register-logo -->
    <div class="card">
      <div class="card-body register-card-body">
        <p class="register-box-msg">Register a new membership</p>
        <form action="{{url('/register')}}" onsubmit="" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" />
            <div class="input-group-text"><span class="bi bi-person"></span></div>
            <div class="valid-feedback">OK</div>
            <div class="invalid-feedback" id="invalid-name">กรุณาระบุข้อมูล name</div>
          </div>
          <div class="input-group mb-3">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" />
            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" id="pass" class="form-control" placeholder="Password" />
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
          </div>
          <!--begin::Row-->
          <div class="row">
            <div class="col-8">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">
                  I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Sign In</button>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!--end::Row-->
        </form>
        <!-- /.social-auth-links -->
        <p class="mb-0">
          <a href="login.html" class="text-center"> I already have a membership </a>
        </p>
      </div>
      <!-- /.register-card-body -->
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script>
  //console.log("Hello World!")
</script>
<script>
  //alert("Hello World")
  let myval
  var mayval2 
  const PI=3.14 //ตัวแปรค่าคงที่
  pi = 2
  //PI = 2 error เปลี่ยนค่าไม่ได้
  console.log(PI,pi)

  let myarry = Array(1,2,3);
  //หรือ let myarry = [];

  myarry[0] = 1;
  myarry["1"] = 2;
  myarry.push(3)
  myarry.push(4)
  console.log(myarry)
  myarry.pop()
  console.log(myarry)
  for(a=1; a<10 ; a++){
    console.log(a);
  }
  
  function clickme(){
    let name = document.getElementById('name');
        //name.value = "New Teat" เปลี่ยนค่า
        //name = $('#name').val("new with jquery")
        //$('#name').addClass('is-invalid') //error
        //$('#name').addClass('is-valid') //ok
        // email format @[a-z].[a-z]
        // password format [0-9][a-z][A-Z]
    console.log("Hello", name);
    return false;
  }

  $(document).ready(function(){
    //alert("Hello world")
  })
</script>
@endsection
