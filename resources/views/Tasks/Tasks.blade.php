@extends('layouts.main')

@section('isi')

    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tasks</h1>
    
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Task

            </div>
            <div class="card">
                <div class="container">
                    <div class="heading-t-project">
                        <h4>Dari Project : Managemen Hotel</h4>
                    </div>
                    <div class="d-sm-flex">
                        <div class="row">
                            <h6 class="pe-4">Tgl Deadline : 13 Juni 2023</h5>
                        </div>
                        <div class="row">
                            <h6>Status Project : <span style="color: red">Belum Selesai</span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body" style="overflow-x:auto;"">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Task</th>
                            <th>Deskripsi Task</th>
                            <th>Dikerjakan Oleh</th>
                            <th>Deadline task</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Task</th>
                            <th>Deskripsi Task<th>
                            <th>Dikerjakan Oleh</th>
                            <th>Deadline task</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Managemen Hotel</td>
                            <td>Tidak ada</td>
                            <td>Supratman</td>
                            <td>2022/09/21</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection