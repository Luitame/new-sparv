<table class="table table-responsive table-hover" id="mensagems-table">
    <thead>
        <th>#</th>
        <th>Mensagem</th>
        <th colspan="3">Ação</th>
    </thead>
    <tbody>
    @forelse($mensagems as $mensagem)
        <tr>
            <td>{!! $mensagem->id !!}</td>
            <td width="85%">{!! $mensagem->mensagemTxt !!}</td>
            <td>
                {!! Form::open(['route' => ['mensagems.destroy', $mensagem->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('mensagems.show', [$mensagem->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('mensagems.edit', [$mensagem->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5" class="text-center bg-warning text-warning">Nenhuma <b>Mensagem</b> cadastrada.</td>
        </tr>
    @endforelse
    </tbody>
</table>
