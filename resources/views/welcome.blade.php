<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Broadcast Message</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css"/>
</head>
<body>
<div class="container">
    <div class="row pt-5">
        <div class="col-md-12 pb-2">
            SEND A TEST MESSAGE
        </div>
        <div class="col-md-6">
            <form action="/send-message" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="message" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-info px-4 py-2 rounded">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
