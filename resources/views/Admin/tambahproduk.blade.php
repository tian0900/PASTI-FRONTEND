@include('admin.navadmin')


<div class="edit">
    <div class="card">
    <h1>Tambah Produk</h1>
        <div class="card-body">


            <form action="{{route('daftarproduk.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" required="required" id="nama" name="nama_produk" class="form-control" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Jenis</label>
                    <div class="col-sm-9">
                        <select class="form-control"  required="required" name="jenis_produk" aria-label="Default select example" >
                            <option value="Sirup">Sirup</option>
                            <option value="Popok Bayi">Popok Bayi</option>
                            <option value="Tablet">Tablet</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                        <div class="form-floating">
                            <textarea class="form-control"  required="required" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="deskripsi_produk"></textarea>
        
                         </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Gambar</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="formFileMultiple" required="required"  name="gambar_produk" type="file" id="formFileMultiple" multiple >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Harga</label>
                    <div class="col-sm-9">
                        <input type="number" required="required" id="harga" name="Harga_Produk" class="form-control" >
                    </div>
                </div>
               
                
                
				<button type="button" class="btn btn-danger" onclick="window.location.href='/daftarproduk'"><i class="fas fa-times"></i> Batal</button>
				<button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Tambah</button>
            </form>
            

        </div>
    </div>
</div>

@include('admin.footeradmin')