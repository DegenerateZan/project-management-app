@extends('layouts.main')
@section('container1')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaction Project</h1>
      <span class="mr-4">Repost / Transaction Project</span>
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
                                       <a  href="/TransactionPorject"  class="dropdown-item text-primary" id="action"  >All</a>
                                  </li> 
                                      <li>
                                       <a  href="/TransactionPorject/BasBeenPaidp" class="dropdown-item text-success" id="action" >Bas Been Paid</a>
                                     </li>              
                                    <li>
                                   <a href="/TransactionPorject/HaventPaidYetp" class="btn text-danger  dropdown-item" id="deletepro" >Haven't Paid Yet</a> 
                             </li>
                </ul>
          </div>
            <i class="fas fa-table me-1"></i>
            Transaction Project
        </div>
        <div class="card-body" style="overflow-x:auto;">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th data-sortable="false">No.</th>
                        <th data-sortable="false">From Project</th> 
                        <th data-sortable="false">Amount</th>
                        <th data-sortable="false">Description</th> 
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
                     <td>{{ $item->project->name_project }}</td>
                     <td>{{ number_format($item->amount, '2',',','.')}}</td>
                     <td>{{ $item->description }}</td>
                     @if ($item->status === 1 )
                         <td class="text-success">Bas Been Paid</td>
                     @else
                          <td class="text-danger">Haven't Paid Yet</td>
                     @endif
                     <td>{{ $item->date }}</td>
                  </tr>     
                  <?php $i++ ?>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>
@endsection
