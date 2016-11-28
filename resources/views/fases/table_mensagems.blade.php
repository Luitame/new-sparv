<table class="table table-hover">
    <thead>
    <th>#</th>
    <th>Mensagem</th>
    <th>Ordem</th>
    <th>Pontos</th>
    </thead>
    <tbody>
    @foreach($fase->mensagems as $msg)
        <tr>
            <td>{{$msg->id}}</td>
            <td>{{$msg->mensagemTxt}}</td>
            <td>{{ucfirst($msg->pivot->ordem)}}</td>
            <td>{{$msg->pivot->pontos}}</td>
        </tr>
    @endforeach
    </tbody>
</table>