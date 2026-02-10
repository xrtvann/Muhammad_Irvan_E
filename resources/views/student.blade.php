<div>
    @foreach ($students as $student)
        <h1>Nama : {{ $student->fullname }}</h1>
        <h1>NIM : {{ $student->nim }}</h1>
        <h1>JK  : {{ $student->gender }}</h1>
        <h1>Kelas : {{ $student->class }}</h1>
    @endforeach
</div>
