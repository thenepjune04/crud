<div class="form-group {{ $errors->has('NameBuffe') ? 'has-error' : ''}}">
    <label for="NameBuffe" class="control-label">{{ 'Namebuffe' }}</label>
    <input class="form-control" name="NameBuffe" type="text" id="NameBuffe" value="{{ isset($buffet->NameBuffe) ? $buffet->NameBuffe : ''}}" >
    {!! $errors->first('NameBuffe', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('position') ? 'has-error' : ''}}">
    <label for="position" class="control-label">{{ 'Position' }}</label>
    <textarea class="form-control" rows="5" name="position" type="textarea" id="position" >{{ isset($buffet->position) ? $buffet->position : ''}}</textarea>
    {!! $errors->first('position', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ 'Price' }}</label>
    <textarea class="form-control" rows="5" name="price" type="textarea" id="price" >{{ isset($buffet->price) ? $buffet->price : ''}}</textarea>
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
