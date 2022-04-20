@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Clients</h1>
    
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Clients
                <div class="createnew float-right d-sm-flex align-items-center" id="createnew" data-bs-toggle="modal" data-bs-target="#formmodalclient">
                   <span class="mr-2">Add new Client</span>
                <i class="fas fa-plus-circle float-right " style="margin-left: 5px ;"></i>

            </div>
            </div>
            <div class="card-body" style="overflow-x:auto;"">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                                              
                            <th data-sortable="false">Name</th>
                            <th data-sortable="false">Tel. Number</th>
                            <th data-sortable="false">Address</th>
                            <th data-sortable="false">company name</th>
                            <th data-sortable="false">Email</th>
                            <th data-sortable="false">account number</th>
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
                            <td>{{  $clients->number_account}}

                                <div class="dropdown" style="float: right;">
                                    <button class="dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                          <li><a class="dropdown-item tampilmodalubah" dataid="" href="#" data-bs-toggle="modal" data-bs-target="#formmodalclient">Edit</a></li>
                                                          <li><a class="dropdown-item tampilmodalpopup" dataidh="" class="btn btn-primary" data-bs-toggle="modal" href="/clients/delete/{{ $clients->id }}" role="button" style="color:red;">Delete</a></li>
                                                          <li><a class="dropdown-item tampilmodalbuatproyek" href="#"  dataid="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add New Project</a></li>
                                    </ul>
                                  </div>

                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>

<!-- Kumpulan Modal -->

 <!-- Modal buat Proyek-->
 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modallabelproyek">Add New Project</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="" method="post" >

                  <div class="container">
                    <label for="nama-client" class="form-label">From Client:</label>
                    <input type="text" id="client-name-project" name="client-name" class="form-control" readonly value="" />
                    <input type="hidden" id="id"  name="id_client" readonly />
                    <input type="hidden">
                  <div class="row">
                      <div class="col-sm">
                          <label for="no-hp" class="form-label">Project Name :</label>
                          <input type="text" id="projectname" name="project-name" class="form-control">
  
                      </div>
                      
                      <div class="col-sm">
                          <label for="category" class="form-label">Category :</label>
                          <select name="id_category" id="category" class="form-control" required>
                              <option value="">Choose Category</option>
                              {{-- <?php foreach ($data["optioncategory"] as $rowcat) : ?>
                                  <option value="<?= $rowcat["id_kategori"] ?>"><?= $rowcat["nama_kategori"]; ?></option>
                              <?php endforeach; ?> --}}
                          </select>
                      </div>
                          
                  </div>
                      <div class="row">
                      <div class="col-sm">
                          <label for="projectdeadline" class="form-label">Deadline</label>
                          <input type="date" id="projectdeadline" name="deadline" class="form-control">
  
                      </div>
                      <div class="col-sm">
                          <label for="platform" class="form-label">Platform</label>
                          <select name="id_platform" id="platform" class="form-control">
                            <option value="">Choose Platform</option>
                            {{-- <?php foreach ($data["optionplatform"] as $rowplat) : ?>
                              <option value="<?= $rowplat["id_platform"] ?>"><?= $rowplat["nama_platform"]; ?></option>
                            <?php endforeach; ?> --}}
                          </select>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-sm">
                          <label for="projectprice" class="form-label">Project Price :</label>
                          <input type="number" id="projectprice" name="project-price" class="form-control">
                                  
                      </div>
                      </div>
              </div>
        
        </div>
        <div class="modal-footer footer-proyek">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add new Project</button>
          </form>
        </div>
      </div>
    </div>
  </div> 

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

<!-- Akhir kumpulan Modal gor -->

            
            </div>
                 
                    </div>
            </div>

@endsection