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
                <i class="fas fa-plus-circle float-right "></i>

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
                        <tr>
                            <td>Superman</td>
                            <td>0812345678</td>
                            <td>Jakarta</td>
                            <td>Mega Corp.</td>
                            <td>super@gmail.com</td>
                            <td>937493849384938

                                <div class="dropdown" style="float: right;">
                                    <button class="dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                          <li><a class="dropdown-item tampilmodalubah" dataid="" href="#" data-bs-toggle="modal" data-bs-target="#formmodalclient">Edit</a></li>
                                                          <li><a class="dropdown-item tampilmodalpopup" dataidh="" class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button" style="color:red;">Delete</a></li>
                                                          <li><a class="dropdown-item tampilmodalbuatproyek" href="#"  dataid="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add New Project</a></li>
                                    </ul>
                                  </div>

                            </td>
                        </tr>


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
                    <input type="text" id="nama-client-proyek" name="nama-client" class="form-control" readonly value="" />
                    <input type="hidden" id="id"  name="id_client" readonly />
                    <input type="hidden">
                  <div class="row">
                      <div class="col-sm">
                          <label for="no-hp" class="form-label">Project Name :</label>
                          <input type="text" id="namaproyek" name="nama_proyek" class="form-control">
  
                      </div>
                      
                      <div class="col-sm">
                          <label for="kategori" class="form-label">Category :</label>
                          <select name="id_kategori" id="ketegori" class="form-control" required>
                              <option value="">Choose Category</option>
                              {{-- <?php foreach ($data["optioncategory"] as $rowcat) : ?>
                                  <option value="<?= $rowcat["id_kategori"] ?>"><?= $rowcat["nama_kategori"]; ?></option>
                              <?php endforeach; ?> --}}
                          </select>
                      </div>
                          
                  </div>
                      <div class="row">
                      <div class="col-sm">
                          <label for="tgl-deadline" class="form-label">Deadline</label>
                          <input type="date" id="tgldeadline" name="tgl_deadline" class="form-control">
  
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
                          <label for="hargaproyek" class="form-label">Project Price :</label>
                          <input type="number" id="hargaproyek" name="harga" class="form-control">
                                  
                      </div>
                      </div>
              </div>
        
        </div>
        <div class="modal-footer footer-proyek">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Understood</button>
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

              <form id="buatubah" action="" method="post">
                  <div class="container">
                    <label for="nama-client" class="form-label">Name :</label>
                    <input type="text" id="nama-client" name="nama" class="form-control" value="" />
                        <input type="hidden" name="id" id="id-client-1" value="" readonly>
                  <div class="row">
                      <div class="col-sm">
                          <label for="no-hp" class="form-label">Tel. Number :</label>
                          <input type="number" id="no-hp" name="nohp" class="form-control">
  
                      </div>
                       <div class="col-sm">
                              <label for="alamat" class="form-label">Address :</label>
                              <input type="text" id="alamat" name="alamat" class="form-control">
                     </div>
                  </div>
                  <div class="row">
                      <div class="col-sm">
                          <label for="nama-instansi" class="form-label">Company Name :</label>
                          <input type="text" id="nama-instansi" name="namaper" class="form-control">
  
                      </div>
                       <div class="col-sm">
                              <label for="email" class="form-label">Email :</label>
                              <input type="email" id="email" name="email" class="form-control">
                     </div>
                  </div>
                  </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add client</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
            </div>

<!-- Akhir kumpulan Modal -->

            
            </div>
                 
                    </div>
            </div>

@endsection