<style>
    #fases-table td {
        vertical-align: middle;
    }
</style>
<table class="table table-responsive table-hover" id="fases-table">
    <thead>
    <th width="5%">Carta</th>
    <th width="1%">#</th>
    <th>Critério</th>
    <th>Pontos</th>
    <th colspan="3">Ação</th>
    </thead>
    <tbody>
    @forelse($fases as $fase)
        <tr>
            <td><img src="{{url("images/cartas/".$fase->carta->nome.".png")}}" height="50px"
                     alt="{{url("images/cartas/".$fase->carta->nome.".png")}}"></td>
            <td>{!! $fase->id !!}</td>
            <td>{!! $fase->criterio !!}</td>
            <td>{!! $fase->pontos !!}</td>
            <td>
                {!! Form::open(['route' => ['fases.destroy', $fase->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('fases.show', [$fase->id]) !!}" class='btn btn-default btn-xs'><i
                            class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('fases.edit', [$fase->id]) !!}" class='btn btn-default btn-xs'><i
                            class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="7" class="text-center bg-warning text-warning">Nenhuma <b>Fase</b> cadastrada.</td>
        </tr>
    @endforelse
    </tbody>
</table>
