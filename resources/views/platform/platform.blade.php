@extends('layouts.main')

@section('container1')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h2 class="h3 mb-0 text-gray-800">Platform Settings / <a href="/ProjectPlatform" class="text-gray-800" style="text-decoration: none;" >Platform Projects</a></h2>
      <span class="mr-4">Data Platform </span>
    </div>
{{--  --}}
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i> 
            <div class="createnewm float-right d-sm-flex align-items-center" style="padding: 5px" id="createnew-p" data-bs-toggle="modal" data-bs-target="#formmodalplatform">
               <span class="mr-2">Add Platform</span>
            <i class="fas fa-plus-circle float-right" style="margin-left: 5px ;"></i>

        </div>
        </div>
        <div class="card-body" style="overflow-x:auto;">
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
                  <?php $i=1  ?>
                  @foreach ($platforms as $platform)
                  <tr>
                      <td>{{ $i }}</td>
                      <td>{{ $platform->name }}</td>
                      <td>
                          <span style="margin-left: -5%">
                          <a href="" data-bs-toggle="modal" data-bs-target="#formmodalplatform" class="btn edit-platform" data-id="{{ $platform->id }}" id="action" style="color: rgb(41, 0, 205);"><i class="fas fa-edit"></i></a>|
                          <a href="#" class=" text-danger delete-platform" data-name="{{ $platform->name }}" id="deleteplatform" data-id="{{ $platform->id }}" onclick="deleteplatform()"><i class="fas fa-trash-alt"></i></a>
                          </span>
                      </td>
                  </tr>     
                  <?php $i++ ?>
                  @endforeach


                </tbody>
            </table>


        </div>
    </div>
<!-- modal buat/ubah platform -->
<div class="modal fade" id="formmodalplatform" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="labelmodal">Add New Platform</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-6">

              <form  class="addupdateplatfromproject" action="/platform/store" method="post">
                  @csrf
                  <div class="container">
                    <label for="nama-client" class="form-label">Platform Name :</label>
                    <input type="text" id="name" name="name" class="form-control">
                        <input type="hidden" name="id" id="id-p" value="" readonly>
                  </div>
        <div class="modal-footer mt-3">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add New Platform</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  @include('sweetalert::alert')
  




</div>
</div>

@endsection
@section('script')
<script src="js/platform.js"></script>
@endsection

