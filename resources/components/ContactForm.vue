<template>
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
                    <form @submit="sendMessage" class="">
                        <!-- method="post" action="/contact2/sendMessage"  -->
                        <!-- @if ($errors->any())
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

                        @csrf -->
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <!-- @keyup="buttonText = name" -->
                            <input v-model="name" class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name" name="name" required>
                            <label class="mdl-textfield__label" for="Name">Name...</label>
                            <span class="mdl-textfield__error">Letters and spaces only</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input v-model="email" class="mdl-textfield__input" type="email" id="Email" name="email" required>
                            <label class="mdl-textfield__label" for="Email">Email...</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <textarea v-model="message" class="mdl-textfield__input" type="text" rows="5" id="message" name="message" required></textarea>
                            <label class="mdl-textfield__label" for="message">Enter note</label>
                        </div>
                        <p>
                            <button v-if="formSending == false" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
                                Submit
                            <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>

                            <div v-if="formSending == true" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                                Sending
                            <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></div>
                        </p>

                        <!-- <a @click="buttonText = name" class="btn btn-primary btn-sm " href="javascript:void(0)" role="button">{{ buttonText }}</a> -->
                    </form>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    data(){
        return {
            loaded: false,
            formSending: false,
            name: null,
            email: null,
            message: null,
            buttonText: 'Click me to change name'
        }
    },
    mounted(){

    },
    methods:{
        sendMessage: function(e) {
            e.preventDefault();

            const self = this;
            self.formSending = true;

            this.axios.post('/contact2/sendMessage/ajax', {
                name: self.name,
                email: self.email,
                message: self.message
            }).then((response) => {
                //alert('Thank you! your message has been sent');
                alert(response.data.message);

                self.formSending = false;
            }).catch(error => {
                alert('Error');
                console.log(error);

                self.formSending = false;
            });
        }
    }
}
</script>
