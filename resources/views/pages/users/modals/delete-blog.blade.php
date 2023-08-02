<!-- Modal -->
<div class="modal fade" id="delete{{$blog->id}}" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content">

      <form action="{{route('blog.delete', $blog->id)}}" method="POST">

        @csrf

        @METHOD('DELETE')

        <div class="modal-header">

          <h5 class="modal-title" id="deleteLabel">Delete Blog</h5>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>

        <div class="modal-body">

          <div>

            Are you sure you want to delete this data?

          </div>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-secondary rounded-0" data-bs-dismiss="modal">Cancel</button>

          <button type="submit" class="btn btn-primary rounded-0">Delete</button>

        </div>

      </form>

    </div>

  </div>
  
</div>