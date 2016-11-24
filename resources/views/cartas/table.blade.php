<table class="table table-responsive table-hover" id="cartas-table">
    <thead>
        <th>Nome</th>
        <th>Cor</th>
        <th>Simbolo</th>
        <th>Verso</th>
        <th colspan="3">Ação</th>
    </thead>
    <tbody>
    @foreach($cartas as $carta)
        <tr>
            <td>{!! $carta->nome !!}</td>
            <td>{!! $carta->cor !!}</td>
            <td>{!! $carta->simbolo !!}</td>
            <td>{!! $carta->verso !!}</td>
            <td>
                {!! Form::open(['route' => ['cartas.destroy', $carta->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('cartas.show', [$carta->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('cartas.edit', [$carta->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>