@extends('layouts.main')

@section('container')
    

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Revenue : </div>
                                @foreach ($finances as $item)    
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.
                                    {{ $item->amount }}
                                </div>
                                @endforeach
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                             <a href="/projects" style="text-decoration: none;" class="text-success">Projects</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $totalprojects }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">

                                    {{-- Catatan Dari Setup Project 
                                        untuk mendapatakan presentase 
                                        Rumusnya adalah (bagian yang telah selesai) / (total bagian x 100 ) --}}

                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $tasks }}%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: {{ $tasks }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                               <a href="/developers" style="text-decoration:none;" class="text-warning" >Developers</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $developers}}</div>
                            
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- card clients --}}



    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4 h-auto">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Project</h6>
                </div>
                <!-- Card Body -->
                    
                    

                        <!-- <div class="fail-to-load" style="margin: auto; width:fit-content ;">
                            <i class="fa fa-3x fa-exclamation-circle" aria-hidden="true" style="margin-left: 60px;"></i>
                            <p>Oops Database Kosong!</p>

                        </div> -->
                       
                        <!--  -->


                        
                        <div class="" style="margin-top: -1%">
                            <table class="table" id="custom">
                                <thead>
                                  <tr>
                                    <th data-sortable="false">#</th>
                                    <th data-sortable="false">Name</th>
                                    <th data-sortable="false">Status</th>
                                    <th data-sortable="false">Deadline</th>
                                  </tr>
                                </thead>
                                <tbody>


                                    <?php  $i= 1; ?>
                                    @foreach ($project as $item)    
                                    <tr>
                                      <th scope="row">{{ $i }}</th>
                                      <td>{{ $item->name }}</td>
                                      <td>{{ $item->status }}</td>
                                      <td>{{ $item->deadline }}</td>
                                    </tr>
                                    <?php  $i++; ?>
                                    @endforeach

                                </tbody>
                              </table>
                   






                    </div>
            </div>
        </div>

        <!-- Pie f Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Task</h6>

                </div>
                <!-- Card Body -->
                   
                        <!--  tempat Projects -->

                        <div class="" style="overflow-x:auto;">
                            <table class="table" id="custom2" style="margin-top: -3%">
                                <thead>
                                  <tr>
                                    <th data-sortable="false">#</th>
                                    <th data-sortable="false">Project</th>
                                    <th data-sortable="false">Status</th>
                                    <th data-sortable="false">Deadline</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th>1</th>
                                    <td>login</td>
                                    <td>Incomplete</td>
                                    <td>12 Maret 2023</td>
                                  </tr>


                                </tbody>
                              </table>
                        </div>


                        
                        <!-- Ahir tempat Proyek -->
           
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                        </span>
                    </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->


</div>
@include('sweetalert::alert')

@endsection