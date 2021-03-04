<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        {{-- <a class="navbar-brand" href="#">My Awesome Page</a> --}}
        <span class="mb-0 navbar-brand h1">My Awesome Page</span>
        {{-- <i class="bi-alarm" style="font-size: 1rem; color: cornflowerblue;"></i> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="mb-2 navbar-nav me-auto mb-lg-0">

            @foreach($pages as $page)
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/page/{{ $page->id }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ $page->description }}">{{ $page->name }}</a>
            </li>
            @endforeach

            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
