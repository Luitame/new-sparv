<li class="header">Navegação Principal</li>
<li class="{{ Request::is('instrucaoInicials*') ? 'active' : '' }}">
    <a href="{!! route('instrucaoInicials.index') !!}">
        <i class="icon ion-university"></i>
        <span> Instruções Iniciais</span>
    </a>
</li>