@extends('layouts.main')

@section('isi')
<div class="card">
    <div class="card-header d-flex flex-between-center ps-0 py-0 border-bottom">
      <ul class="nav nav-tabs border-0 flex-nowrap tab-active-caret" id="crm-revenue-chart-tab" role="tablist" data-tab-has-echarts="data-tab-has-echarts">
        <li class="nav-item" role="presentation"><a class="nav-link py-3 mb-0 active" id="crm-revenue-tab" data-bs-toggle="tab" href="#crm-revenue" role="tab" aria-controls="crm-revenue" aria-selected="true">Revenue</a></li>
        <li class="nav-item" role="presentation"><a class="nav-link py-3 mb-0" id="crm-users-tab" data-bs-toggle="tab" href="#crm-users" role="tab" aria-controls="crm-users" aria-selected="false">Users</a></li>
        <li class="nav-item" role="presentation"><a class="nav-link py-3 mb-0" id="crm-deals-tab" data-bs-toggle="tab" href="#crm-deals" role="tab" aria-controls="crm-deals" aria-selected="false">Deals</a></li>
        <li class="nav-item" role="presentation"><a class="nav-link py-3 mb-0" id="crm-profit-tab" data-bs-toggle="tab" href="#crm-profit" role="tab" aria-controls="crm-profit" aria-selected="false">Profit</a></li>
      </ul>
      <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-session-by-country" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--2"></span> Font Awesome fontawesome.com --></button>
        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-session-by-country"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="row g-1">
        <div class="col-xxl-3">
          <div class="row g-0 my-2">
            <div class="col-md-6 col-xxl-12">
              <div class="border-xxl-bottom border-xxl-200 mb-2">
                <h2 class="text-primary">$37,950</h2>
                <p class="fs--2 text-500 fw-semi-bold mb-0"><svg class="svg-inline--fa fa-circle fa-w-16 text-primary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <span class="fas fa-circle text-primary me-2"></span> Font Awesome fontawesome.com -->Closed Amount</p>
                <p class="fs--2 text-500 fw-semi-bold"><svg class="svg-inline--fa fa-circle fa-w-16 text-warning me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <span class="fas fa-circle text-warning me-2"></span> Font Awesome fontawesome.com -->Revenue Goal</p>
              </div>
              <div class="form-check form-check-inline me-2"><input class="form-check-input" id="crmInbound" type="radio" name="bound" value="inbound" checked="Checked"><label class="form-check-label" for="crmInbound">Inbound</label></div>
              <div class="form-check form-check-inline"><input class="form-check-input" id="outbound" type="radio" name="bound" value="outbound"><label class="form-check-label" for="outbound">Outbound</label></div>
            </div>
            <div class="col-md-6 col-xxl-12 py-2">
              <div class="row mx-0">
                <div class="col-6 border-end border-bottom py-3">
                  <h5 class="fw-normal text-600">$4.2k</h5>
                  <h6 class="text-500 mb-0">Email</h6>
                </div>
                <div class="col-6 border-bottom py-3">
                  <h5 class="fw-normal text-600">$5.6k</h5>
                  <h6 class="text-500 mb-0">Social</h6>
                </div>
                <div class="col-6 border-end py-3">
                  <h5 class="fw-normal text-600">$6.7k</h5>
                  <h6 class="text-500 mb-0">Call</h6>
                </div>
                <div class="col-6 py-3">
                  <h5 class="fw-normal text-600">$2.3k</h5>
                  <h6 class="text-500 mb-0">Other</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xxl-9">
          <div class="tab-content">
            <!-- Find the JS file for the following chart at: src/js/charts/echarts/crm-revenue.js-->
            <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
            <div class="tab-pane active" id="crm-revenue" role="tabpanel" aria-labelledby="crm-revenue-tab">
              <div class="echart-crm-revenue" data-echart-responsive="true" data-echart-tab="data-echart-tab" style="height: 320px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1649578976662"><div style="position: relative; width: 648px; height: 320px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;"><canvas data-zr-dom-id="zr_0" width="648" height="320" style="position: absolute; left: 0px; top: 0px; width: 648px; height: 320px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class="" style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; background-color: transparent; border-width: 0px; border-radius: 4px; color: rgb(102, 102, 102); font: 14px / 21px &quot;Microsoft YaHei&quot;; padding: 0px; top: 0px; left: 0px; transform: translate3d(475px, 61px, 0px); border-color: rgb(255, 255, 255); pointer-events: none; visibility: hidden; opacity: 0;"><div class="card">
    <div class="card-header bg-light py-2">
      <h6 class="text-600 mb-0">07 Apr, 2022</h6>
    </div>
  <div class="card-body py-2">
    <h6 class="text-600 fw-normal">
      <svg class="svg-inline--fa fa-circle fa-w-16 text-primary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <span class="fas fa-circle text-primary me-2"></span> Font Awesome fontawesome.com -->Revenue: 
      <span class="fw-medium">$885</span></h6>
    <h6 class="text-600 mb-0 fw-normal"> 
      <svg class="svg-inline--fa fa-circle fa-w-16 text-warning me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <span class="fas fa-circle text-warning me-2"></span> Font Awesome fontawesome.com -->Revenue Goal: 
      <span class="fw-medium">$680</span></h6>
  </div>
</div></div></div>
            </div>
            <div class="tab-pane" id="crm-users" role="tabpanel" aria-labelledby="crm-users-tab">
              <div class="echart-crm-users" data-echart-responsive="true" data-echart-tab="data-echart-tab" style="height: 320px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1649578976663"><div style="position: relative; width: 0px; height: 320px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="0" height="320" style="position: absolute; left: 0px; top: 0px; width: 0px; height: 320px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class=""></div></div>
            </div>
            <div class="tab-pane" id="crm-deals" role="tabpanel" aria-labelledby="crm-deals-tab">
              <div class="echart-crm-deals" data-echart-responsive="true" data-echart-tab="data-echart-tab" style="height: 320px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1649578976664"><div style="position: relative; width: 0px; height: 320px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="0" height="320" style="position: absolute; left: 0px; top: 0px; width: 0px; height: 320px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class=""></div></div>
            </div>
            <div class="tab-pane" id="crm-profit" role="tabpanel" aria-labelledby="crm-profit-tab">
              <div class="echart-crm-profit" data-echart-responsive="true" data-echart-tab="data-echart-tab" style="height: 320px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1649578976665"><div style="position: relative; width: 0px; height: 320px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="0" height="320" style="position: absolute; left: 0px; top: 0px; width: 0px; height: 320px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class=""></div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection