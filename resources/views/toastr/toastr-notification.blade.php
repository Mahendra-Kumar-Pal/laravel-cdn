<!doctype html>
<html lang="en">

<head>
    <title>Task</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <style>
        #app {width: 1348px; height: 576px;}
    </style>
</head>

<body id="app">


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="card card-default">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body text-center">
                        Check for notification
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if(Session::has('success'))
                toastr.success("{{ Session::get('success') }}");
        @endif
        @if(Session::has('info'))
                toastr.info("{{ Session::get('info') }}");
        @endif
        @if(Session::has('warning'))
                toastr.warning("{{ Session::get('warning') }}");
        @endif
        @if(Session::has('error'))
                toastr.error("{{ Session::get('error') }}");
        @endif
    </script>
</body>

</html>
