<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <ul class="list-group">
        @forelse($notifications as $notification)
            <li class="list-group-item">
                @if($notification->type=== 'App\Notifications\PaymentRecived')
                 we have recived a payment of {{$notification->data['amount']/100}} from you
                    @endif
            </li>
        @empty
            <li class="list-group-item"> you dont have any unread notifications</li>
        @endforelse
    </ul>
</div>
</body>
</html>
