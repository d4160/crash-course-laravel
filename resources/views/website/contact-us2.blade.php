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

    <title>Contact Vue</title>

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
        <div>
            <header class="mdl-layout__header mdl-layout__header--waterfall">
                <!-- Top row, always visible -->
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">My Awesome Page</span>
                    <div class="mdl-layout-spacer"></div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
                        <label class="mdl-button mdl-js-button mdl-button--icon"
                                for="waterfall-exp">
                            <i class="material-icons">search</i>
                        </label>
                        <div class="mdl-textfield__expandable-holder">
                            <input class="mdl-textfield__input" type="text" name="sample"
                                    id="waterfall-exp">
                        </div>
                    </div>
                </div>
                <!-- Bottom row, not visible on scroll -->
                <div class="mdl-layout__header-row">
                    <div class="mdl-layout-spacer"></div>
                    <!-- Navigation -->
                    <nav class="mdl-navigation">
                        @foreach($pages as $page)
                        <a class="mdl-navigation__link" href="/page/{{ $page->id }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ $page->description }}">{{ $page->name }}</a>
                        @endforeach
                    </nav>
                </div>
            </header>
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Title</span>
                <nav class="mdl-navigation">
                    @foreach($pages as $page)
                    <a class="mdl-navigation__link" href="/page/{{ $page->id }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ $page->description }}">{{ $page->name }}</a>
                    @endforeach
                </nav>
            </div>

            <div id="contact-form">

            </div>
            {{-- <main class="mdl-layout__content">
                <div class="mdl-grid portfolio-max-width portfolio-contact">
                    <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Contact</h2>
                        </div>
                        <div class="mdl-card__media">
                            <img class="article-image" src="https://getmdl.io/templates/portfolio/images/contact-image.jpg" border="0" alt="">
                        </div>
                        <div class="mdl-card__supporting-text">
                            <p>
                                Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
                            </p>
                            <p>
                                Excepteur reprehenderit sint exercitation ipsum consequat qui sit id velit elit. Velit anim eiusmod labore sit amet.
                            </p>
                            <form method="post" action="/contact2/sendMessage" class="">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @isset($successMessage)
                                <div class="alert alert-success">
                                    <p>{{ $successMessage }}</p>
                                </div>
                                @endisset

                                @csrf
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name" name="name" required>
                                    <label class="mdl-textfield__label" for="Name">Name...</label>
                                    <span class="mdl-textfield__error">Letters and spaces only</span>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="email" id="Email" name="email" required>
                                    <label class="mdl-textfield__label" for="Email">Email...</label>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <textarea class="mdl-textfield__input" type="text" rows="5" id="message" name="message" required></textarea>
                                    <label class="mdl-textfield__label" for="message">Enter note</label>
                                </div>
                                <p>
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
                                        Submit
                                    <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </main> --}}

            <footer class="mdl-mini-footer">
                <div class="mdl-mini-footer__left-section">
                    <div class="mdl-logo">Simple portfolio website</div>
                </div>
                <div class="mdl-mini-footer__right-section">
                    <ul class="mdl-mini-footer__link-list">
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Privacy &amp; Terms</a></li>
                    </ul>
                </div>
            </footer>
        </div>
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
</body>
</html>
