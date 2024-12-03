<div class="row">
    <div class="col-md-6">
       Data ke {{ $items->firstItem() }} sampai {{ $items->lastItem() }} dari {{ $items->total() }}
    </div>
    <div class="col-md-6">
        {{ $items->links() }}
    </div>
</div>
