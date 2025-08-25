<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculties and Teachers</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-4">

    <h1 class="text-2xl font-bold mb-4">Faculties and Teachers</h1>

    @foreach($faculties as $faculty)
        <div class="mb-4">
            <h2 class="font-semibold">{{ $faculty->name }}</h2>

            @if($faculty->teachers->count() > 0)
                <ul class="ml-4 list-disc">
                    @foreach($faculty->teachers as $teacher)
                        <li>{{ $teacher->name }}</li>
                    @endforeach
                </ul>
            @else
                <p class="ml-4 italic text-gray-500">No teachers assigned.</p>
            @endif
        </div>
    @endforeach

</body>
</html>
