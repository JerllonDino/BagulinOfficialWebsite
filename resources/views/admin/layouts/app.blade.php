<!DOCTYPE html>
<html>
    <head>
        <title>Bagulin - Admin</title>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/solid.min.css">
        @yield('styles')
    </head>
    <body class="bg-body">
        @yield('content')


        <script src="{{asset('js/app.js')}}"></script>
        <script>
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            complete: function( res ) {
                $('.is-invalid').removeClass('is-invalid');
                console.log(res);
                switch( res.status ) {
                    //validation error
                    case 422:
                        errors = res.responseJSON.errors;
                        for(i in errors) {
                            $input = $('[name="' + i + '"]');
                            $input.parent().find('.invalid-feedback').text(errors[i]);
                            $input.addClass('is-invalid');
                        }
                        $('html,body').animate({'scrollTop':0}, 'slow');
                        break;
                    case 500:
                        break;
                }
            }
            });
        </script>
        @yield('scripts')
    </body>
</html>