<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Guru</div>
                <div class="col-4">
                    <a href="?m=guru&s=view" class="btn btn-large btn-primary float-end"><b><</b></a>
                </div>
            </div>

            <div class="card-body">
               <form action="?m=guru&s=save" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="number" name="nip" class="form-control" placeholder="Nomor Induk Guru" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="nama" class="form-control" placeholder="Nama Guru" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Jenis Kelamin: &nbsp</label>
                        <input type="radio" name="jk" value="L" checked>Laki-laki
                        <input type="radio" name="jk" value="P">Perempuan
                    </div>
                    <div class="mb-3">
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir (isi dengan nama kota/kabupaten)" required>
                    </div>
                    <div class="mb-3">
                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Masukan Foto</label>
                        <input type="file" name="foto" class="form-control" accept="image/">
                    </div>
                    <div class="mb-3">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
                    </div>
               </form>
            </div>
        </div>
    </div>
</div>