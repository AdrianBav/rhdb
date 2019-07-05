<div class="x_panel">

    <div class="x_title">
        <h2>{{ $concert->venue }} <small>{{ $concert->date }}</small></h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
        </ul>
        <div class="clearfix"></div>
    </div>

    <div class="x_content">
        <div class="bs-example" data-example-id="simple-jumbotron">
            <div class="jumbotron">
                <h1>{{ $concert->venue }}</h1>
                <h3>in {{ $concert->city }}, {{ $concert->country }}</h3>
                <p>on {{ $concert->date }}</p>
            </div>
        </div>
    </div>

</div>