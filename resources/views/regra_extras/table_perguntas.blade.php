<table class="table table-hover">
    <thead>
    <th>#</th>
    <th>Pergunta</th>
    <th>Ordem</th>
    <th>Pontos</th>
    </thead>
    <tbody>
    @foreach($regraExtra->perguntas as $pg)
        <tr>
            <td>{{$pg->id}}</td>
            <td>{{$pg->perguntaTxt}}</td>
            <td>{{ucfirst($pg->pivot->ordem)}}</td>
            <td>{{$pg->pivot->pontos}}</td>
        </tr>
    @endforeach
    </tbody>
</table>