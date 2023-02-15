<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Obilia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{ asset(mix('css/style.css')) }}" />
    <link rel="stylesheet" href="{{ asset(mix('css/override.css')) }}" />
    <link rel="stylesheet" href="{{ asset(mix('css/notiflix.min.css')) }}" />
    <link rel="stylesheet" href="{{ asset(mix('css/workspace.css')) }}" />

    <link rel="stylesheet" href="{{ asset(mix('css/font-awesome.min.css')) }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.36.3/apexcharts.min.css">


    {{ $styles ?? '' }}

</head>

<body>


    <div style="min-height: 100vh"
        class="container-fluid  flex-grow-1 d-flex flex-column flex-sm-row overflow-auto p-0 m-0">
        <div class="row flex-grow-sm-1 flex-grow-0 w-100 p-0 m-0">
            <x-workspace.sidebar />
            <main class="col overflow-auto h-100 p-0">
                <header class="py-3">
                    <div class="container-fluid align-items-center gap-3 d-flex">
                        <div class="flex-shrink-1">
                            <a href="#"
                                class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-dark text-decoration-none">
                                <i class="bi bi-bootstrap fs-2 text-dark"></i>
                            </a>
                        </div>
                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                            <h4>
                                {{ $title ?? 'No Title' }}
                            </h4>
                            <div class="flex-shrink-0 dropdown">
                                {{-- <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                                    id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://via.placeholder.com/28?text=!" alt="user" width="32"
                                        height="32" class="rounded-circle">
                                </a> --}}
                                {{-- <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="dropdownUser2"
                                    style="">
                                    <li><a class="dropdown-item" href="#">New project...</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                </header>
                <div class=" p-3">
                    {{ $slot }}
                </div>
            </main>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/perfect-scrollbar.min.js"></script>
    <script src="{{ asset(mix('js/notiflix.min.js')) }}"></script>
    <script src="{{ asset(mix('js/init.js')) }}"></script>
    <script src="{{ asset(mix('js/workspace/work.js')) }}"></script>
    {{ $scripts ?? '' }}

</body>

</html>
