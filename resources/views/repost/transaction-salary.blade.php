@extends('layouts.main')
@section('container1')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaction Salary</h1>
      <span class="mr-4">Repost / Data Transaction Salary</span>
    </div>
{{--  --}}
    <div class="card mb-4">
        <div class="card-header">
            <div class="dropdown" style="float: right;">
                <button class="btn dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                       <a  href="/TransactionSalary"  class="dropdown-item text-primary" id="action"  >All</a>
                                  </li> 
                                      <li>
                                       <a  href="/TransactionSalary/BasBeenPaids" class="dropdown-item text-success" id="action" >Bas Been Paid</a>
                                     </li>              
                                    <li>
                                   <a href="/TransactionSalary/HaventPaidYets" class="btn text-danger  dropdown-item" id="deletepro" >Haven't Paid Yet</a> 
                             </li>
                </ul>
          </div>
            <i class="fas fa-table me-1"></i>
             Transaction Salary
            
        </div>
        <div class="card-body" style="overflow-x:auto;">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th data-sortable="false">No.</th>
                        <th data-sortable="false">Name Developer</th> 
                        <th data-sortable="false">Amount</th> 
                        <th data-sortable="false">Status</th>
                        <th data-sortable="false">Date</th> 
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No.</th>                 
                        <th>Project Name</th>
                        <th>Has Been Paid</th>
                        <th>Payment Status</th>
                    </tr>
                </tfoot>
                <tbody>
                  <?php $i=1  ?>
                  @foreach ($data as $item)
                  <tr>
                     <td>{{ $i }}</td>
                     <td>{{ $item->name_developer }}</td>
                     <td>{{ number_format($item->total_salary_received, '2',',','.')}}</td>
                     @if ($item->payroll_status === 1)
                         <td class="text-success">Paid Off</td>
                     @else
                         <td class="text-danger">Not Yet Paid Off</td>
                     @endif
                     <td>{{ $item->payroll_date }}</td>
                  </tr>     
                  <?php $i++ ?>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>
@endsection