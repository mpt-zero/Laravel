<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title_test}}</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    
    
</head>
<body class={{$theme_test}}>
    <header>
        @include("components.header")
    </header>
    <section>
        @yield("main-sec")
    </section>
    @if($show_footer_1)
    <footer>
        @yield("footer")
    </footer>
    @endif
</body>
</html>