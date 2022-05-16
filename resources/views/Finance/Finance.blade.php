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
            <!-- Find the JS file for the following chart at: src/js/charts/echarts/crm-revenue.js-->
            <!-- If you are not using gulp b fased workflow, you can find the transpiled code at: public/assets/js/theme.js-->
            <div class="card-header">
              <div class="createnewp float-right d-sm-flex align-items-center" style="padding: 5px" id="createnew" data-bs-toggle="modal" data-bs-target="#formmodalproject">
                <a href="/finance/forms" style="color: black; text-decoration:none;"><span class="mr-2">Add Mutation</span></a>
             <i class="fas fa-plus-circle float-right " style="margin-left: 5px ;"></i>
            </div>
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
                      <td>
                        <span style="margin-left: -5%">
                          <a href="" data-bs-toggle="modal"  data-id="{{ $finance->id }}"  data-bs-target="#formmodalcategory" class="updatecategory btn" style="color: rgb(41, 0, 205)"><i class="fas fa-edit"></i></a>|
                          <a href="#" class="btn text-danger deletedfinances" data-id="{{ $finance->id }}" data-description="{{ $finance->description }}" id="action" onclick="deletedfinances()" ><i class="fas fa-trash-alt"></i></a>
                          </span>
                      </td>
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
 <script>
   function deletedfinances(){
    $('.deletedfinances').click(function (e) { 
        var id = this.getAttribute('data-id');
        var description = this.getAttribute('data-description');
        swal({
            text: "Are you Sure Deleted Data Finance " + description + "?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              window.location = '/finance/delete/'.concat(id)
            }
          });
        
    });
}
 </script>
 @endsection