@extends('layouts.main')

@section('container')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Developers</h1>

    </div>
    <div class="card mb-4">
        <div class="card-header">
            Data Developers
            <div class="createnew float-right d-sm-flex align-items-center" style="padding: 5px" id="createnew" data-bs-toggle="modal" data-bs-target="#formmodaldev">
                <span class="mr-2">Add Developer</span>
             <i class="fas fa-plus-circle float-right " style="margin-left: 5px ;"></i>

         </div>
        </div>



      
        <div class="card-body" style="overflow-x:auto;">
            <table id="datatablesSimple">
                <thead>
                    <tr>                  
                        <th data-sortable="false">Dev. Name</th>
                        <th data-sortable="false">Tel. Number</th>
                        <th data-sortable="false">Address</th>
                        <th data-sortable="false">Email</th>
                        <th data-sortable="false">Account Number</th>
                        <th data-sortable="false"></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Dev. Name</th>
                        <th>Tel. Number</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Account Number</th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($developers as $developer)
                    <tr>
                        <td>{{ $developer->name }}</td>
                        <td>{{ $developer->telephone_number }}</td>
                        <td>{{ $developer->address }}</td>
                        <td>{{ $developer->email }}</td>
                        <td>{{ $developer->account_number }}</td>

                        <td>
                            <span style="margin-left: -5%">
                                <a  href="#" dataid="" data-bs-toggle="modal" data-bs-target="#formmodaldev" class="btn" id="action" style="color: rgb(41, 0, 205)"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn text-danger" id="action" data-bs-toggle="modal" data-bs-target="#formmodalhapus"><i class="fas fa-trash-alt"></i></a>
                            </span>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

                    <!-- modal tambah f dev baru -->
                    <div class="modal fade" id="formmodaldev" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="formmodallabel">Add new Dev</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-6">

                                  <form id="buatubah" action="/developer/store" method="post">
                                        @csrf
                                      <div class="container">
                                        <label for="dev-name" class="form-label">Dev. Name:</label>
                                        <input type="text" id="dev-name" name="name" class="form-control" value="" />
                                            <input type="hidden" name="id" id="id-dev" value="" readonly>
                                      <div class="row">
                                          <div class="col-sm">
                                              <label for="no-rek" class="form-label">Account Number:</label>
                                              <input type="number" id="no-rek" name="account_number" class="form-control">
                      
                                          </div>
                                           <div class="col-sm">
                                                  <label for="telephone_number" class="form-label">Tel. Number :</label>
                                                  <input type="number" id="telephone_number" name="telephone_number" class="form-control">
                                         </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-sm">
                                              <label for="nama-instansi" class="form-label">Address :</label>
                                              <input type="text" id="nama-instansi" name="address" class="form-control">
                      
                                          </div>
                                           <div class="col-sm">
                                                  <label for="email" class="form-label">Email :</label><br>
                                                  <input type="email" id="email" name="email" class="form-control"><br>
                                         </div>
                                      </div>
                                      </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Add Developer</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                 </div>




        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection
