<div class="col-12">
    <div class="form-group">
        <label for="">{{$label}}</label>
        <input type="text" name="{{$name}}" class="form-control form-control-sm"
               placeholder="{{$label}}" value="{{$value ?? ''}}" {{$required??''}}>
    </div>
</div>
