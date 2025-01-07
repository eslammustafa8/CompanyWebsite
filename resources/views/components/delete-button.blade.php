 <form action="{{ $href }}" method="POST" class="d-inline-block"
     id="deleteForm-{{ $id }}">
     @csrf
     @method('DELETE')
     <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{  $id }})">
         <i class="fe fe-trash-2 fa-2x"></i>
     </button>
 </form>
