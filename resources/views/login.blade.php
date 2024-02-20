<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>bluesX</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    </head>
    <body>
        <main class="login">
            <section class="section1">
                <img
                    class="decorator"
                    src="{{ asset('asset/toddler_playing_with_blocks.png') }}"
                    alt="alt text"/>
                <div class="section11">
                    <div class="content_box">
                        <h1 class="big_title">Login to BluesX</h1>

                        <div class="subtitle">
                            <input type="text" class="input-field" placeholder="Email">
                        </div>
                        <div class="subtitle1">
                            <input type="password" class="input-field" placeholder="Password">
                        </div>
                        <button class="highlight">
                            Submit
                        </button>
                    </div>
                </div>
            </section>

        </main>
        <script type="text/javascript">
            AOS.init();
            new Sticky('.sticky-effect');
        </script>
    </body>
</html>