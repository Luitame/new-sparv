<li class="header">Navegação Principal</li>

<li class="{{ Request::is('instrucaoInicials*') ? 'active' : '' }}">
    <a href="{!! route('instrucaoInicials.index') !!}">
        <i class="fa fa-commenting-o"></i>
        <span> Instruções Iniciais</span>
    </a>
</li>

<li class="{{ Request::is('mensagems*') ? 'active' : '' }}">
    <a href="{!! route('mensagems.index') !!}">
        <i class="fa fa-comments"></i>
        <span> Mensagens</span>
    </a>
</li>

<li class="{{ Request::is('perguntas*') ? 'active' : '' }}">
    <a href="{!! route('perguntas.index') !!}">
        <i class="fa fa-question-circle"></i>
        <span> Perguntas</span>
    </a>
</li>