<table class="table table-responsive table-hover" id="fases-table">
    <thead>
        <th>Criterio</th>
        <th>Pontos</th>
        <th colspan="3">Ação</th>
    </thead>
    <tbody>
    @foreach($fases as $fase)
        <tr>
            <td>{!! $fase->criterio !!}</td>
            <td>{!! $fase->pontos !!}</td>
            <td>
                {!! Form::open(['route' => ['fases.destroy', $fase->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('fases.show', [$fase->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('fases.edit', [$fase->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>