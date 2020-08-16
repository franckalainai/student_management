<div class="table-responsive">
    <table class="table" id="batches-table">
        <thead>
            <tr>
                <th>Batch</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($batch as $b)
            <tr>
                <td>{{ $b->year }}</td>
                <td>
                    {!! Form::open(['route' => ['batches.destroy', $b->batch_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        {{--<a data-toggle="modal" data-target="#batch-view-modal"
                            data-batch_id = "{{ $b->batch_id }}"
                            data-batch_year = "{{ $b->year }}"
                            data-created_at="{{ $b->created_at }}"
                            data-updated_at="{{ $b->updated_at }}"
                            --}}
                            <a href="{{ route('batches.show', [$b->batch_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('batches.edit', [$b->batch_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

{{--
<div class="modal fade" id="batch-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <input type="hidden" name="batch_id" id="batch_id">
            <div class="form-group">
                {!! Form::label('year', 'Year:') !!}
                <p>{{ $b->year }}</p>
            </div>

            <div class="form-group">
                {!! Form::label('created_at', 'Created_at:') !!} {{ $b->created_at }}
            </div>

            <div class="form-group">
                {!! Form::label('updated_at', 'Updated_at:') !!} {{ $b->updated_at }}
            </div>
        </div>
        <div class="modal-footer">
            <a href="{{ route('batches.index') }}" class="btn btn-warning">Close</a>
        </div>
    </div>
  </div>
</div>


@section('scripts')

    <script>
        $('#batch-view-modal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var year = button.data('year')
        var created_at = button.data('created_at')
        var updated_at = button.data('updated_at')
        var batch_id = button.data('batch_id')

        var modal = $(this)
        modal.find('.modal-title').text('VIEW BATCH INFORMATON')
        modal.find('.modal-body #year').val(year)
        modal.find('.modal-body #Created_at').val(created_at)
        modal.find('.modal-body #updated_at').val(updated_at)
        modal.find('.modal-body #batch_id').val(batch_id)
        })
    </script>

@endsection
--}}
