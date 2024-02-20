<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>bluesX</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}">
    </head>
    <body>
        <main class="signup">
            <section class="section1">
                <img
                    class="decorator"
                    src="{{ asset('asset/toddler_playing_with_blocks.png') }}"
                    alt="alt text"/>
                <article class="section11">
                    <h1 class="big_title">SignUp to BluesX for Free</h1>
                    <div class="subtitle">
                        <input type="text" class="input-field" placeholder="Username">
                    </div>
                    <div class="subtitle1">
                        <input type="text" class="input-field" placeholder="Email">
                    </div>
                    <div class="subtitle2">
                        <input type="password" class="input-field" placeholder="password">
                    </div>
                    <div class="subtitle3">
                        <input type="password" class="input-field" placeholder="Repeat Password">
                    </div>
                    <div class="warning-message" id="passwordMismatch">Passwords do not match.</div>
                    <div class="highlight">Submit</div>
                </article>
            </section>

        </main>
        <script type="text/javascript">
            AOS.init();
            new Sticky('.sticky-effect');
            const passwordInput = document.getElementById('password');
            const repeatPasswordInput = document.getElementById('repeatPassword');
            const warningMessage = document.getElementById('passwordMismatch');

            function checkPasswordMatch() {
                const password = passwordInput.value;
                const repeatPassword = repeatPasswordInput.value;

                if (password !== repeatPassword) {
                    warningMessage.style.display = 'block';
                } else {
                    warningMessage.style.display = 'none';
                }
            }

            // Attach the function to both input fields' input event
            passwordInput.addEventListener('input', checkPasswordMatch);
            repeatPasswordInput.addEventListener('input', checkPasswordMatch);
        </script>
    </body>
</html>