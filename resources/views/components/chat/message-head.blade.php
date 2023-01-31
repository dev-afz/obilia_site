<div class="row">
    <div class="col-8">
        <div class="d-flex h-100  align-items-center">
            <span class="chat-icon">
                <i class="feather-arrow-left"></i>
            </span>
            <div data-user-image style="--circle-size:50px" class="">
                <div class="square circle"></div>
            </div>
            <div data-chat-name class="flex-grow-1 ms-3">
                <div class="line w75 h20"></div>
                <div class="line w100 h15"></div>
            </div>
        </div>
    </div>
    <div class="col-4">

        <ul class="moreoption">
            <li class="navbar nav-item dropdown">
                @if (auth()->user()->role == 'service_provider')
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#create-contract" aria-controls="create-contract"><i
                            class="feather-file-plus fs-5 me-1"></i></button>
                @endif
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="feather-more-vertical fs-5" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="feather-x-square fs-5 me-1"></i>
                            Close Chat
                        </a>
                    </li>
                    {{-- <li>
                        <hr class="dropdown-divider">
                    </li> --}}
                </ul>
            </li>
        </ul>
    </div>
</div>
