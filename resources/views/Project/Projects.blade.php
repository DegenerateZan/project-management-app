@extends('layouts.main')

@section('isi')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Projects</h1>
    
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Projects
                <div class="createnew float-right d-sm-flex align-items-center" id="createnew" data-bs-toggle="modal" data-bs-target="#formmodalproject">
                    <span class="mr-2">Tambah Project Baru</span>
                 <i class="fas fa-plus-circle float-right "></i>
 
             </div>
            </div>
            <div class="card-body" style="overflow-x:auto;"">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Proyek</th>
                            <th>Platform</th>
                            <th>Tgl Deadline</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Tgl Pembuatan</th>
                            <th>Kategori</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Proyek</th>
                            <th>Platform</th>
                            <th>Tgl Deadline</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Tgl Pembuatan</th>
                            <th>Kategori</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Managemen Hotel</td>
                            <td>Web Application</td>
                            <td>2022/07/21</td>
                            <td>Rp. 40000000</td>
                            <td>Belum Selesai</td>
                            <td>2022/04/25</td>
                            <td>Instansi

                                <div class="dropdown" style="float: right;">
                                    <button class="dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                          <li><a class="dropdown-item tampilmodalubahproyek" dataid="" href="#" data-bs-toggle="modal" data-bs-target="#formmodalproject">Ubah</a></li>
                                                          <li><a class="dropdown-item" href="" style="color:red;">Hapus</a></li>
                                                          <li><a class="dropdown-item" href="
                                                            /tasks
                                                            " style="color:blue">Tampilkan Task</a></li>

                                    </ul>
                                  </div>

                            </td>
                        </tr>


                    </tbody>
                </table>

        <!-- modal tambah proyek baru -->
<div class="modal fade" id="formmodalproject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formmodallabel">Tambah Project Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-6">

          <form action="" method="post" id="formbuatubah">
              <label for="nama-client" class="form-label">Dari Client:</label>
              <select name="id_client" id="client-proyek" class="form-control" required >
                              <option value="">Pilih Client</option>
                              {{-- <?php foreach ($data["clients"] as $rowcat) : ?>
                                  <option value="<?= $rowcat["id_client"] ?>"><?= $rowcat["nama_client"]; ?></option>
                              <?php endforeach; ?> --}}
                          </select>
                          <input type="test" id="id-p" name="id_proyek">
                      <div class="container">
                  <div class="row">
                      <div class="col-sm">
                          <label for="no-hp" class="form-label">Nama proyek :</label>
                          <input type="text" id="namaproyek-u" name="nama_proyek" class="form-control">
  
                      </div>
                      
                      <div class="col-sm">
                          <label for="kategori" class="form-label">Kategori :</label>
                          <select name="id_kategori" id="kategori" class="form-control" required>
                              <option value="">Pilih Kategori</option>
                              {{-- <?php foreach ($data["optioncategory"] as $rowcat) : ?>
                                  <option value="<?= $rowcat["id_kategori"] ?>"><?= $rowcat["nama_kategori"]; ?></option>
                              <?php endforeach; ?> --}}
                          </select>
                      </div>
                          
                     
                      <div class="row">
                      <div class="col-sm">
                          <label for="tgl-deadline" class="form-label">Tanggal Deadline</label>
                          <input type="date" id="tgldeadline-u" name="tgl_deadline" class="form-control">
  
                      </div>
                      <div class="col-sm">
                          <label for="platform" class="form-label">Platform</label>
                          <select name="id_platform" id="platform" class="form-control">
                            <option value="">Pilih Platform</option>
                            {{-- <?php foreach ($data["optionplatform"] as $rowplat) : ?>
                              <option value="<?= $rowplat["id_platform"] ?>"><?= $rowplat["nama_platform"]; ?></option>
                            <?php endforeach; ?> --}}
                          </select>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-sm">
                          <label for="hargaproyek" class="form-label">Harga Proyek :</label>
                          <input type="number" id="hargaproyek-u" name="harga" class="form-control">
                                  
                      </div>
                      </div>
              </div>
              </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Project</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
            </div>
        </div>

    </div>

@endsection