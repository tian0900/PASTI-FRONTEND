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
                        <input type="text" required="required" id="nama" name="nama" class="form-control" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Jenis</label>
                    <div class="col-sm-9">
                        <select class="form-control"  required="required" name="kategori" aria-label="Default select example" >
                            <option value="Sirup">Sirup</option>
                            <option value="Popok Dewasa">Popok Dewasa</option>
                            <option value="Tablet">Tablet</option>
                            <option value="Minyak Herbal">Minyak Herbal</option>
                            <option value="Kontrasepsi">Alat Kontrasepsi</option>
                            <option value="bayi">Perlengkapan Bayi</option>
                            <option value="Popok Bayi">Popok Bayi</option>
                            <option value="Box">Box</option>
                            <option value="Kapsul">Kapsul</option>
                            <option value="Salep">Salep</option>
                            <option value="Sachet">Sachet</option>
                            <option value="Bedak">Bedak</option>
                            <option value="Tube">Tube</option>
                            <option value="Botol">Botol</option>
                            <option value="Minyak Angin">Minyak Angin</option>
                        </select>
                    </div>
                </div>
                    <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Gambar</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="formFileMultiple" required="required"  name="gambar" type="file" id="formFileMultiple" multiple >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Harga</label>
                    <div class="col-sm-9">
                        <input type="number" required="required" id="harga" name="harga" class="form-control" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Stok</label>
                    <div class="col-sm-9">
                        <input type="number" required="required" id="stok" name="stok" class="form-control" >
                    </div>
                </div>
               
                
                
				<button type="button" class="btn btn-danger" onclick="window.location.href='/daftarproduk'"><i class="fas fa-times"></i> Batal</button>
				<button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Tambah</button>
            </form>
            

        </div>
    </div>
</div>

@include('admin.footeradmin')