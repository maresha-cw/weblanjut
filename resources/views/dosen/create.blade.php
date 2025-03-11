@extends('layouts.index')

@section('content')
  <div class="container">
    <div class="page-inner">
      <div
          class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
      >
        <div>
          <h3 class="fw-bold mb-3">Dashboard</h3>
          <h6 class="op-7 mb-2">Free Bootstrap 5 Admin Dashboard</h6>
        </div>
      </div>
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">Add Dosen</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                      <form method="POST" action="{{ route('dosenStore') }}">
                        @csrf
                        <div class="form-group">
                            <label for="NIK">NIK</label>
                            <input type="text" class="form-control" name="nik" placeholder="e.g. 720001" required autofocus />
                        </div>
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="e.g. John Doe" maxlength="7" required />
                      </div>
                      <div class="form-group">
                        <label for="birth_date">Birth Date</label>
                        <input type="date" class="form-control" name="birth_date" placeholder="Enter Birth Date" required />
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="e.g. john.doe@email.com" required />
                      </div>
                      <div class="card-action">
                        <input type="submit" class="btn btn-success" />
                        <input type="reset" class="btn btn-danger" />
                      </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection

@section('ExtraCss')

@endsection

@section('ExtraJS')

@endsection
