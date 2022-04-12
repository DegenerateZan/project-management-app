@extends('layouts.main')

@section('container')



<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Payments</h1>

    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Payments
            <div class="createnew float-right d-sm-flex align-items-center" id="createnew" data-bs-toggle="modal" data-bs-target="#modalpayment">
                <span class="mr-2">Add New Payment</span>
             <i class="fas fa-plus-circle float-right "></i>

         </div>
        </div>
        <div class="card-body" style="overflow-x:auto;"">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th data-sortable="false">From Project</th>
                        <th data-sortable="false">Amount</th>
                        <th data-sortable="false">Desciption Payment</th>
                        <th data-sortable="false">Payment Status</th>
                        <th data-sortable="false">Payment Date</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>From Project</th>
                        <th>Amount</th>
                        <th>Desciption Payment</th>
                        <th>Payment Status</th>
                        <th>Payment Date</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Managemen Hotel</td>

                        <td>Rp. 40000000</td>
                        <td>Project Price</td>
                        <td>Not yet Paid off</td>
                        <td>12 Jun 2023

                            <div class="dropdown" style="float: right;">
                                <button class="dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                      <li><a class="dropdown-item tampilmodalubahproyek" dataid="" href="#" data-bs-toggle="modal" data-bs-target="#modalpayment">Edit</a></li>
                                                      <li><a class="dropdown-item" href="" style="color:red;">Delete</a></li>


                                </ul>
                              </div>

                        </td>
                    </tr>
                    <tr>
                        <td>Managemen Hotel</td>

                        <td>Rp. 5000000</td>
                        <td>DP Proyek</td>
                        <td>Paid off</td>
                        <td>12 Juni 2023

                            <div class="dropdown" style="float: right;">
                                <button class="dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item tampilmodalubahproyek" dataid="" href="#" data-bs-toggle="modal" data-bs-target="#modalpayment">Edit</a></li>
                                    <li><a class="dropdown-item" href="" style="color:red;">Delete</a></li>

                                 

                                </ul>
                              </div>

                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
                            <!-- modal buat pembayaran -->
<div class="modal fade" id="modalpayment" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Add new Payment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
          <div class="row">
            <div class="col-sm">

            </div>

          </div>
       
                  <div class="container">
                    <label for="nama-proyekT" class="form-label">From Project :</label>
                    <input type="text" id="nama-proyekT" class="form-control" value="" >
                    <input type="text" name="id_p" id="id-proyek-t" value="" readonly>

                  <div class="row">
                      <div class="col-sm">
                          <label for="nominal" class="form-label">Amount :</label>
                          <input type="teks" id="nominal" name="nomimnal" class="form-control">
  
                      </div>
                       <!-- <div class="col-sm">
                              <label for="alamat" class="form-label">Status :</label>
                              <input type="text" id="alamat" name="alamat" class="form-control">
                     </div> -->
                  </div>
                  <div class="row">
                      <div class="col-sm">
                          <label for="deadlinetask" class="form-label">Payment Date:</label>
                          <input type="date" id="tglpembayaran" name="tgl-pembayaran" class="form-control">
  </div>              <div class="col-sm">
                      <label for="statupem">Payment Status :</label>
                        <select name="" id="" class="form-control">
                            <option value="">Choose Status</option>
                            <option value="1">Paid off</option>
                            <option value="0">Not yet paid off</option>
                        </select>
                        
</div>
                      </div>
                       <div class="row">
  
                     <div class="form-group">
                        <label for="ketepemba"> Desciption Payment :</label>
                        <textarea class="form-control" name="ketepemba" id="ketepemba" rows="3"></textarea>
                      </div>
                  </div>
      
                  
                  <div class="modal-footer footer-proyek">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Payment</button>
          </form>
      </div>
      </div>
    </div>
  </div>

        </div>
    </div>


@endsection