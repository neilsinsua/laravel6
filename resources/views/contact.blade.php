<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail Lesson</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <form action="/contact"
          method="POST"
          class="bg-white p-6 rounded shadow-md"
          style="width: 300px"
    >
        @csrf

        <div class="mb-5">
            <label
                for="email"
                class="block text-xs uppercase font-semibold mb-1">
                Email Address
            </label>

            <input
                type="text"
                name="email"
                id="email"
                class="border px-2 py-1 text-sm w-full"
            >
            @error('email')
            <p class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4">{{ $message }}</p>
            @enderror

            @if (session('success'))
                <p class="
                bg-green-100 border border-green-400 text-green-700
                px-4 py-3 rounded relative mt-4">{{ session('success') }}</p>
            @endif
        </div>

        <button type="submit"
                class="bg-blue-500 py-2 text-white rounded-full text-sm w-full">
            Email Me
        </button>

    </form>

</body>

</html>
