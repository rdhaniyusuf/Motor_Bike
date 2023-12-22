@extends('main')

@section('content')

<div class="container">
      	<div class="row">
            <div class="col-md-3 ">
                 <div class="list-group ">
                      <div style="align:center">
                        <img src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="rounded-circle" style="width:100px; border-color:blue"> <br>
                        <br>
                        <input id="profile-image-upload" type="file">
                      </div>
                  </div> 
            </div>

            <div class="prof">
              <ul class="nav nav-tabs md-tabs" id="myTabMD" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="dashboard-tab-md" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard"
                      aria-selected="true">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="settings-tab-md" data-toggle="tab" href="#settings" role="tab" aria-controls="settings"
                      aria-selected="false">Settings</a>
                  </li>
                </ul>
                
                <div class="row bg-white">
                  <div class="col-md-12">
                    <div class="card" style="width: 50rem; height: 32rem;">
                      <div class="card-body" style="padding: 20px;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tab-content card" id="myTabContentMD" style="padding: 20px;">
                                    <div class="tab-pane fade show active bg-white bg-white" id="dashboard" role="tabpanel" aria-labelledby="dashboard">
                                        <form id="tab">
                                            <div class="form-group row">
                                                <label for="username" class="col-4 col-form-label">Username</label> 
                                                <div class="col-8">
                                                  <input id="username" name="username" placeholder="Username" class="form-control here" required="required" type="text">
                                                </div>
                                            </div>
              
                                            <div class="form-group row">
                                                <label for="email" class="col-4 col-form-label">Email</label> 
                                                <div class="col-8">
                                                  <input id="email" name="email" placeholder="Email" required="required" class="form-control here" type="text">
                                                </div>
                                            </div>
    
                                            <div class="form-group row">
                                                <label for="name" class="col-4 col-form-label">Nama Depan</label> 
                                                <div class="col-8">
                                                  <input id="name" name="name" placeholder="Nama Depan" class="form-control here" type="text">
                                                </div>
                                            </div>
    
                                            <div class="form-group row">
                                                <label for="lastname" class="col-4 col-form-label">Nama Belakang</label> 
                                                <div class="col-8">
                                                  <input id="lastname" name="lastname" placeholder="Nama Belakang" class="form-control here" type="text">
                                                </div>
                                            </div>
    
                                            <div class="form-group row">
                                                <label for="address" class="col-4 col-form-label">Alamat</label> 
                                                <div class="col-8">
                                                  <textarea rows="3" class="form-control here"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                              <label for="handphone" class="col-4 col-form-label">Nomor Telepon</label> 
                                              <div class="col-8">
                                                <input id="handphone" name="hape" placeholder="No.HP" class="form-control here" type="tel">
                                              </div>
                                          </div>
    
                                            <div class="form-group row">
                                                <div class="offset-4 col-8">
                                                  <button name="submit" type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                </div>
                                            </div>
                                        </form>
                                      </div>
                                    <div class="tab-pane fade bg-white" id="settings" role="tabpanel" aria-labelledby="settings">
                                        <form>
                                            <div class="form-group row">
                                                <label for="oldpw" class="col-4 col-form-label">Masukkan Password Lama: </label> 
                                                <div class="col-8">
                                                  <input id="oldpw" name="oldPW" placeholder="Password Lama" class="form-control here" type="password">
                                                </div>
                                            </div>
    
                                            <div class="form-group row">
                                                <label for="newpw" class="col-4 col-form-label">Masukkan Password Baru: </label> 
                                                <div class="col-8">
                                                  <input id="newpw" name="newPW" placeholder="Password Baru" class="form-control here" type="password">
                                                </div>
                                            </div>
    
                                            <div class="form-group row">
                                                <div class="offset-4 col-8">
                                                  <button name="submit" type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                          </div>
                    </div>
                  </div>
                </div>
              </div>

</div>
<br>
<br>
@endsection