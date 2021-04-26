@include('admin.navadmin')


            <!-- Section 1 -->
            <div class="tabel1" id="section-2">
                <div class="container-fluid">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Verifikasi  Akun
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Usia</th>
                                            <th>Alamat</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                            </td>
                                            <td></td>
                                            <!-- <td><button type="button" class="btn btn-primary"><i
                                                        class="fas fa-edit"></i>
                                                    Edit</button>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" ><i class="fas fa-trash-alt"></i>
                                                    Hapus</button> -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Hapus Data</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Anda ingin menghapusnya?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
      
    </div>
  </div>



@include('admin.footeradmin')