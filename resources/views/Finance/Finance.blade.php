@extends('layouts.main')

@section('container')



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
                <h2 class="text-primary">Rp.{{  number_format($payments, '2',',','.') }}</h2>
                <h6 class="text-500 mb-0">Total Revenue</h6>


              </div>
            </div>
            <div class="col-md-6 col-xxl-12 py-2" id="revenue">
              <div class="row" style="width: 400px; justify-content:right">
                <div class="col-6 border-end border-bottom py-3">
                  <h5 class="fw-normal text-600">Rp.{{  number_format($salary, '2',',','.') }}</h5>
                  <h6 class="text-500 mb-0">total salary to be paid</h6>
                </div>
                <div class="col-6 border-bottom py-3">
                  <h5 class="fw-normal text-danger">Rp.{{  number_format($total, '2',',','.') }}</h5>    
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
              <div class="createnewf float-right d-sm-flex align-items-center" style="padding: 5px" id="financemodal" data-bs-toggle="modal" data-bs-target="#modalfinance">
                <span class="mr-2">Add Mutation</span>
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
                      <td>Rp.{{ $finance->finance_amount }}</td>
                      <td>{{ $finance->description }}</td>
                      <td>{{ $finance->mutation }}</td>
                      <td>2022/10/11</td>
                  </tr>
                @endforeach

              </tbody>
          </table>


          {{-- modal --}}
          <div class="modal fade" id="modalfinance" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Mutation</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form  action="/finace/store" class="addupdatefinances" method="post">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Finance Amount</label>
                      <input type="text" class="form-control"id="amount" name="amount">
                    </div>
                    <div class="mb-3">
                      <label for="mutation" class="form-label">Mutation</label>
                      <select class="form-control" onchange="myFunction()" name="mutation" id="select-debit" aria-label=".form-select-lg example">
                        <option>-- Mutation --</option>
                        <option value="Debit">Debit</option>
                        <option value="Credit">Credit</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Email address</label>
                      <input type="date" class="form-control" id="date" name >
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>
              </div>

            </div>
          </div>
          {{-- akhir modal --}}
 
        </div>
      </div>
    </div>
  </div>
  
  @endsection
  @section('script')
     <script>
   function myFunction() {
    var mutation = document.getElementById("select-debit").value;
    if (mutation === 'Debit') {
       $.ajax({
         url: "/finance/getdatapayments",
         dataType: "json",
         success: function (data) {
            document.getElementById("amount").value = data;
         }
       });
    } else {
      
    }
   
    
}
     </script>
  @endsection