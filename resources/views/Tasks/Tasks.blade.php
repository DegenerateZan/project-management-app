@extends('layouts.main')

@section('container')

    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tasks</h1>
            <span class="mr-4">Data Tasks</span>
    
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <div class="createnew float-right d-sm-flex align-items-center" style="padding: 5px" id="createnew" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                    <span class="mr-2">Add Task</span>
                 <i class="fas fa-plus-circle float-right " style="margin-left: 5px ;"></i>
         {{-- project --}}
             </div>
            </div>
            <div class="card">
                <div class="container" style="margin-right: 20%">
                    <div class="heading-t-project mt-3">
                        <h4>From Project : {{ $project->name; }}</h4>
                    </div>
                    <div class="d-sm-flex">
                        <div class="row inline-block">
                            <h6 class="pe-4">Deadline : 
                                 @if ($bool_deadline_project == true)
                                <span style="color: red">{{ $string_date.' (Past)' }}</span>
                                @else
                                <span>{{ $string_date }}</span>
                                @endif
                            </h5>
                        </div>
                        <div class="row">
                            <h6>Status Project : <span style="color: ">{{ $project->status }}</span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body" style="overflow-x:auto;"">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th data-sortable="false">Task Name</th>
                            <th data-sortable="false">Deskription Task</th>
                            <th data-sortable="false">Work By</th>
                            <th data-sortable="false">Status</th>
                            <th data-sortable="false">Deadline task</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Task Name</th>
                            <th>Deskription Task</th>
                            <th>Work By</th>
                            <th>Deadline task</th>
                        </tr>
                    </tfoot>
                    <tbody>

                    @foreach($tasks as $task)
                        <tr>
                            <td>{{ $task->name }}</td>
                            <td>{{ $task->description }}</td>
                            <td>Supratman</td>
                            <td>{{ $task->deadline }}




                            </td>

                            <td>
                                <span style="margin-left: -5%">
                                    <a  href="#" dataid="" data-bs-toggle="modal" data-bs-target="#examplemodaltoggle" class="btn" id="action" style="color: rgb(41, 0, 205)"><i class="fas fa-edit"></i></a>|<a href="#" class="btn text-danger" id="action" data-bs-toggle="modal" data-bs-target="#formmodalhapus"><i class="fas fa-trash-alt"></i></a>
                                    </span>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>


                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalToggleLabel">Create task</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="" method="post">
                              <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                    <label for="nama-proyekT" class="form-label">From Project :</label>
                                      <input type="hidden" id="id-pr" name="id-project" value="">
                                          <input type="text" id="project-name" class="form-control" value="" readonly>
                                    </div>
                                    <div class="col-sm">
                                    <label for="deadline-proyek" class="form-label">Deadline project :</label>
                                    <input type="date" id="deadline-project" class="form-control" value="" readonly>
                          
                                    </div>
                              </div>

                          </div>
                       
                                  <div class="container">
                                    <input type="hidden" name="id_task" id="id-task" value="" readonly>

                                  <div class="row">
                                      <div class="col-sm">
                                          <label for="nama-task" class="form-label">Task Name:</label>
                                          <input type="teks" id="nama-task" name="task-name" class="form-control">
                  
                                      </div>
                                       <!-- <div class="col-sm">
                                              <label for="alamat" class="form-label">Status :</label>
                                              <input type="text" id="alamat" name="alamat" class="form-control">
                                     </div> -->
                                  </div>
                                  <div class="row">
                                      <div class="col-sm">
                                          <label for="deadlinetask" class="form-label">Due Date:</label>
                                          <input type="date" id="deadlinetask" name="deadlinetask" class="form-control">
                  </div>
                                      </div>
                                       <div class="row">

                  
                                     <div class="form-group">
                                        <label for="detailtask">Detail Task :</label>
                                        <textarea class="form-control" name="detaildesc" id="detaildesc" rows="3"></textarea>
                                      </div>
                                  </div>
                                  </div>
                                  
                                  <div class="modal-footer footer-proyek">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Add Task</button>
                          </form>
                      </div>
                      </div>
                    </div>
                  </div>





            </div>
        </div>
    </div>
@endsection