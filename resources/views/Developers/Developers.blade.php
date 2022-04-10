@extends('layouts.main')

@section('isi')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Developers</h1>

    </div>
    <div class="card mb-4">
        <div class="card-header">
            Data Developers
            <div class="createnew float-right d-sm-flex align-items-center" id="createnew" data-bs-toggle="modal" data-bs-target="#formmodaldev">
                <span class="mr-2">Tambah Developer Baru</span>
             <i class="fas fa-plus-circle float-right "></i>

         </div>
        </div>



      
        <div class="card-body" style="overflow-x:auto;"">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                                          
                        <th>Nama Dev.</th>
                        <th>No. Telp.</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>No. Rekening</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama Dev.</th>
                        <th>No. HP</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>No. Rekening</th>
                       
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Supratman</td>
                        <td>08984638737</td>
                        <td>Bogor</td>
                        <td>supra@gmail.com</td>
                        <td>8387234683764</td>
                    </tr>


                </tbody>
            </table>

                    <!-- modal tambah dev baru -->
                    <div class="modal fade" id="formmodaldev" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="formmodallabel">Tambah Dev Baru</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-6">

                                  <form id="buatubah" action="" method="post">
                                      <label for="nama-client" class="form-label">Nama Developer:</label>
                                      <input type="text" id="nama-client" name="nama-dev" class="form-control" value="" />
                                          <input type="hidden" name="id" id="id-client-1" value="" readonly>
                                      <div class="container">
                                      <div class="row">
                                          <div class="col-sm">
                                              <label for="no-rek" class="form-label">No. Rekening:</label>
                                              <input type="number" id="no-rek" name="nohp" class="form-control">
                      
                                          </div>
                                           <div class="col-sm">
                                                  <label for="alamat" class="form-label">No. Telp. :</label>
                                                  <input type="number" id="alamat" name="alamat" class="form-control">
                                         </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-sm">
                                              <label for="nama-instansi" class="form-label">Alamat :</label>
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
                              <button type="submit" class="btn btn-primary">Tambah Developer</button>
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