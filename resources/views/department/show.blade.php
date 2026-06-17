<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <a class="btn btn-warning mb-3" href="{{ route('department.index') }}" role="Button">Back</a>

    {{-- department --}}
    <h4>Data Department</h4>
    <ul class="list-group mb-3">
        <li class="list-group-item">Name: {{ $department->name }}</li>
        <li class="list-group-item">
            Created: {{ $department->created_at->format('d F Y H:i:s') }}
        </li>
        <li class="list-group-item">
            Last Update: {{ $department->updated_at->diffForHumans() }}
        </li>

    </ul>

    {{-- lecturer --}}
    <h4>Data Lecturer</h4>
    <ul class="list-group">
        @foreach ($department->lecturers as $lecturer)
            <li class="list-group-item">{{ $lecturer->name }}</li>
        @endforeach
    </ul>
</x-app>
