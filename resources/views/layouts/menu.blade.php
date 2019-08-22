<li class="nav-item {{ Request::is('commodities*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('commodities.index') !!}"><i class="nav-icon fa fa-archive"></i><span>Mercancias</span></a>
</li>
<li class="nav-item {{ Request::is('import.excel.commodities') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('import.excel.commodities') !!}"><i class="nav-icon fa fa-file-excel-o"></i><span>Importar</span></a>
</li>