<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Teacher to Faculty</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-4">
    <h1 class="text-2xl font-bold mb-4">Assign Teacher to Faculty</h1>

    <form action="{{ route('facultyTeacher.store') }}" method="POST" class="max-w-md">
        @csrf

        <div class="mb-4">
            <label for="faculty_id" class="block text-gray-700">Select Faculty:</label>
            <select name="faculty_id" id="faculty_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                <option value="">Choose a faculty...</option>
                @foreach($faculties as $faculty)
                    <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="teacher_id" class="block text-gray-700">Select Teacher:</label>
            <select name="teacher_id" id="teacher_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                <option value="">Choose a teacher...</option>
                @foreach($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Assign Teacher
        </button>
    </form>
</body>
</html>
