@extends('layouts.main')

@section('isi')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Settings</h1>

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
                        <th>No.</th>                 
                        <th>Category Name</th>
                        <th>action</th>
  
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
                        <td>Superman</td>
                        <td>0812345678</td>
                        <td><button class="success">Edit</button>|<button class="danger">Delete</button></td>
  



               
                    </tr>


                </tbody>
            </table>



</div>



    </div>

    <div class="container-fluid">

    </div>
</div>

<table id="datatablesSimple">
    <thead>
                    <tr>
                        <th>No.</th>                 
                        <th>Platform Name</th>
                        <th>action</th>
    
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No.</th>                 
                        <th>Platform Name</th>
                        <th>action</th>
    
                       
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Web</td>
                        <td><button class="success">edit</button>|<button class="danger">Delete</button></td>
    
    
    
    
               
                    </tr>
    
    
                </tbody>
    </table>

@endsection

