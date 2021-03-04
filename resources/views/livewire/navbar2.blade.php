<!-- Always shows a header, even in smaller screens. -->
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

    @if(isset($successMessage))
        <livewire:contact :successMessage="$successMessage" />
    @else
        <livewire:contact />
    @endif

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
