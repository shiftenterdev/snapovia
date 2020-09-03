<div>
    <li class="list-styled-item">
        <label class="list-styled-link" href="javascript:">
            <input type="checkbox" wire:model="category_id" value="{{$category->id}}" hidden>
            {{$category->name}} ({{$category->products->count()}})
        </label>
    </li>
</div>