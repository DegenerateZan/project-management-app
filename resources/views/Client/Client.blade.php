@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Clients</h1>
    
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Clients
                <div class="createnew float-right d-sm-flex align-items-center"  style="padding: 5px" id="createnew" data-bs-toggle="modal" data-bs-target="#formmodalclient">
                      
                    
                        <span class="mr-2">Add Client</span>
                        <i class="fas fa-plus-circle float-right " style="margin-left: 5px ;"></i>

                </div>
            </div>

<!-- modal ubah client -->
<div class="modal fade" id="formmodalubahclient" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formmodallabel">Change New Client</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-6">

              <form id="buatubah" action="/clients/update" method="post">
                @csrf
                  <div class="container">
                    <label for="nama-client" class="form-label">Name :</label>
                    <input type="text" id="nama-client" name="name_client" class="form-control" value="" />
                        <input type="hidden" name="id" id="id-client-1" value="" readonly>
                  <div class="row mt-3">
                      <div class="col-sm">
                          <label for="tel-number" class="form-label">Tel. Number :</label>
                          <input type="number" id="tel-number" name="number_phone" class="form-control">
  
                      </div>
                       <div class="col-sm">
                              <label for="address" class="form-label">Address :</label>
                              <input type="text" id="address" name="addres" class="form-control">
                     </div>
                  </div>
                
                      <div class="row mt-3">
                        <div class="col-sm">
                            <label for="number_account" class="form-label">Number Account :</label>
                            <input type="text" id="number_account" name="number_account" class="form-control">
    
                        </div>
                       <div class="col-sm">
                              <label for="email" class="form-label">Email :</label><br>
                              <input type="email" id="email" name="email" class="form-control"><br>
                     </div>
                     <div class="row  mt-6">
                      <div class="col-sm">
                          <label for="company-name" class="form-label">Company Name :</label>
                          <input type="text" id="company-name" name="company_name" class="form-control">
  
                      </div>
                  </div>
                  </div>
        <div class="modal-footer mt-5">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add New Client</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
            </div>
    </div>


            <div class="card-body" style="overflow-x:auto;">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                                              
                            <th data-sortable="false">Name</th>
                            <th data-sortable="false">Tel. Number</th>
                            <th data-sortable="false">Address</th>
                            <th data-sortable="false">company name</th>
                            <th data-sortable="false">Email</th>
                            <th data-sortable="false">account number</th>
                            <th data-sortable="false"></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Tel. Number</th>
                            <th>Address</th>
                            <th>company name</th>
                            <th>Email</th>
                            <th>account number</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                      @foreach ($data as $clients)
                        <tr>
                            <td>{{ $clients->name_client}}</td>
                            <td>{{ $clients->number_phone}}</td>
                            <td>{{ $clients->addres}}</td>
                            <td>{{ $clients->company_name}}</td>
                            <td>{{ $clients->email}}</td>
                            <td>{{ $clients->number_account}}</td>
                            <td style="min-width: 100px">
                                <span style="margin-left: -5%;">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#formmodalubahclient" data-id="{{ $clients->id }}" class="btn tampilmodalubah" id="action" style="color: rgb(41, 0, 205);"><i class="fas fa-edit"></i></a>
                                    |<a href="/clients/delete/{{ $clients->id }}" class="btn text-danger" id="action" data-id="{{ $clients->id }}"><i class="fas fa-trash-alt"></i></a>
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
<!-- modal tambah client -->
<div class="modal fade" id="formmodalclient" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formmodallabel">Add New Client</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-6">

              <form id="buatubah" action="/clients/store" method="post">
                @csrf
                  <div class="container">
                    <label for="nama-client" class="form-label">Name :</label>
                    <input type="text" id="nama-client" name="name_client" class="form-control" value="" />
                        <input type="hidden" name="id" id="id-client-1" value="" readonly>
                  <div class="row mt-3">
                      <div class="col-sm">
                          <label for="tel-number" class="form-label">Tel. Number :</label>
                          <input type="number" id="tel-number" name="number_phone" class="form-control">
  
                      </div>
                       <div class="col-sm">
                              <label for="address" class="form-label">Address :</label>
                              <input type="text" id="address" name="addres" class="form-control">
                     </div>
                  </div>
                
                      <div class="row mt-3">
                        <div class="col-sm">
                            <label for="number_account" class="form-label">Number Account :</label>
                            <input type="text" id="number_account" name="number_account" class="form-control">
    
                        </div>
                       <div class="col-sm">
                              <label for="email" class="form-label">Email :</label><br>
                              <input type="email" id="email" name="email" class="form-control"><br>
                     </div>
                     <div class="row  mt-6">
                      <div class="col-sm">
                          <label for="company-name" class="form-label">Company Name :</label>
                          <input type="text" id="company-name" name="company_name" class="form-control">
  
                      </div>
                  </div>
                  </div>
        <div class="modal-footer mt-5">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add New Client</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
            </div>




<!-- Kumpulan Modal -->
 




<!-- Akhir kumpulan Modal gor -->

            
            </div>
                 
                    </div>
            </div>

@endsection