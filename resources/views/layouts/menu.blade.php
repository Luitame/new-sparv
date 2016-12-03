<li class="header">Navegação Principal</li>

<li class="{{ Request::is('home*') ? 'active' : '' }}">
    <a href="{!! route('home.index') !!}">
        <i class="fa fa-tachometer"></i>
        <span> Dashboard</span>
    </a>
</li>

<li class="{{ Request::is('instrucaoInicials*') ? 'active' : '' }}">
    <a href="{!! route('instrucaoInicials.index') !!}">
        <i class="fa fa-commenting-o"></i>
        <span> Instruções Iniciais</span>
    </a>
</li>

<li class="{{ Request::is('mensagems*') ? 'active' : '' }}">
    <a href="{!! route('mensagems.index') !!}">
        <i class="fa fa-envelope"></i>
        <span> Mensagens</span>
    </a>
</li>

<li class="{{ Request::is('perguntas*') ? 'active' : '' }}">
    <a href="{!! route('perguntas.index') !!}">
        <i class="fa fa-question-circle"></i>
        <span> Perguntas</span>
    </a>
</li>

<li class="{{ Request::is('tempos*') ? 'active' : '' }}">
    <a href="{!! route('tempos.index') !!}">
        <i class="fa fa-clock-o"></i>
        <span> Tempo</span>
    </a>
</li>

<li class="{{ Request::is('visorPontuacaos*') ? 'active' : '' }}">
    <a href="{!! route('visorPontuacaos.index') !!}">
        <i class="fa fa-braille"></i>
        <span> Visor de Pontuação</span>
    </a>
</li>

<li class="{{ Request::is('cartas*') ? 'active' : '' }}">
    <a href="{!! route('cartas.index') !!}">
        <i class="fa fa-book"></i>
        <span> Cartas</span>
    </a>
</li>

<li class="{{ Request::is('fases*') ? 'active' : '' }}">
    <a href="{!! route('fases.index') !!}">
        <i class="fa fa-cubes"></i>
        <span> Fases</span>
    </a>
</li>

<li class="{{ Request::is('regraExtras*') ? 'active' : '' }}">
    <a href="{!! route('regraExtras.index') !!}">
        <i class="fa fa-flask"></i>
        <span> Regra Extras</span>
    </a>
</li>

<li class="{{ Request::is('modelos*') ? 'active' : '' }}">
    <a href="{!! route('modelos.index') !!}">
        <i class="fa fa-gamepad"></i>
        <span> Modelos</span>
    </a>
</li>

<li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
    <a href="{!! route('usuarios.index') !!}">
        <i class="fa fa-users"></i>
        <span> Usuários</span>
    </a>
</li>