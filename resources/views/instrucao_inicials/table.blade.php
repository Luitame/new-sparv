<table class="table table-responsive table-hover" id="instrucaoInicials-table">
    <thead>
        <th>#</th>
        <th>Instrução</th>
        <th colspan="3">Ação</th>
    </thead>
    <tbody>
    @forelse($instrucaoInicials as $instrucaoInicial)
        <tr>
            <td>{!! $instrucaoInicial->id !!}</td>
            <td width="85%">{!! $instrucaoInicial->instrucaoTxt !!}</td>
            <td>
                {!! Form::open(['route' => ['instrucaoInicials.destroy', $instrucaoInicial->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('instrucaoInicials.show', [$instrucaoInicial->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('instrucaoInicials.edit', [$instrucaoInicial->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5" class="text-center bg-warning text-warning">Nenhuma <b>Instrução Inicial</b> cadastrada.</td>
        </tr>
    @endforelse
    </tbody>
</table>
