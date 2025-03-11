@extends('layouts.index')

@section('content')
  <div class="container">
    <div class="page-inner">
      <div
          class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
      >
        <div>
          <h3 class="fw-bold mb-3">Mahasiswa</h3>
          <h6 class="op-7 mb-2">Free Bootstrap 5 Admin Dashboard</h6>
        </div>
      </div>
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">Add Data Mahasiswa</h4>
                    <a class="btn btn-primary btn-round ms-auto" href="{{ route('mhsCreate') }}"
                        <i class="fa fa-plus"></i>
                        Add Mahasiswa
                    </a>
                </div>
            </div>
            <div class="card-body">
                <!-- Modal -->
                <div
                    class="modal fade"
                    id="addRowModal"
                    tabindex="-1"
                    role="dialog"
                    aria-hidden="true"
                >
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h5 class="modal-title">
                                    <span class="fw-mediumbold"> New</span>
                                    <span class="fw-light"> Row </span>
                                </h5>
                                <button
                                    type="button"
                                    class="close"
                                    data-dismiss="modal"
                                    aria-label="Close"
                                >
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="small">
                                    Create a new row using this form, make sure you
                                    fill them all
                                </p>
                                <form>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group form-group-default">
                                                <label>Name</label>
                                                <input
                                                    id="addName"
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="fill name"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-6 pe-0">
                                            <div class="form-group form-group-default">
                                                <label>Position</label>
                                                <input
                                                    id="addPosition"
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="fill position"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Office</label>
                                                <input
                                                    id="addOffice"
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="fill office"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer border-0">
                                <button
                                    type="button"
                                    id="addRowButton"
                                    class="btn btn-primary"
                                >
                                    Add
                                </button>
                                <button
                                    type="button"
                                    class="btn btn-danger"
                                    data-dismiss="modal"
                                >
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table
                        id="add-row"
                        class="display table table-striped table-hover"
                    >
                        <thead>
                        <tr>
                            <th>NRP</th>
                            <th>Name</th>
                            <th>Birth Date</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Academic Supervisor</th>
                            <th style="width: 10%">Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>NRP</th>
                            <th>Name</th>
                            <th>Birth Date</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Academic Supervisor</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($mahasiswas as $mhs)
                        <tr>
                            <td>{{ $mhs->nrp }}</td>
                            <!--<td><img src="img/{{ $mhs->profile_picture }}" width="30px" height="40px" /></td>-->
                            <td>{{ $mhs->name }}</td>
                            <td>{{ $mhs->birth_date }}</td>
                            <td>{{ $mhs->email }}</td>
                            <td>{{ $mhs->address }}</td>
                            <td>{{ $mhs->phone }}</td>
                            <td>{{ $mhs->dosenWali->nik }}-{{ $mhs->dosenWali->name }}</td>
                            <td>
                                <div class="form-button-action">
                                    <button
                                        type="button"
                                        data-bs-toggle="tooltip"
                                        title=""
                                        class="btn btn-link btn-primary btn-lg"
                                        data-original-title="Edit Task"
                                    >
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button
                                        type="button"
                                        data-bs-toggle="tooltip"
                                        title=""
                                        class="btn btn-link btn-danger"
                                        data-original-title="Remove"
                                    >
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
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
