<table class="table table-responsive table-hover" id="visorPontuacaos-table">
    <thead>
    <th>#</th>
    <th>Visibilidade Inicial</th>
    <th>Mudando Em</th>
    <th colspan="3">Ação</th>
    </thead>
    <tbody>
    @forelse($visorPontuacaos as $visorPontuacao)
        <tr>
            <td>{!! $visorPontuacao->id !!}</td>
            <td>{!! $visorPontuacao->visibilidadeInicial !!}</td>
            <td>{!! $visorPontuacao->mudandoEm !!}</td>
            <td>
                {!! Form::open(['route' => ['visorPontuacaos.destroy', $visorPontuacao->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('visorPontuacaos.show', [$visorPontuacao->id]) !!}"
                       class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('visorPontuacaos.edit', [$visorPontuacao->id]) !!}"
                       class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6" class="text-center bg-warning text-warning">Nenhum <b>Visor de Pontuação</b> cadastrado.
            </td>
        </tr>
    @endforelse
    </tbody>
</table>
