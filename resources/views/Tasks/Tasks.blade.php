@extends('layouts.main')

@section('isi')

    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tasks</h1>
    
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Task
                <div class="createnew float-right d-sm-flex align-items-center" id="createnew" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                    <span class="mr-2">Add Task</span>
                 <i class="fas fa-plus-circle float-right "></i>
 
             </div>

            </div>
            <div class="card">
                <div class="container">
                    <div class="heading-t-project">
                        <h4>From Project : Managemen Hotel</h4>
                    </div>
                    <div class="d-sm-flex">
                        <div class="row">
                            <h6 class="pe-4">Deadline : 13 Juni 2023</h5>
                        </div>
                        <div class="row">
                            <h6>Status Project : <span style="color: red">Incomplete</span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body" style="overflow-x:auto;"">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Task</th>
                            <th>Deskripsi Task</th>
                            <th>Dikerjakan Oleh</th>
                            <th>Deadline task</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Task</th>
                            <th>Deskripsi Task<th>
                            <th>Dikerjakan Oleh</th>
                            <th>Deadline task</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Managemen Hotel</td>
                            <td>Tidak ada</td>
                            <td>Supratman</td>
                            <td>2022/09/21</td>
                        </tr>


                    </tbody>
                </table>


                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalToggleLabel">Buat task</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="" method="post">
                              <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                    <label for="nama-proyekT" class="form-label">Dari Proyek :</label>
                                      <input type="hidden" id="id-pr" name="id-pr" value="">
                                          <input type="text" id="nama-proyekT" class="form-control" value="" readonly>
                                    </div>
                                    <div class="col-sm">
                                    <label for="deadline-proyek" class="form-label">Tgl Deadline proyek :</label>
                                    <input type="date" id="deadline-proyek" class="form-control" value="" readonly>
                          
                                    </div>
                              </div>

                          </div>
                       
                                  <div class="container">
                                    <input type="text" name="id_p" id="id-proyek-t" value="" readonly>

                                  <div class="row">
                                      <div class="col-sm">
                                          <label for="nama-task" class="form-label">Nama task :</label>
                                          <input type="teks" id="nama-task" name="nama_task" class="form-control">
                  
                                      </div>
                                       <!-- <div class="col-sm">
                                              <label for="alamat" class="form-label">Status :</label>
                                              <input type="text" id="alamat" name="alamat" class="form-control">
                                     </div> -->
                                  </div>
                                  <div class="row">
                                      <div class="col-sm">
                                          <label for="deadlinetask" class="form-label">Deadline Pengerjaan:</label>
                                          <input type="date" id="deadlinetask" name="deadlinetask" class="form-control">
                  </div>
                                      </div>
                                       <div class="row">
                                         <div class="col-sm">
                                              <label for="destask" class="form-label">Deskripsi task :</label>
                                              <input type="text" id="destask" name="detask" class="form-control">
                                     </div>
                  
                                     <div class="form-group">
                                        <label for="detailtask">Detail Task :</label>
                                        <textarea class="form-control" name="detaildesc" id="detaildesc" rows="3"></textarea>
                                      </div>
                                  </div>
                                  </div>
                                  
                                  <div class="modal-footer footer-proyek">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Tambah Task</button>
                          </form>
                      </div>
                      </div>
                    </div>
                  </div>





            </div>
        </div>
    </div>
@endsection