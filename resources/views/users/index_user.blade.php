@extends('layouts.admin_template')

@section('content')
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
      <span class="text-muted fw-light">Users /</span> List 
    </h4>
    <div class="row">
      <div class="col-lg-12 mb-4 order-0">
        <div class="card">
          <div class="d-flex align-items-end row">
            <div class="col-sm-12">
              <div class="card-body">
                
                <div class="d-flex justify-content-between">
                  <h5 class="card-title text-primary">Halaman User</h5>
                  
                  <a href="{{ route('users.create') }}">
                    <button class="btn btn-primary">Tambah</button>
                  </a>
                </div>

                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $nomor = 1;
                    @endphp
                    @forelse ($users as $row)
                      <tr>
                        <td>{{ $nomor++ }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>Edit | Delete</td>
                      </tr>
                    @empty
                      <tr> <td colspan="4">Tidak ada data</td> </tr>
                    @endforelse
                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection