<table class="table table-responsive table-hover" id="visorPontuacaos-table">
    <thead>
        <th>Visibilidadeinicial</th>
        <th>Mudandoem</th>
        <th colspan="3">Ação</th>
    </thead>
    <tbody>
    @foreach($visorPontuacaos as $visorPontuacao)
        <tr>
            <td>{!! $visorPontuacao->visibilidadeInicial !!}</td>
            <td>{!! $visorPontuacao->mudandoEm !!}</td>
            <td>
                {!! Form::open(['route' => ['visorPontuacaos.destroy', $visorPontuacao->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('visorPontuacaos.show', [$visorPontuacao->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('visorPontuacaos.edit', [$visorPontuacao->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>