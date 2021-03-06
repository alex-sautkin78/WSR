<div class="modal" tabindex="-1" role="dialog" id="modal_update_status">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Изменение статуса</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.update', ['id'=>$data->id]) }}" method="post" id="add_status">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <label for="name" class="col col-form-label text-md-right">Наименование</label>
                        <div class="col-md">
                            <select name="status" class="form-control">
                                @foreach($st as $el)
                                    <option value="{{$el->id}}">{{$el->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

