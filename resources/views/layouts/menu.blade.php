<li class="header">Navegação Principal</li>

<li class="{{ Request::is('instrucaoInicials*') ? 'active' : '' }}">
    <a href="{!! route('instrucaoInicials.index') !!}">
        <i class="icon ion-university"></i>
        <span> Instruções Iniciais</span>
    </a>
</li>

<li class="{{ Request::is('mensagems*') ? 'active' : '' }}">
    <a href="{!! route('mensagems.index') !!}">
        <i class="icon ion-university"></i>
        <span> Mensagens</span>
    </a>
</li>