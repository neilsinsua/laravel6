<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex justify-center items-center h-screen">


        @forelse($notifications as $notification)
            <div class="max-w-sm rounded overflow-hidden shadow-lg px-6 py-4">
                <ul>
                    <li class="text-gray-700 text-base">Thanks {{ $user }} your payment of {{ $notification->data[0] }} has been received!</li>
                </ul>
            </div>
        @empty
            <div class="max-w-sm rounded overflow-hidden shadow-lg px-6 py-4">
                <ul>
                    <li class="text-gray-700 text-base">No notifications at this time</li>
                </ul>
            </div>
        @endforelse




</body>
</html>
