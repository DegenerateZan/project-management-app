@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Salary</h1>
            <span class="mr-4">Data Developers / Salary</span>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                
                

                <div class="createsalary float-right d-sm-flex align-items-center" style="padding: 5px" id="createnew" data-bs-toggle="modal" data-bs-target="#modalwage">
                    <span class="mr-2">Add Salary</span>
                 <i class="fas fa-plus-circle float-right " style="margin-left: 5px ;"></i>
    
             </div>
            </div>
            <div class="card-body" style="overflow-x:auto;"">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            {{-- <th data-sortable="false">User</th>                   --}}
                            <th data-sortable="false">Dev. Name</th>
                            <th data-sortable="false">Salary Amount</th>
                            <th data-sortable="false">Payroll Deduction</th>
                            <th data-sortable="false">Overtime Money</th>
                            <th data-sortable="false">Total Salary Received</th>
                            <th data-sortable="false">Status</th>
                            <th data-sortable="false">Payroll Date</th>
                            <th data-sortable="false"></th> 
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Dev. Name</th>
                            <th>Salary Amount</th>
                            <th>Payroll Deduction</th>
                            <th>Overtime Money</th>
                            <th>Total Salary Received</th>
                            <th>Status</th>
                            <th>Payroll Date</th>
                            <th></th>
                           
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($salaries as $salary)
                        <tr>
                            {{-- <td>{{ $salary->user->username }}</td> --}}
                            <td>{{ $salary->developer->name }}</td>
                            <td>Rp.{{ $salary->salary_amount }}</td>
                            <td>Rp.{{ $salary->payroll_deducation }}</td>
                            <td>Rp.{{ $salary->overtime_money }}</td>
                            <td>Rp.{{ $salary->total_salary_received }}</td>
                            @if ($salary->payroll_status > 0 ) 
                                <td>Paid off</td>
                            @else
                            <td>Not yet paid off</td>
                            @endif
                            <td>{{ $salary->payroll_date }}</td>
                            <td>
                                <span style="margin-left: -5%">
                                    <a  href="#" data-id="{{ $salary->id }}" data-bs-toggle="modal" data-bs-target="#modalwage" class="btn updatesalary" id="action" style="color: rgb(41, 0, 205)"><i class="fas fa-edit"></i></a>|
                                    <a href="#" class="btn text-danger deletesalary" data-id="{{ $salary->id }}" data-name="{{ $salary->developer->name }}" data-developer="{{ $salary->developer_id }}" onclick="deletesalary()"><i class="fas fa-trash-alt"></i></a>
                                </span>
                            </td>
                           
                        </tr>
                        @endforeach

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
                      <form id="addupdatesalary" action="{{ route('salary.store') }}" method="post">
                        @csrf
                      <div class="row">
                        <div class="col-sm">
                        </div>
            
                      </div>
                   
                      <input type="hidden" name="id" id="id" value="" readonly>
                              <div class="container">
                                  <label for="user_id">User</label>
                                  <select class="form-select" aria-label="Default select example" name="user_id" id="user_id">
                                      @foreach ($users as $user)
                                      <option value="{{ $user->id }}">{{ $user->username }}</option>
                                      @endforeach
                                    </select>
                                <label for="developer_id">Developer</label>
                                <select class="form-select" aria-label="Default select example" name="developer_id" id="developer_id">
                                    @foreach ($developers as $developer)
                                    <option value="{{ $developer->id }}">{{ $developer->name }}</option>
                                    @endforeach
                                  </select>
                              <div class="row mt-2">
                                  <div class="col-sm">
                                      <label for="salary-amount" class="form-label">Salary Amount :</label>
                                      <input type="teks" id="salary_amount" name="salary_amount" class="form-control">
              
                                  </div>
                                   <!-- <div class="col-sm">
                                          <label for="alamat" class="form-label">Status :</label>
                                          <input type="text" id="alamat" name="alamat" class="form-control">
                                 </div> -->
                              </div>
                              <div class="row mt-3">
                                  <div class="col-sm">
                                      <label for="deadlinetask" class="form-label">Payroll Deduction</label>
                                      <input type="number" id="payroll_deducation" name="payroll_deducation" class="form-control">
              </div>              <div class="col-sm">
                                  <label for="statupem">Payment Status :</label>
                                    <select name="payroll_status" id="payroll_status" class="form-control" name="payroll_status">
                                        <option value="">Choose Status</option>
                                        <option value="1">Paid off</option>
                                        <option value="0">Not yet paid off</option>
                                    </select>
                                    {{--  --}}
            </div>
                                  </div>
                                   <div class="row mt-3">
                                       <div class="col-sm">
                                           <label for="lembur"> Payroll Date :</label>
                                           <input type="date" id="payroll_date" class="form-control" name="payroll_date">
                                       </div>
                                 <div class="col-sm">
                                    <label for="lembur"> Overtime Money :</label>
                                    <input type="text" id="overtime_money" class="form-control" name="overtime_money">
                                </div>
                                   </div>
                                  <div class="row mt-2">
                                      <div class="col-sm">
                                    <label for="totalreceivesalary"> Total Received Salary :</label>
                                    <div class="form-group d-flex">
                                   <input type="number" class="form-control" id="total_salary_received" name="total_salary_received">
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
            @include('sweetalert::alert')          
@endsection
<script src="js/salary.js"></script>