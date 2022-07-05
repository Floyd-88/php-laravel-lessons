@extends('layouts.main')
@section('content')

    <h2>Мои работы</h2>
    @foreach($work as $elem)
      <p> - {{$elem->title_work}} - {{$elem->description_work}};</p>
    @endforeach

</body>
</html>

@endsection