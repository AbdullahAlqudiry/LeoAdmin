@if ($paginator->hasPages())

    <div class="row">
        <div class="col-12">
            <ul class="pagination pull-left">

                <li class="paginate_button page-item @if ($paginator->onFirstPage()) disabled @endif">
                    <button type="button" class="page-link" wire:click="previousPage" wire:loading.attr="disabled" rel="prev">السابق</button>
                </li>
                
                <li class="paginate_button page-item mr-1 @if (!$paginator->hasMorePages()) disabled @endif">
                    <button type="button" class="page-link" wire:click="nextPage" wire:loading.attr="disabled" rel="next">التالي</button>
                </li>
                
            </ul>
        </div>
    
    </div>

@endif
