@props([
    'count' => 3,
    'class' => null,
])
@for ($i = 0; $i < $count; $i++)
    <div class="{{ $class ?? 'col-lg-4 col-md-6' }}">
        <div class="card skeleton " aria-hidden="true">
            <div class="placeholder-glow">
                <div style="height:15rem" class="placeholder col-12"></div>
            </div>
            <div class="card-body">
                <h5 class="card-title placeholder-glow">
                    <div style="height:3rem !important;width:3rem !important" class="circle placeholder col-4"></div>
                    <span class="placeholder col-6"></span>
                </h5>
                <p class="card-text placeholder-glow">
                    <span class="placeholder col-12"></span>
                    <span class="placeholder col-4"></span>
                </p>
                <hr>
                <div class="row p-2 justify-content-between  placeholder-glow">
                    <div class="placeholder col-1"></div>
                    <span style="height:2.5rem" class="placeholder col-4"></span>
                </div>
            </div>
        </div>
    </div>
@endfor
