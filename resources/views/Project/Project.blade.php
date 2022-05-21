@extends('layouts.main')

@section('container1')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Projects</h1>
            <span class="mr-4">Data Projects</span>
    {{--  --}}
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <div class="createnewp float-right d-sm-flex align-items-center" style="padding: 5px" id="createnew" data-bs-toggle="modal" data-bs-target="#formmodalproject">
                    <span class="mr-2">Add Project</span>
                 <i class="fas fa-plus-circle float-right " style="margin-left: 5px ;"></i>
             </div>
            </div>
            <div class="card-body" style="overflow-x:auto;"">
                <table id="datatablesSimple" class="custom-table-size">
                    <thead>
                        <tr>
                            <th data-sortable="false">Client</th>
                            <th data-sortable="false">Project Name</th>
                            <th data-sortable="false">Category</th>
                            <th data-sortable="false">Price</th>
                            <th data-sortable="false">Has Been Paid</th>      
                            <th data-sortable="false">Remaining Project Price</th>    
                            <th data-sortable="false">Status Pyment</th>                     
                            <th data-sortable="false">Status Project</th>
                            <th data-sortable="false">Deadline</th>
                            <th data-sortable="false">Manufacture Date</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Client</th>
                            <th>Project Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Has Been Paid</th>      
                            <th>Remaining Project Price</th>    
                            <th>Status Pyment</th>                     
                            <th>Status Project</th>
                            <th>Deadline</th>
                            <th>Manufacture Date</th>
                     
                        </tr>
                    </tfoot>
                    <tbody>
                        
                        @foreach($projects as $project)
                        <?php $id_row = $project->id;
                         ?>
                        <tr>
                            
                            <td>{{ $project->client->name_client }}</td>
                            <td>{{ $project->name_project }}</td>
                            <td>{{ $project->category->name }}</td>
                            <td>Rp.{{ number_format($project->price, '2',',','.') }}</td>
                            <?php $total= 0;
                            if(isset($payments_array[$id_row])){
                            foreach($payments_array[$id_row] as $payment){ 
                                $total = $total + $payment;}
                            }?>
                            <td>Rp.{{ number_format($total, '2',',','.') }}</td>
                            <td>Rp.{{ number_format($project->price - $total, '2',',','.') }}</td>
                            @if ($total > $project->price)
                            <td class="text-success">Paid Off</td>
                            @else
                            <td class="text-danger">Not Yet Paid Off</td>
                            @endif
                            @if ($project->status === 'On Progress')
                                <td class="text-warning">On Progress</td>
                            @elseif ($project->status === 'Pending')
                                <td class="text-danger">Pending</td>
                            @else
                               <td class="text-success">Finish</td>
                            @endif
                            <td>{{ $project->deadline }}</td>
                            <td>{{ $project->manufacture_date }}
                            

                                <div class="dropdown" style="float: right;">
                                    <button class="btn dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                          <li>
                                                           <a  href="#" data-bs-toggle="modal" data-bs-target="#formmodalproject" class="tampilmodalubahp dropdown-item" id="action" data-id="{{ $project->id }}">Edit</a>
                                                         </li>              
                                                        <li>
                                                            <a href="#" class="btn text-danger deletepro dropdown-item" id="deletepro" data-id="{{ $project->id }}" data-name="{{ $project->name }}" onclick="deleteproject()">Delete</a> 
                                                          </li>
                                                         <li>
                                                           <a href="/tasks/from_project/{{ $project->id }}" class=" dropdown-item">Show Tasks</a>
                                                            </li>
                                                            
                                                          <li>
                                                      <a href="/payments/from_project/{{ $project->id }}" class=" dropdown-item">Show Payments</a>
                                               </li>
                                    </ul>
                              </div>
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
          <form id="buatubah" action="{{ route('project.store') }}" method="post" id="formbuatubah">
                     @csrf
                      <div class="container">
                        <label for="client-project" class="form-label">From Client:</label>
                        <select id="client_id" class="form-control" name="client_id" required >
                                        <option value="">-- Select Clients --</option>
                                        @foreach ($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->name_client }}</option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" id="id" name="id">
                  <div class="row mt-3">
                      <div class="col-sm">
                          <label for="project-name" class="form-label">Project Name :</label>
                          <input type="text" id="name" name="name_project" class="form-control">
                      </div>
                      <div class="col-sm">`
                          <label for="category" class="form-label">Categori :</label>
                          <select id="category" name="category_id" class="form-control" required>
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
                        <label for="platform" class="form-label">Project Status</label>
                        <select id="status" class="form-control" name="status">
                            <option value="On Progress">On Progress</option>
                            <option value="Finish">Finish</option>
                            <option value="Pending">Pending</option>  
                         </select>
                    </div>
                      </div>
                      <div class="row">
                        <div class="col-sm mt-3">
                            <label for="manufacture_date" class="form-label">Manufacture Date :</label>
                           <input type="date" id="manufacture_date" name="manufacture_date" class="form-control">
                        </div>
                      
                      <div class="row">
                        <div class="col-sm mt-3">
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
    </div>
 @include('sweetalert::alert')
@endsection
<script src="js/projects.js"></script>