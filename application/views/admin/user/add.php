<div class="row">
    <div class="col-md-4 d-flex align-items-stretch grid-margin">
      <div class="row flex-grow">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" id="judul_user">Tambah User</h4>
              <form id="form_user" method="POST" enctype="multipart/form-data">
               <div class="form-group">
                  <label>Foto</label>
                  <input type="file" class="form-control" name="user_foto" onchange="bacaFoto(this);">
                  <img id="foto" src="#" alt="Foto Profil" />
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="hidden" name="user_id" value="">
                  <input type="text" class="form-control" name="user_username" placeholder="Username">
                </div>
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" name="user_fullname" placeholder="Nama Lengkap">
                </div>
                <div id="form-password">
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" id="password" name="user_password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label>Konfirmasi Password</label>
                      <input type="password" class="form-control" id="confirm_password" placeholder="Konfirmasi password">
                    </div>
                </div>
               <!--  <div class="form-group">
                  <label>File upload</label>
                  <input type="file" name="img[]" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" placeholder="Upload Image">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                    </span>
                  </div>
                </div> -->
                <button type="submit" class="btn btn-success mr-2">Simpan</button>
                <button type="reset" class="btn btn-light btn-reset">Batal</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-8 d-flex align-items-stretch grid-margin">
      <div class="row flex-grow">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bordered table</h4>
                  <div class="table-responsive">
                    <table id="table_user" class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Profile
                          </th>
                          <th>
                            Username
                          </th>
                          <th>
                            Nama Lengkap
                          </th>
                          <th>
                            Aksi
                          </th>
                        </tr>
                      </thead>
                      <tbody id="tbody_user"></tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
<script type="text/javascript">
function bacaFoto(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#foto')
      .attr('src', e.target.result)
      .width(150)
      .height(200);
    };

    reader.readAsDataURL(input.files[0]);
  }
}
</script>