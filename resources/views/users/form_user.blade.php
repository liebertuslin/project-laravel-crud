@extends('layouts.admin_template')

@section('content')
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Add User</h4>

    <div class="row">
      <div class="col-md-6">
        <div class="card mb-4">
          <h5 class="card-header">Add User</h5>
          <div class="card-body">

            <form action="{{ route('users.store') }}" method="post">
              @csrf 
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your name" aria-describedby="name"/>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="example@gmail.com" aria-describedby="email"/>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Your password" aria-describedby="password"/>
              </div>
              <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Your password_confirmation" aria-describedby="password"/>
              </div>
              <div>
                <input type="submit" class="btn btn-primary btn-sm" value="Save" id="save" name="save" />
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection