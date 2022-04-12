@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Wages</h1>
    
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Developers Wages

                <div class="createnew float-right d-sm-flex align-items-center" id="createnew" data-bs-toggle="modal" data-bs-target="#modalwage">
                    <span class="mr-2">Add New wage</span>
                 <i class="fas fa-plus-circle float-right "></i>
    
             </div>
            </div>
            <div class="card-body" style="overflow-x:auto;"">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                                              
                            <th data-sortable="false">Dev. Name</th>
                            <th data-sortable="false">Salary Amount</th>
                            <th data-sortable="false">Payroll Deduction</th>
                            <th data-sortable="false">Payroll Date</th>
                            <th data-sortable="false">Status</th>
                            <th data-sortable="false">Overtime Money</th>
                            <th data-sortable="false">Total Salary Received</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Dev. Name</th>
                            <th>Salary Amount</th>
                            <th>Payroll Deduction</th>
                            <th>Payroll Date</th>
                            <th>Status</th>
                            <th>Overtime Money</th>
                            <th>Total Salary Received</th>
                           
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Supratman</td>
                            <td>Rp. 6000000</td>
                            <td>1000000</td>
                            <td>12 Feb 2023</td>
                            <td><span style="color: red">not yet paid off</span>
                            
                                
                            </td>
                            <td>Rp. 0</td>
                            <td>Rp. 5000000


<!-- Tombol Pilihan hanya Bisa jika Status pembayaran Belum lunas -->

                                <div class="dropdown" style="float: right;">
                                    <button class="dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                          <li><a class="dropdown-item"  dataid="" href="#" data-bs-toggle="modal" data-bs-target="#modalwage">Edit</a></li>
                                                          <li><a class="dropdown-item" href="" style="color:red;">Delete</a></li>
                                     
    
                                    </ul>
                                  </div>

                            </td>
                        </tr>
                        <tr>
                            <td>Supratman</td>
                            <td>Rp. 6000000</td>
                            <td>1000000</td>
                            <td>12 Jan 2023</td>
                            <td><span style="color:green">Paid off</span></td>
                            <td>Rp. 0</td>
                            <td>Rp. 5000000</td>
                        </tr>


                    </tbody>
                </table>
            </div>


            <div class="modal fade" id="modalwage" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalToggleLabel">Add new Wage</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="" method="post">
                      <div class="row">
                        <div class="col-sm">
            
                        </div>
            
                      </div>
                   
                              <div class="container">
                                <label for="dev-name" class="form-label">From Developer :</label>
                                <input type="text" id="dev-name" class="form-control" value="" >
                                <input type="hidden" name="id-developer" id="id-developer" value="" readonly>
                                <input type="hidden" name="id-wage" id="id-wage" value="" readonly>
            
                              <div class="row">
                                  <div class="col-sm">
                                      <label for="salary-amount" class="form-label">Salary Amount :</label>
                                      <input type="teks" id="salary-amount" name="salary-amount" class="form-control">
              
                                  </div>
                                   <!-- <div class="col-sm">
                                          <label for="alamat" class="form-label">Status :</label>
                                          <input type="text" id="alamat" name="alamat" class="form-control">
                                 </div> -->
                              </div>
                              <div class="row">
                                  <div class="col-sm">
                                      <label for="deadlinetask" class="form-label">Payroll Deduction</label>
                                      <input type="number" id="tglpembayaran" name="payrolldeduction" class="form-control">
              </div>              <div class="col-sm">
                                  <label for="statupem">Payment Status :</label>
                                    <select name="payment-status" id="" class="form-control">
                                        <option value="">Choose Status</option>
                                        <option value="1">Paid off</option>
                                        <option value="0">Not yet paid off</option>
                                    </select>
                                    
            </div>
                                  </div>
                                   <div class="row">
              
                                 <div class="col-sm">
                                    <label for="lembur"> Overtime Money :</label>
                                    <input type="number" id="lembur" class="form-control" name="overtimemoney">
                                </div>
                                   </div>
                                  <div class="row">
                                      <div class="col-sm">
                                    <label for="totalreceivesalary"> Total Received Salary :</label>
                                    <div class="form-group d-flex">
                                    <p class="mr-1 mt-1">Rp.</p> <input type="number" class="form-control" name="total-receive-salary" id="totalreceivesalary">
                                  </div>
                                </div>
                                </div>
                              </div>
                  
                              
                              <div class="modal-footer footer-proyek">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Add Wage</button>
                      </form>
                  </div>
                  </div>
                </div>
              </div>




                 
                    </div>
            </div>





            
@endsection