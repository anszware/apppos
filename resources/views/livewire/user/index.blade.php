<div>
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4" >
        <div>
            <h3 class="fw-bold mb-3">Data User</h3>
            <h6 class="op-7 mb-2">Daftar data pegawai yang bisa login</h6>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            {{-- <a href="#" class="btn btn-label-info btn-round me-2">Manage</a> --}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <div class="card-title">Data User</div>
              <a href="#" class="btn btn-primary btn-sm btn-round" onclick="openModal()" id="addUser" data-bs-toggle="modal" data-bs-target="#exampleModal">Add User</a>
            </div>
            <div class="card-body">
                <table class="table table-striped mt-3">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Level</th>
                        <th scope="col">CreatedAt</th>
                        <th scope="col">Act</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <livewire:user.listuser/>
                        @endforeach
                    </tbody>
                  </table>


                  <x-pagination :items="$users"/>
            </div>
          </div>
        </div>
      </div>
      <livewire:user.adduser/>
</div>
