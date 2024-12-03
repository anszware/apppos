<tr wire:key="{{ $user->id }}">
    <td>{{ $loop->index + 1}}</td>
    <td>{{ $user->username}}</td>
    <td>{{ $user->email}}</td>
    <td>{{ $user->level}}</td>
    <td>{{ $user->created_at->format('d F Y')}}</td>
    <td>
        <button class="btn btn-sm btn-danger"
        type="button"
        wire:click="delete({{$user->id}})"
        wire:confirm="Anda yakin menghapus data ini ?">
            <span class="btn-label">
              <i class="fa fa-trash"></i>
            </span>
          </button>
    </td>
  </tr>
