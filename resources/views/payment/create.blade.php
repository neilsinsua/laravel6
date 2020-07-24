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
<body>
<form
    action="{{route('pay')}}"
    method="POST"
>

    <div class="flex justify-center items-center h-screen">
        @csrf
        <button type="submit"
                class="h-10 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Make Payment</button>
    </div>

</form>
</body>
</html>
