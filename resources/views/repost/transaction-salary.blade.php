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
                  {{-- @foreach ($projects as $project) --}}
                  <tr>
                     <td>{{ $i }}</td>
                  </tr>     
                  <?php $i++ ?>
                  {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
  </div>
@endsection