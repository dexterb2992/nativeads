<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./">
                {{ config('app.name') }}
            </a>
            <a class="navbar-brand hidden" href="./">
                {{ config('app.short_name') }}
            </a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <li class="menu-item {{ \Request::is('adverts') ? 'active' : '' }}">
                    <a href="{{ route('adverts') }}">
                        <i class="menu-icon fa fa-bar-chart-o"></i> Adverts
                    </a>
                </li>

                <li class="menu-item">
                    <a href="javascript:void(0)">
                        <i class="menu-icon ti-pie-chart"></i> Advertisers
                    </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->