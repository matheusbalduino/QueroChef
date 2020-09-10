<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">

</head>

   <section class="hero is-fullheight">
    <div class="hero-head">
        <img id="imgtopo" src="/img/Vectortop.png" alt="vector top img">
    </div>
    <div class="hero-body">
        <div class="container has-text-centered pb-5">
            <div>
                <img id="logo" src="/img/logo.png" alt="logo image">
                @yield('content')
            </div>
            
        </div>
    </div>
    <div class="hero-foot">
        <img id="imgbotton" src="/img/Vectorbotton.png" alt="vector botton img">
    </div>
    </section> 
      
</html>