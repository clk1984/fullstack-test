<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edukey</title>

        <!-- Styles -->
        <style>
            html, body {
              height: 100vh;
            }
        </style>
    </head>
    <body>

      <root :users="{{$users}}"></root>
      <script src="{{ asset('js/app.js') }}"></script>
      <script type="text/javascript">
           
      </script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </body>
</html>
