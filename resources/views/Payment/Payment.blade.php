@extends('layouts.main')

@section('container')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Payments</h1>
        <span class="mr-4">Data Payments</span>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <div class="createnew float-right d-sm-flex align-items-center" style="padding: 5px" id="createpayments" data-bs-toggle="modal" data-bs-target="#modalpayment">
                <span class="mr-2">Add Payment</span>
                <i class="fas fa-plus-circle float-right" style="margin-left: 5px ;"></i>

            </div>
            </div>
            <div class="card">
                <div class="container" style="margin-right: 20%">
                    <div class="heading-t-project mt-3">
                        <h4>From Project : {{ $project->name; }}</h4>
                    </div>
                    <div class="d-sm-flex">
                        <div class="row inline-block">
                            <h6 class="pe-4">Deadline : 
                                 @if ($bool_deadline_project == true)
                                <span style="color: red">{{ $string_date.' (Past)' }}</span>
                                @else
                                <span>{{ $string_date }}</span>
                                @endif
                            </h5>
                        </div>
                        <div class="row">
                            <h6>Status Project : <span style="color: ">{{ $project->status }}</span></h5>
                        </div>
                    </div>
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
                            <th data-sortable="false"></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>From Project</th>
                            <th>Amount</th>
                            <th>Desciption Payment</th>
                            <th>Payment Status</th>
                            <th>Payment Date</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach ($payments as $payment)    
                        <tr>
                            <td>{{ $payment->project->name }}</td>
    
       
                            <td>Rp.{{ number_format($payment->amount, '2',',','.') }}</td>
                            <td>{{ $payment->description }}</td>
                            <?php
                            if($payment->status > 0){

                              
                               $payment_status = '<span style="color: green">Paid Off</span>';
                               $p_status = true;
                            } else {
                                $p_status = false;
                                $payment_status = '<span style="color: red">Not Yet Paid Off</span>';
                                }
                                    ?>
                             <td>
                                
                                <div class="btn-group" style="width: 60%">
                                    <div class="change-status btn btn-sm dropdown-toggle"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                      {!! $payment_status !!}
                                    </div>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                      <li class="@if($p_status === true) disabled  @endif"><a class="dropdown-item" href="/payments/changetopaidoff/{{ $payment->id }}/{{ $project->id }} "><span style="color: green">Paid Off</span></a></li>
                                      <li class=" @if($p_status === false) disabled @endif"><a class="dropdown-item" href="/payments/changetohasntpaidoff/{{ $payment->id }}/{{ $project->id }}"><span style="color: red">Not Yet Paid Off</span></a></li>
                                    </ul>
                                  </div>
                                
                                
                                </td>
                            <td>{{ $payment->date }}
    
                                <td>
                                    <span style="margin-left: -5%">
                                        <a  href="#" class="updatepay" data-id="{{ $payment->id }}" data-bs-toggle="modal" data-bs-target="#modalpayment"  id="updatepay" style="color: rgb(41, 0, 205)" ><i class="fas fa-edit"></i></a>
                                        |<a href="#" class="btn text-danger deletepay" id="action" data-name="{{ $payment->project->name }}" data-id="{{ $payment->id }}" onclick="deletepay()"><i class="fas fa-trash-alt"></i></a>
                                        </span>
                                </td>
    
                            </td>
                        </tr>
                        @endforeach
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
              <form id="addupdatepay" action="{{ route('payments.store') }}" method="post">
                
              <div class="row">
                <div class="col-sm">
    
                </div>
    
              </div>
                      
                      @csrf
                      <div class="container">
                          <div class="row">
                          <div class="col-sm">
                        <label for="projects">From Projects :</label>
                        <select class="form-select" aria-label="Default select example" name="project_id">
                            @foreach ($projects as $project)
                            <option value="{{ $project->id }}">{{ $project->name }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-sm">
                            <label for="projects">From Users :</label>
                            <input type="text" id="iduser" name="user_id" class="form-control" value="{{ auth()->user()->id }}" >
                            <input type="text" id="username" class="form-control" value="{{ auth()->user()->username }}" disabled>



                        </div>
                    </div>
                      <div class="row mt-2">
                          <div class="col-sm">
                              <label for="amount" class="form-label">Amount :</label>
                              <input type="teks" id="amount" name="amount" class="form-control">
      
                          </div>
                           <!-- <div class="col-sm"
                                  <label for="alamat" class="form-label">Status :</label>
                                  <input type="text" id="alamat" name="alamat" class="form-control">
                         </div> -->
                      </div>
                      <div class="row mt-3">
                          <div class="col-sm">
                              <label for="paymentdate" class="form-label">Payment Date:</label>
                              <input type="date" id="date" name="date" class="form-control">
      </div>              <div class="col-sm">
                          <label for="statupem">Payment Status :</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">Choose Status</option>
                                <option value="1">Paid off</option>
                                <option value="0">Not yet paid off</option>
                            </select>
                            
    </div>
                          </div>
                           <div class="row">
      
                         <div class="form-group mt-3">
                            <label for="description-payment"> Desciption Payment :</label>
                            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                          </div>
                      </div>
          
                      
                      <div class="modal-footer footer-proyek mt-3">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add Payment</button>
              </form>
          </div>
          </div>
        </div>
      </div>
        </div>
    </div>
            </div>
        </div>
    @include('sweetalert::alert')
    @endsection
