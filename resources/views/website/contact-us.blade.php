<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="/css/website.css">
    @livewireStyles
    <title>Home</title>
    <!-- Wide card with share menu button -->
    <style>
        .portfolio-max-width {
            max-width: 900px;
            margin: auto;
        }
        .portfolio-contact form {
            max-width: 550px;
            margin: auto;
        }
        .portfolio-contact .mdl-textfield {
            width: 100%;
        }
        .demo-layout-waterfall .mdl-layout__header-row .mdl-navigation__link:last-of-type  {
            padding-right: 0;
        }
        .demo-layout-waterfall .mdl-layout__drawer-button {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .demo-layout-waterfall .mdl-layout__drawer-button > i {
            /* position:relative;
            top: calc(50% - 12px); */
        }
    </style>
</head>
<body>
    <div id="app" class="demo-layout-waterfall mdl-layout mdl-js-layout">
        @if(isset($successMessage))
            {{-- <p>{{ $successMessage }}</p> --}}
            <livewire:navbar2 :successMessage="$successMessage" />
        @else
            <livewire:navbar2 />
        @endif
    </div>
    <!-- Bootstrap with Popper -->
    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script>
        var tooltipTriggerList = [].slice.call($('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
    <script src="/js/website.js"></script>
    @livewireScripts
</body>
</html>
