@props(['title', 'variable'])
<div class="col-xl-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex">
                <div class="flex-grow-1">
                    <p class="text-truncate font-size-14 mb-2">{{ $title }}</p>
                    <h4 class="mb-2">{{ $variable->count() }}</h4>

                </div>
                
            </div>
        </div><!-- end cardbody -->
    </div>
    <!-- end card -->
</div>
