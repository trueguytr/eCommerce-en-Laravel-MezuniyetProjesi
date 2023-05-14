@extends("master")
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 mx-auto ">
            <form action="register" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">User Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Name">
                </div> 
                <div class="form-group">
                  <label for="exampleInputEmail1">Email Address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
              </form>
        </div>
    </div>
</div>
@endsection

