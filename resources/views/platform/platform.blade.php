@extends('layouts.main')

@section('container')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Platform Settings</h1>

    </div>
{{--  --}}
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Platform Settings
            <div class="createnew float-right d-sm-flex align-items-center" id="createnew" data-bs-toggle="modal" data-bs-target="#formmodalplatform">
               <span class="mr-2">Add New Platform</span>
            <i class="fas fa-plus-circle float-right" style="margin-left: 5px ;"></i>

        </div>
        </div>
        <div class="card-body" style="overflow-x:auto;"">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th data-sortable="false">No.</th>                 
                        <th data-sortable="false">Platform Name</th>
                        <th data-sortable="false">Action</th>
  
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No.</th>                 
                        <th>Platform Name</th>
                        <th>Action</th>

                       
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Web</td>
                        <td>
                            <span style="margin-left: -5%">
                            <a href="" data-bs-toggle="modal" data-bs-target="#formmodalplatform" class="btn text-success" id="action"><i class="fas fa-pencil-alt"></i></a>|<a href="#" class="btn text-danger" id="deleteplatform" data-bs-toggle="modal" data-bs-target="#formmodalhapus"><i class="fas fa-trash-alt"></i></a>
                            </span>
                        </td>


               
                    </tr>


                </tbody>
            </table>


        </div>
    </div>
<!-- Modal hapus -->
<div class="modal fade" id="formmodalhapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header flex text-danger">
          <h5 class="modal-title " id="formmodallabel">Warning</h5> <i class="fas fa-exclamation-circle mt-2 ml-1"></i>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-6">

            <div class="container true">
                <p>
                    <span class="text-danger">Warning!</span>, this Platform Data Cannot Be deleted because is being used by a project(s)!
                    <br>you can Edit the only Platform of it</p>
            </div>
            <div class="container false">
                <p>
                    You sure you want to delete this Category?
                    <br> <span class="text-danger">You cannot Undo the Process!.</span></p>
                    <a href="#" class="btn btn-danger">Yes, i'm Sure!</a>
            </div>
        <div class="modal-footer mt-3">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
        </div>
      </div>
    </div>
  </div>
  
  




</div>

<!-- modal buat/ubah platform -->
<div class="modal fade" id="formmodalplatform" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formmodallabel">Add New Platform</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-6">

              <form id="buatubah" action="" method="post">
                  
                  <div class="container">
                    <label for="nama-client" class="form-label">Platform Name :</label>
                    <input type="text" id="nama-platform" name="nama" class="form-control">
                        <input type="hidden" name="id" id="id-proyek" value="" readonly>
                  </div>
        <div class="modal-footer mt-3">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add New Platform</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  




</div>
</div>



@endsection

