<div class="clearfix d-flex flex-row justify-content-between pb-2 align-items-center">
    @if($collection->perpage() < $collection->total())
        <div>Showing {{($collection->currentpage()-1)*$collection->perpage()+1}}
            to {{$collection->currentpage()*$collection->perpage()}}
            of {{$collection->total()}} entries
        </div>
        {{$collection->appends(request()->query())->links()}}
    @endif
</div>
