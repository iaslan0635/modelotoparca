<x-base-layout>
    <table class="table">
        <thead>
        <tr>
            @foreach($cols as $col)
                <td>{{$col}}</td>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($models as $model)
            <tr>
                @foreach($cols as $col)
                    <td>{{$model->getAttribute($col)}}</td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$models->links()}}
</x-base-layout>
