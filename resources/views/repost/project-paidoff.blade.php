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
            <div class="dropdown" style="float: right;">
                <button class="btn dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                       <a  href="/Repost/Project/PaidOff"  class="dropdown-item text-success yes" id="action"  >Paid Off</a>
                                  </li> 
                                      <li>
                                       <a  href="/Repost/Project/NotYetPaidOff" class="dropdown-item text-danger no" id="action"  >Not Yet Paid Off</a>
                                     </li>              
                </ul>
          </div>
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
                    @foreach ($project as $data)
                    <?php $id_p = $data->id; 
                          $price = $data->price;
                    ?>
                    <?php $total = 0;
                    if (isset($payments_data[$id_p])) {
                        foreach ($payments_data[$id_p] as $payment) {
                            $total = $total + $payment;
                        } 
                        }?>
                    @endforeach
                    @if ($total > $price)
                    <?php $i=1  ?>
                    @foreach ($project as $item)    
                    <tr>
                       <td>{{ $i }}</td>
                       <td>{{ $item->name_project }}</td>
                       <td>Rp.{{ number_format($item->price, '2',',','.') }}</td>
                       <td>Rp.{{ number_format($total, '2',',','.') }}</td>
                       <td>Rp.{{ number_format($item->price - $total, '2',',','.') }}</td>
                       <td class="text-success">Paid Off</td>
                    </tr>     
                    @endforeach
                    <?php $i++ ?> 
                    @else
                      <td></td>
                      <td></td>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
  </div>

@endsection

