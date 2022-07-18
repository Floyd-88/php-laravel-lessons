@extends('layouts.admin')
@section('content')
<h2 style="text-align:center">Мои новости</h2>
    @foreach($news as $elem)
    <h3><a href="{{ route('admin.news.show', $elem->id) }}">{{ $elem->name_news }}</a></h3>

    <?php if(!empty($elem->img)) {?>
        <!-- <img src="{{ $elem->img }}" alt="img"> -->

    <?php } ?>
    <div>
        <p>{{ $elem->discription }}</p>
    </div> 
    <p style="text-align:center">_________________________________</p>
    @endforeach
    <br>
    {{$news->withQueryString()->links()}}

@endsection