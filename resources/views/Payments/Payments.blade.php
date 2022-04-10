@extends('layouts.main')

@section('isi')



<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Payments</h1>

    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Payments
            <div class="createnew float-right d-sm-flex align-items-center" id="createnew" data-bs-toggle="modal" data-bs-target="#modalpayment">
                <span class="mr-2">Tambah Pembayaran Baru</span>
             <i class="fas fa-plus-circle float-right "></i>

         </div>
        </div>
        <div class="card-body" style="overflow-x:auto;"">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Dari Proyek</th>
                        <th>Nominal Pembayaran</th>
                        <th>keterangan Pembayaran</th>
                        <th>Status pembayaran</th>
                        <th>Tanggal Pembayaran</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Dari Proyek</th>
                        <th>Nominal Pembayaran</th>
                        <th>keterangan Pembayaran</th>
                        <th>Status pembayaran</th>
                        <th>Tanggal Pembayaran</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Managemen Hotel</td>

                        <td>Rp. 40000000</td>
                        <td>Harga Proyek</td>
                        <td>Belum diabayar</td>
                        <td>12 Juni 2023

                            <div class="dropdown" style="float: right;">
                                <button class="dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                      <li><a class="dropdown-item tampilmodalubahproyek" dataid="" href="#" data-bs-toggle="modal" data-bs-target="#formmodalproject">Ubah</a></li>
                                                      <li><a class="dropdown-item" href="" style="color:red;">Hapus</a></li>
                                                      <li><a class="dropdown-item" href="
                                                        /tasks
                                                        " style="color:blue">Tampilkan Task</a></li>

                                </ul>
                              </div>

                        </td>
                    </tr>
                    <tr>
                        <td>Managemen Hotel</td>

                        <td>Rp. 5000000</td>
                        <td>DP Proyek</td>
                        <td>Sudah dibayar</td>
                        <td>12 Juni 2023

                            <div class="dropdown" style="float: right;">
                                <button class="dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                      <li><a class="dropdown-item k" dataid="" href="#" data-bs-toggle="modal" data-bs-target="#modalpayment">Ubah</a></li>
                                                      <li><a class="dropdown-item" href="" style="color:red;">Hapus</a></li>
                                 

                                </ul>
                              </div>

                        </td>
                    </tr>


                </tbody>
            </table>
                            <!-- modal buat pembayaran -->
<div class="modal fade" id="modalpayment" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Tambah Pembayaran</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
          <div class="row">
            <div class="col-sm">
            <label for="nama-proyekT" class="form-label">Dari Proyek :</label>
                  <input type="text" id="nama-proyekT" class="form-control" value="" >
            </div>

          </div>
       
                      <input type="text" name="id_p" id="id-proyek-t" value="" readonly>
                  <div class="container">
                  <div class="row">
                      <div class="col-sm">
                          <label for="nominal" class="form-label">Nominal :</label>
                          <input type="teks" id="nominal" name="nomimnal" class="form-control">
  
                      </div>
                       <!-- <div class="col-sm">
                              <label for="alamat" class="form-label">Status :</label>
                              <input type="text" id="alamat" name="alamat" class="form-control">
                     </div> -->
                  </div>
                  <div class="row">
                      <div class="col-sm">
                          <label for="deadlinetask" class="form-label">Tanggal Pembayaran:</label>
                          <input type="date" id="tglpembayaran" name="tgl-pembayaran" class="form-control">
  </div>              <div class="col-sm">
                      <label for="statupem">Status Pembayaran :</label>
                        <select name="" id="" class="form-control">
                            <option value="">Pilih Status</option>
                            <option value="1">Lunas</option>
                            <option value="0">Belum Lunas</option>
                        </select>
                        
</div>
                      </div>
                       <div class="row">
  
                     <div class="form-group">
                        <label for="ketepemba"> Keterangan Pembayaran :</label>
                        <textarea class="form-control" name="ketepemba" id="ketepemba" rows="3"></textarea>
                      </div>
                  </div>
                  </div>
                  
                  <div class="modal-footer footer-proyek">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Pembayaran</button>
          </form>
      </div>
      </div>
    </div>
  </div>




@endsection