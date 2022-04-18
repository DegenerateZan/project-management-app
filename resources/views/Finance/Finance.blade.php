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
                <h2 class="text-primary">Rp. 0</h2>
                <h6 class="text-500 mb-0">Total Revenue</h6>


              </div>
            </div>
            <div class="col-md-6 col-xxl-12 py-2" id="revenue">
              <div class="row" style="width: 400px; justify-content:right">
                <div class="col-6 border-end border-bottom py-3">
                  <h5 class="fw-normal text-600">Rp. 0</h5>
                  <h6 class="text-500 mb-0">total salary to be paid</h6>
                </div>
                <div class="col-6 border-bottom py-3">
                  <h5 class="fw-normal text-600">Rp. 0</h5>
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
                  <tr>
                      <td>Rp.5000000</td>
                      <td>Keuangan Telah di bayarkan ke Gaji</td>
                      <td>Debit</td>
                      <td>2022/10/11</td>
                  </tr>


              </tbody>
          </table>


 
        </div>
      </div>
    </div>
  </div>
  @endsection