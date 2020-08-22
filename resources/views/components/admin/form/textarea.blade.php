<div class="col-12">
    <div class="form-group">
        <label for="">{{$label}}</label>
        <textarea name="{{$name}}" class="form-control form-control-sm editor"
                  placeholder="{{$label}}" {{$required??""}}>{{$value??''}}</textarea>
    </div>
</div>
