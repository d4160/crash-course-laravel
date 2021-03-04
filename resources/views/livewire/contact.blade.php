<main class="mdl-layout__content">
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
                <form method="post" action="/contact/sendMessage" class="">
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

                    @if(empty($successMessage))
                        <p>Data does not exist</p>
                    @else
                        <p>Your data is here!</p>
                    @endif

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
</main>
