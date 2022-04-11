@extends('layouts.main')

@section('isi')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category Settings</h1>

    </div>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Category Settings
            <div class="createnew float-right d-sm-flex align-items-center" id="createnew" data-bs-toggle="modal" data-bs-target="#formmodalclient">
               <span class="mr-2">Add New Category</span>
            <i class="fas fa-plus-circle float-right "></i>

        </div>
        </div>
        <div class="card-body" style="overflow-x:auto;"">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th data-sortable="false">No.</th>                 
                        <th data-sortable="false">Category Name</th>
                        <th data-sortable="false">action</th>
  
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No.</th>                 
                        <th>Category Name</th>
                        <th>action</th>

                       
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Instansi</td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#formmodalclient" class="btn btn-success">Edit</a>|<a href="" class="btn btn-danger">Hapus</a></td>
  



               
                    </tr>


                </tbody>
            </table>

        </div>
    </div>


    <!-- modal buat/ubah platform -->
<div class="modal fade" id="formmodalplatform" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formmodallabel">Add new Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-6">

              <form id="buatubah" action="" method="post">
                  
                  <div class="container">
                    <label for="nama-client" class="form-label">Category name :</label>
                    <input type="text" id="nama-platform" name="category-name" class="form-control">
                        <input type="hidden" name="id-category" id="id-category" value="" readonly>
                  </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add New Category</button>
          </form>
        </div>
      </div>
    </div>
  </div>



    </div>
</div>



@endsection

