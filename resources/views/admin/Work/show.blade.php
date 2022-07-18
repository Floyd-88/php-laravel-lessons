@extends('layouts.admin')
@section('content')

<div>
    <h2>{{ $workShow->title_work }}</h2>
</div>

<table>
    <tr>
        <td>
            <p style="width: 180px;font-size: 15px; font-weight: 600; font-family: cursive;">Описание работы: </p>
        </td>
        <td>
            <p style="text-align: center;">{{ $workShow->description_work }}</p>
        </td>
    </tr>

    <tr>
        <td>
            <p style="width: 180px;font-size: 15px; font-weight: 600; font-family: cursive;">Oценка: </p>
        </td>
        <td>
            <p style="text-align: center;">{{ $workShow->grade }}</p>
        </td>
    </tr>

    <tr>
        <td>
            <p style="width: 180px;font-size: 15px; font-weight: 600; font-family: cursive;">Ссылка: </p>
        </td>
        <td>
            <p style="text-align: center;">{{ $workShow->link }}</p>
        </td>
    </tr>
</table>

<a href=" {{ route('admin.work.edit', $workShow->id) }} ">Отредактировать</a> <br>
<a href=" {{ route('admin.work.index') }} ">Назад к списку работ</a> <br>
<form action="{{ route('admin.work.destroy', $workShow->id) }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Удалить работу">
</form>
@endsection