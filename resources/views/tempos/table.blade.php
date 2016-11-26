<table class="table table-responsive table-hover" id="tempos-table">
    <thead>
    <th>#</th>
    <th>Total</th>
    <th>Ordem</th>
    <th>Mudando Em</th>
    <th>Visibilidade Inicial</th>
    <th colspan="3">Ação</th>
    </thead>
    <tbody>
    @foreach($tempos as $tempo)
        <tr>
            <td>{!! $tempo->id !!}</td>
            <td>{!! $tempo->total !!}</td>
            <td>{!! $tempo->ordem !!}</td>
            <td>{!! $tempo->mudandoEm !!}</td>
            <td>{!! $tempo->visibilidadeInicial !!}</td>
            <td>
                {!! Form::open(['route' => ['tempos.destroy', $tempo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tempos.show', [$tempo->id]) !!}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tempos.edit', [$tempo->id]) !!}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>