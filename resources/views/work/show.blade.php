@extends('layouts.main')
@section('content')

<div>
    <h2>{{ $work->title_work }}</h2>
</div>

<table>
    <tr>
        <td>
            <p style="width: 180px;font-size: 15px; font-weight: 600; font-family: cursive;">Описание работы: </p>
        </td>
        <td>
            <p style="text-align: center;">{{ $work->description_work }}</p>
        </td>
    </tr>

    <tr>
        <td>
            <p style="width: 180px;font-size: 15px; font-weight: 600; font-family: cursive;">Oценка: </p>
        </td>
        <td>
            <p style="text-align: center;">{{ $work->grade }}</p>
        </td>
    </tr>

    <tr>
        <td>
            <p style="width: 180px;font-size: 15px; font-weight: 600; font-family: cursive;">Ссылка: </p>
        </td>
        <td>
            <p style="text-align: center;">{{ $work->link }}</p>
        </td>
    </tr>
</table>

<a href=" {{ route('work.edit', $work->id) }} ">Отредактировать</a> <br>
<a href=" {{ route('work.index') }} ">Назад к списку работ</a> <br>
<form action="{{ route('work.destroy', $work->id) }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Удалить работу">
</form>
@endsection