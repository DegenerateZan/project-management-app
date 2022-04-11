@extends('layouts.main')

@section('isi')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Wages</h1>
    
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Developers Wages

            </div>
            <div class="card-body" style="overflow-x:auto;"">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                                              
                            <th>Dev. Name</th>
                            <th>Salary Amount</th>
                            <th>Payroll Deduction</th>
                            <th>Payroll Date</th>
                            <th>Status</th>
                            <th>Overtime Money</th>
                            <th>Total Salary Received</th>
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
                            
                                <div class="dropdown" style="float: right;">
                                    <button class="dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                          <li><a class="dropdown-item" id="tombolgaji1" dataid="" href="#" >not yet paid off</a></li>
                                                          <li><a class="dropdown-item" id="tombolgaji2" href="">Paid off</a></li>
                                     
    
                                    </ul>
                                  </div>
                            </td>
                            <td>Rp. 0</td>
                            <td>Rp. 5000000


<!-- Tombol Pilihan hanya Bisa jika Status pembayaran Belum lunas -->

                                <div class="dropdown" style="float: right;">
                                    <button class="dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                          <li><a class="dropdown-item"  dataid="" href="#" data-bs-toggle="modal" data-bs-target="#modalpayment">Ubah</a></li>
                                                          <li><a class="dropdown-item" href="" style="color:red;">Hapus</a></li>
                                     
    
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
                 
                    </div>
            </div>





            
@endsection