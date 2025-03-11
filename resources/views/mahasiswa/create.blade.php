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
                    <h4 class="card-title">Add Mahasiswa</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                      <form method="POST" action="{{ route('mhsStore') }}">
                        @csrf
                        <div class="form-group">
                            <label for="NRP">NRP</label>
                            <input type="text" class="form-control" name="nrp" placeholder="e.g. 202472001" maxlength="9" required autofocus />
                        </div>
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="e.g. John Doe" required />
                      </div>
                      <div class="form-group">
                        <label for="NIK">Birth Date</label>
                        <input type="date" class="form-control" name="birth_date" placeholder="Enter Birth Date" required />
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="e.g. john.doe@email.com" required />
                      </div>
                        <div class="form-group">
                          <label for="address">Address</label>
                          <input type="text" class="form-control" name="address" placeholder="e.g. Surya Sumantri 65" required />
                        </div>
                        <div class="form-group">
                          <label for="phone">Phone</label>
                          <input type="text" class="form-control" name="phone" placeholder="e.g. 081234567" required />
                        </div>
                        <div class="form-group">
                          <label for="dosenWali">Dosen Wali</label>
                          <select class="form-control" name="dosen_nik">
                            @foreach($dosens as $dosen)
                              <option value="{{ $dosen->nik }}">{{ $dosen->name }}</option>
                            @endforeach
                          </select>
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
