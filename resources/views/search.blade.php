@extends('/templates.master')
@section('content')


<div class="content-search">
    <div class="content-main">
        @foreach($output as $hehe)
        <h1>{{$hehe->word}}</h1>
        <p class="custom-content">{!!$hehe->content!!}</p>
        @endforeach


        <table class="table-vocabulary">
            <thead>
                <th>Vocabulary</th>
            </thead>
            <tbody>
                @foreach($output1 as $hehe1)
                <tr>
                    <td>
                        <a href="{{ route('engkid.detail',['id' => $hehe1->id]) }}">
                            <p>{{$hehe1->word}}</p></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection