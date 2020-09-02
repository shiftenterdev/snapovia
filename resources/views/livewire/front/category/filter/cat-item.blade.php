<div>
    <div class="custom-control custom-checkbox mb-3">
        <input class="custom-control-input"
               id="{{$category->url_key}}"
               value="{{$category->id}}"
               wire:model="cat_id"
               type="checkbox">
        <label class="custom-control-label" for="{{$category->url_key}}">
            {{$category->name}} ({{$category->products->count()}})
        </label>
    </div>
</div>