<!-- resources/views/facultyTeacher/index.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculties and Teachers</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">

    <h1 class="text-3xl font-bold mb-6 text-center">Faculties and Their Teachers</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-2 px-4 border-b text-left">ID</th>
                    <th class="py-2 px-4 border-b text-left">Faculty Name</th>
                    <th class="py-2 px-4 border-b text-left">Teachers</th>
                    <th class="py-2 px-4 border-b text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($faculties as $faculty)
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-4 border-b">{{ $faculty->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $faculty->name }}</td>
                        <td class="py-2 px-4 border-b">
                            @if ($faculty->teachers->count() > 0)
                                <ul class="list-disc list-inside">
                                    @foreach ($faculty->teachers as $teacher)
                                        <li>{{ $teacher->name }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <span class="text-gray-400">No teachers yet</span>
                            @endif
                        </td>
                        <td class=" flex py-2 px-4 border-b space-x-2">
                            <a href="#"
                                class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Edit</a>

                            <form action="{{ route('facultyTeacher.destroy', [$faculty->id]) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600"
                                    type="submit">Delete </button>
                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</body>

</html>
