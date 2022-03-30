<nav class="navbar navbar-expand-sm navbar-default">
    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="{{ (request()->is('home')) ? 'active' : '' }}">
                <a href="{{ route('home') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
            </li>
            <li class="menu-title">Module</li>
            <li class="{{ (request()->is('report*')) ? 'active' : '' }}">
                <a href="{{ route('report.index') }}"> <i class="menu-icon fa fa-table"></i>Report</a>
            </li>
            <li class="{{ (request()->is('stnk*')) ? 'active' : '' }}">
                <a href="{{ route('stnk.index') }}"> <i class="menu-icon fa fa-table"></i>Master STNK</a>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>