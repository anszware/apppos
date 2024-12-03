<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"  aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">New User</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form wire:submit="save">
        <div class="modal-body">
            <div class="mb-4">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control @error('userform.username') is-invalid @enderror" wire:model="userform.username">
            </div>
            <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control @error('userform.email') is-invalid @enderror" wire:model="userform.email">
                @error('userform.email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control @error('userform.password') is-invalid @enderror" wire:model="userform.password">
                @error('userform.password') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="mb-4">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password" class="form-control @error('userform.confirm_password') is-invalid @enderror" wire:model="userform.confirm_password">
                @error('userform.confirm_password') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="mb-4">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <select name="level" id="level" class="form-control @error('userform.level') is-invalid @enderror" wire:model="userform.level">
                    <option value="">--Pilih Level--</option>
                    <option value="superadmin">Super Admin</option>
                    <option value="admin">Admin</option>
                    <option value="kasir">Kasir</option>
                </select>
                @error('userform.level') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
</div>
@section('poscript')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        Livewire.on('closeModal', () => {
            $("#exampleModal").modal('hide');
            // $('.modal-backdrop').remove(); // Menghapus elemen backdrop secara manual

        });
    });
</script>

@endsection
