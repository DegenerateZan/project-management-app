@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Projects</h1>
    {{--  --}}
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Projects
                <div class="createnew float-right d-sm-flex align-items-center" id="createnew" data-bs-toggle="modal" data-bs-target="#formmodalproject">
                    <span class="mr-2">Add New Project</span>
                 <i class="fas fa-plus-circle float-right " style="margin-left: 5px ;"></i>
 
             </div>
            </div>
            <div class="card-body" style="overflow-x:auto;"">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th data-sortable="false">Client</th>
                            <th data-sortable="false">Project Name</th>
                            <th data-sortable="false">Category</th>
                            
                            <th data-sortable="false">Deadline</th>
                            <th data-sortable="false">Price</th>
                            <th data-sortable="false">Status</th>
                            <th data-sortable="false">Manufacture Date</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Project Name</th>
                            <th>Category</th>
                            
                            <th>Deadline</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Manufacture Date</th>
                     
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($projects as $project)
                        <tr>
                            <td>{{ $project->client->name_client }}</td>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->category->name }}</td>
                            
                            <td>{{ $project->deadline }}</td>
                            <td>Rp.{{ $project->price }}</td>

                         @if ($project->status === 0)
                             <td>On Progress</td>
                         @else
                             <td>Finsh</td>
                         @endif
                            <td>{{ $project->manufacture_date }}
                                <div class="dropdown" style="float: right;">
                                    <button class="dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                          <li><a class="dropdown-item tampilmodalubahproyek" dataid="" href="#" data-bs-toggle="modal" data-bs-target="#formmodalproject">Edit</a></li>
                                                          <li><a class="dropdown-item" href="" style="color:red;">Delete</a></li>
                                                          <li><a class="dropdown-item" href="
                                                            /tasks
                                                            " style="color:blue">Show Task</a></li>

                                    </ul>
                                  </div>
                 
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>

        <!-- modal tambah proyek baru -->
<div class="modal fade" id="formmodalproject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formmodallabel">Add new Project</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-6">

          <form action="" method="post" id="formbuatubah">

                      <div class="container">
                        <label for="client-project" class="form-label">From Client:</label>
                        <select name="id_client" id="client-project" class="form-control" required >
                                        <option value="">-- Select Clients --</option>
                                        @foreach ($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->name_client }}</option>
                                        @endforeach
                                        
                                    </select>
                                    <input type="hidden" id="id-project" name="id_project">
                  <div class="row mt-3">
                      <div class="col-sm">
                          <label for="project-name" class="form-label">Project Name :</label>
                          <input type="text" id="project-name" name="project-name" class="form-control">
  
                      </div>
                      
                      <div class="col-sm">
                          <label for="category" class="form-label">Categori :</label>
                          <select name="id_category" id="category" class="form-control" required>
                            <option value="">-- Select Category --</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name}}</option>
                            @endforeach
                        </select>
                      </div>
                  </div>
                      </div>     
                     <div class="container">
                      <div class="row mt-3">
                      <div class="col-sm">
                          <label for="deadline" class="form-label">Deadline</label>
                          <input type="date" id="deadline" name="deadline" class="form-control">
  
                      </div>
                      <div class="col-sm">
                          <label for="platform" class="form-label">Platform</label>
                          <select name="id_platform" id="platform" class="form-control">
                            <option value="">-- Select Platfroms --</option>
                                        @foreach ($platforms as $platform)
                                        <option value="{{ $platform->id }}">{{ $platform->name}}</option>
                                        @endforeach
                                        
                                    </select>
                      </div>
                      </div>
                      <div class="row">
                        <div class="col-sm mt-4">
                            <label for="project-name" class="form-label">Project Price :</label>
                           <input type="text" id="price" name="price" class="form-control">
    
                        </div>
                        
                      
              </div>
              </div>
        <div class="modal-footer mt-3">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Project</button>
          </form>

        </div>
    </div>
  </div>
  
            </div>
        </div>

    </div>

@endsection