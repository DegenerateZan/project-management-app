@extends('layouts.main')

@section('container1')



<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Finance</h1>

  </div>
<div class="card">
    <div class="card-header d-flex flex-between-center ps-0 py-0 border-bottom">

      <div class="dropdown font-sans-serif btn-reveal-trigger">

      </div>
    </div>
    <div class="card-body">
      <div class="row g-1">
        <div class="col-xxl-12">
          <div class="row g-0 my-2">
            <div class="col-md-6 col-xxl-12">
              
              <div class="border-xxl-bottom border-xxl-200 mb-2" >
                @if ($debit  == null)
                <h2 class="text-primary">Rp.{{  number_format(0, '2',',','.') }}</h2>     
                @else
                <h2 class="text-primary">Rp.{{  number_format($debit, '2',',','.') }}</h2>
                @endif
                <h6 class="text-500 mb-0">Total Revenue</h6>
              </div>
            </div>
            <div class="col-md-6 col-xxl-12 py-2" id="revenue">
              <div class="row" style="width: 400px; justify-content:right">
                <div class="col-6 border-end border-bottom py-3">
                  
               
                  
                  <h5 class="fw-normal text-600">Rp.{{  number_format($credit, '2',',','.') }}</h5>
                  
                  <h6 class="text-500 mb-0">total expenditure</h6>
                </div>
                <div class="col-6 border-bottom py-3">
                  <h5 class="fw-normal text-600">Rp.{{  number_format($total, '2',',','.') }}</h5>    
                  <h6 class="text-500 mb-0">Remaining Income</h6>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
          <div class="tab-content">
            <div class="card-header">
              Finance History
            </div>
            <table id="datatablesSimple">
              <thead>
                  <tr>
                      <th data-sortable="false">Finance Amount</th>
                      <th data-sortable="false">Finance Description</th>
                      <th data-sortable="false">Finance Mutation</th>
                      <th data-sortable="false">Mutation date</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                      <th>Finance Amount</th>
                      <th>Finance Description</th>
                      <th>Finance Mutation</th>
                      <th>Mutation date</th>
                  </tr>
              </tfoot>
              <tbody>
                @foreach($data as $finance)
                  <tr>
                      <td>Rp. {{ number_format($finance->amount, '2',',','.') }}</td>
                      <td>{{ $finance->description }}</td>
                      <td>{{ $finance->mutation }}</td>
                      <td>{{ $finance->date }}</td>
                  </tr>
                @endforeach

              </tbody>
          </table>


          {{-- modal --}}
        
          {{-- akhir modal --}}
      </div>
        </div>
      </div>
    </div>
  
    @include('sweetalert::alert')
  @endsection
@section('script')
 <script src="js/finances.js"></script>
 @endsection