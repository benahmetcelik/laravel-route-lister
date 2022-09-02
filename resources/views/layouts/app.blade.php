<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{config('app.name')}}</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          type="text/css"/>
@yield('css')

<!-- Custom styles for this template -->
    <link href="{{asset('css/dashboard.css')}}" type="text/css" rel="stylesheet">

</head>
<body>

<div class="container-fluid" style=" background-color: {{$theme['back']}};
        color: {{$theme['text']}};">

    <div class="row">


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

                <div class="col-md-12">
                    <table style='width:100%'>
                        <tr>
                            <td width='10%'><h4>HTTP Method</h4></td>
                            <td width='10%'><h4>Route</h4></td>
                            <td width='10%'><h4>Name</h4></td>
                            <td width='70%'><h4>Corresponding Action</h4></td>
                        </tr>
                        @foreach(Route::getRoutes() as $value)
                            <tr>
                                <td>{{ $value->methods()[0] }}</td>
                                <td>{{ $value->uri() }}</td>
                                <td>{{ $value->getName() }}</td>
                                <td>{{ $value->getActionName() }}</td>
                            </tr>
                        @endforeach

                    </table>
                </div>


            </div>


        </main>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

@yield('scripts')
</body>
</html>
