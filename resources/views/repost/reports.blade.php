@extends('layouts.main')

@section('container1')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Repost</h1>
      <span class="mr-4">Repost / Data Project</span>
    </div>
{{--  --}}
    <div class="card mb-4">
        <div class="card-header">
            
            <i class="fas fa-table me-1"></i>
            Repost Project 
            
        </div>
        <div class="card-body" style="overflow-x:auto;">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th data-sortable="false">No.</th>
                        <th data-sortable="false">Project Name</th> 
                        <th data-sortable="false">Project Price</th> 
                        <th data-sortable="false">Has Been Paid</th>
                        <th data-sortable="false">Remaining Project Price</th> 
                        <th data-sortable="false">Payment Status</th>
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
                  @foreach ($projects as $project)
                  <?php $id_p = $project->id; ?>
                  <tr>
                     <td>{{ $i }}</td>
                     <td>{{ $project->name_project }}</td>
                     <td>Rp.{{ number_format($project->price, '2',',','.') }}</td>
                     <?php $total = 0;
                     if (isset($payments_data[$id_p])) {
                         foreach ($payments_data[$id_p] as $payment) {
                             $total = $total + $payment;
                         } 
                         }?>
                     <td>Rp.{{ number_format($total, '2',',','.') }}</td>
                     <td>Rp.{{ number_format($project->price - $total, '2',',','.') }}</td>
                     @if ($total > $project->price)
                         <td class="text-success">Paid Off</td>
                     @else
                         <td class="text-danger">Not Paid Off</td>
                     @endif
                  </tr>     
                  <?php $i++ ?>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>



@endsection
@section('script')
<script src="js/platform.js"></script>
<script>
  $('.delprojectplatforms').click(function () { 
    console.log('oke');
    
  });  
</script>
@endsection
    
