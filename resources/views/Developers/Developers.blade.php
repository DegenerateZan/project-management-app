@extends('layouts.main')

@section('container')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Developers</h1>

    </div>
    <div class="card mb-4">
        <div class="card-header">
            Data Developers
            <div class="createnew float-right d-sm-flex align-items-center" id="createnew" data-bs-toggle="modal" data-bs-target="#formmodaldev">
                <span class="mr-2">Add new Developer</span>
             <i class="fas fa-plus-circle float-right "></i>

         </div>
        </div>



      
        <div class="card-body" style="overflow-x:auto;"">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                                          
                        <th data-sortable="false">Dev. Name</th>
                        <th data-sortable="false">Tel. Number</th>
                        <th data-sortable="false">Address</th>
                        <th data-sortable="false">Email</th>
                        <th data-sortable="false">Account Number</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Dev. Name</th>
                        <th>Tel. Number</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Account Number</th>
                       
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Supratman</td>
                        <td>08984638737</td>
                        <td>Bogor</td>
                        <td>supra@gmail.com</td>
                        <td>8387234683764

                            <div class="dropdown" style="float: right;">
                                <button class="dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                      <li><a class="dropdown-item tampilmodalubahproyek" dataid="" href="#" data-bs-toggle="modal" data-bs-target="#formmodaldev">Edit</a></li>
                                                      <li><a class="dropdown-item" href="" style="color:red;">Delete</a></li>


                                </ul>
                              </div>


                        </td>
                    </tr>


                </tbody>
            </table>

                    <!-- modal tambah dev baru -->
                    <div class="modal fade" id="formmodaldev" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="formmodallabel">Add new Dev</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-6">

                                  <form id="buatubah" action="" method="post">

                                      <div class="container">
                                        <label for="dev-name" class="form-label">Dev. Name:</label>
                                        <input type="text" id="dev-name" name="developer-name" class="form-control" value="" />
                                            <input type="hidden" name="id-developer" id="id-dev" value="" readonly>
                                      <div class="row">
                                          <div class="col-sm">
                                              <label for="no-rek" class="form-label">Account Number:</label>
                                              <input type="number" id="no-rek" name="account-number" class="form-control">
                      
                                          </div>
                                           <div class="col-sm">
                                                  <label for="alamat" class="form-label">Tel. Number :</label>
                                                  <input type="number" id="alamat" name="developer-tel-number" class="form-control">
                                         </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-sm">
                                              <label for="nama-instansi" class="form-label">Address :</label>
                                              <input type="text" id="nama-instansi" name="developer-address" class="form-control">
                      
                                          </div>
                                           <div class="col-sm">
                                                  <label for="email" class="form-label">Email :</label>
                                                  <input type="email" id="email" name="email" class="form-control">
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


@endsection