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
                      <form method="post" action="{{ route('mhsUpdate', [$mahasiswa->nrp]) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="NRP">NRP</label>
                            <input type="text" class="form-control" name="nrp" placeholder="e.g. 202472001" maxlength="9" required readonly value="{{ $mahasiswa->nrp }}" />
                        </div>
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="e.g. John Doe" required value="{{ $mahasiswa->name }}" />
                      </div>
                      <div class="form-group">
                        <label for="NIK">Birth Date</label>
                        <input type="date" class="form-control" name="birth_date" placeholder="Enter Birth Date" required value="{{ $mahasiswa->birth_date }}" />
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="e.g. john.doe@email.com" required value="{{ $mahasiswa->email }}" />
                      </div>
                        <div class="form-group">
                          <label for="address">Address</label>
                          <input type="text" class="form-control" name="address" placeholder="e.g. Surya Sumantri 65" required value="{{ $mahasiswa->address }}" />
                        </div>
                        <div class="form-group">
                          <label for="phone">Phone</label>
                          <input type="text" class="form-control" name="phone" placeholder="e.g. 081234567" required value="{{ $mahasiswa->phone }}" />
                        </div>
                        <div class="form-group">
                          <label for="dosenWali">Dosen Wali</label>
                          <select class="form-control" name="dosen_nik">
                            @foreach($dosens as $dosen)
                              @if ($dosen->nik == $mahasiswa->dosen_nik)
                                <option value="{{ $dosen->nik }}" selected>{{ $dosen->name }}</option>
                              @else
                                <option value="{{ $dosen->nik }}">{{ $dosen->name }}</option>
                              @endif
                            @endforeach
                          </select>
                          @error('lecturer_nik')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                      <div class="card-action">
                        <input type="submit" class="btn btn-success" />
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
