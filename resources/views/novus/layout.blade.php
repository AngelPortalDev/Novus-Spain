<!DOCTYPE html>
<html lang="en" class="no-js" dir="ltr">
<head>
    @include($partials . 'style')
    <meta name="description" content="{{ $description }}">
    <meta name="robots" content="noindex, nofollow">
</head>
<body>
    @include($header . 'header-two')
    <main id="main">@yield('content')</main>
    @include($footer . 'footer-v2', ['class' => 'rts-footer-padding v_2', 'cclass' => 'v_1'])
    @include($partials . 'scripts')
</body>
</html>
