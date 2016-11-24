<table class="table table-responsive table-hover" id="perguntas-table">
    <thead>
        <th>#</th>
        <th>Pergunta</th>
        <th colspan="3">Ação</th>
    </thead>
    <tbody>
    @foreach($perguntas as $pergunta)
        <tr>
            <td>{!! $pergunta->id !!}</td>
            <td width="85%">{!! $pergunta->perguntaTxt !!}</td>
            <td>
                {!! Form::open(['route' => ['perguntas.destroy', $pergunta->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('perguntas.show', [$pergunta->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('perguntas.edit', [$pergunta->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>