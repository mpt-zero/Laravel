@extends("layouts.main",[
    'show_footer_1'=>$show,
    'title_test'=>isset($title) ? $title : "No Title",
    'theme_test'=>$theme
])

@section("footer")
    
        <h1>{{$text}}</h1>
    
@endsection

@section("main-sec")
    
        <h1>{{$main}}</h1>
    
@endsection