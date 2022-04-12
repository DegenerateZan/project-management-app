@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Projects</h1>
    
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Projects
                <div class="createnew float-right d-sm-flex align-items-center" id="createnew" data-bs-toggle="modal" data-bs-target="#formmodalproject">
                    <span class="mr-2">Add New Project</span>
                 <i class="fas fa-plus-circle float-right "></i>
 
             </div>
            </div>
            <div class="card-body" style="overflow-x:auto;"">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th data-sortable="false">Project Name</th>
                            <th data-sortable="false">Platform / Category</th>
                            
                            <th data-sortable="false">Deadline</th>
                            <th data-sortable="false">Price</th>
                            <th data-sortable="false">Status</th>
                            <th data-sortable="false">Manufacture Date</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Project Name</th>
                            <th>Platform / Category</th>
                            
                            <th>Deadline</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Manufacture Date</th>
                     
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Managemen Hotel</td>
                            <td>Web Application / Instansi</td>
                            
                            <td>2022/07/21</td>
                            <td>Rp. 40000000</td>
                            <td>Incomplete</td>
                            <td>2022/04/25
                            

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
                                        <option value="">Choose Client</option>
                                        {{-- <?php foreach ($data["clients"] as $rowcat) : ?>
                                            <option value="<?= $rowcat["id_client"] ?>"><?= $rowcat["nama_client"]; ?></option>
                                        <?php endforeach; ?> --}}
                                    </select>
                                    <input type="text" id="id-project" name="id_project">
                  <div class="row">
                      <div class="col-sm">
                          <label for="project-name" class="form-label">Project Name :</label>
                          <input type="text" id="project-name" name="project-name" class="form-control">
  
                      </div>
                      
                      <div class="col-sm">
                          <label for="category" class="form-label">Categori :</label>
                          <select name="id_category" id="category" class="form-control" required>
                              <option value="">Choose Category</option>
                              {{-- <?php foreach ($data["optioncategory"] as $rowcat) : ?>
                                  <option value="<?= $rowcat["id_kategori"] ?>"><?= $rowcat["nama_kategori"]; ?></option>
                              <?php endforeach; ?> --}}
                          </select>
                      </div>
                  </div>
                      </div>     
                     <div class="container">
                      <div class="row">
                      <div class="col-sm">
                          <label for="deadline" class="form-label">Deadline</label>
                          <input type="date" id="deadline" name="deadline" class="form-control">
  
                      </div>
                      <div class="col-sm">
                          <label for="platform" class="form-label">Platform</label>
                          <select name="id_platform" id="platform" class="form-control">
                            <option value="">Choose Platform</option>
                            {{-- <?php foreach ($data["optionplatform"] as $rowplat) : ?>
                              <option value="<?= $rowplat["id_platform"] ?>"><?= $rowplat["nama_platform"]; ?></option>
                            <?php endforeach; ?> --}}
                          </select>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-sm">
                          <label for="projectprice" class="form-label">Project price :</label>
                          <input type="number" id="projectprice" name="harga" class="form-control">
                                  
                      </div>
                      
              </div>
              </div>
        <div class="modal-footer">
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