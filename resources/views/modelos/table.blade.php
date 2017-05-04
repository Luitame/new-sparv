<table class="table table-responsive table-hover" id="modelos-table">
    <thead>
    <th>Nome</th>
    <th colspan="3">Ação</th>
    </thead>
    <tbody>
    @forelse($modelos as $modelo)
        <tr>
            <td>{!! $modelo->nome !!}</td>
            <td>
                {!! Form::open(['route' => ['modelos.destroy', $modelo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('modelos.show', [$modelo->id]) !!}" class='btn btn-default btn-xs'><i
                            class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('modelos.edit', [$modelo->id]) !!}" class='btn btn-default btn-xs'><i
                            class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="4" class="text-center bg-warning text-warning">Nenhum <b>Modelo</b> cadastrado.</td>
        </tr>
    @endforelse
    </tbody>
</table>
