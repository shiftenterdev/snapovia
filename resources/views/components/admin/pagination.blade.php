@if($collection->perpage() < $collection->total())
    <div>Showing {{($collection->currentpage()-1)*$collection->perpage()+1}}
        to {{$collection->currentpage()*$collection->perpage()}}
        of {{$collection->total()}} entries
    </div>

    {{$collection->appends(request()->query())->links()}}
@endif
