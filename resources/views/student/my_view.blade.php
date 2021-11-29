@extends('layout.app')

@section('content')
<table>
        <tr>
            <td>Code</td>
            <td> : </td>
            <td> {{$code}}</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td> : </td>
            <td>{{$name}}</td>
        </tr>
        <tr>
            <td>Course</td>
            <td> : </td>
            <td>{{$course}}</td>
        </tr>
        <tr>
            <td>Task</td>
            <td> : </td>
            <td>{{$task}}</td>
        </tr>
        <tr>
            <td>Quiz</td>
            <td> : </td>
            <td>{{$quiz}}</td>
        </tr>
        <tr>
            <td>Mid Term</td>
            <td> : </td>
            <td>{{$mid_term}}</td>
        </tr>
        <tr>
            <td>Final</td>
            <td> : </td>
            <td>{{$final}}</td>
        </tr>
        <tr>
            <td>Grade</td>
            <td> : </td>
            <td>{{$grade}}</td>
        </tr>
    </table>
@endsection