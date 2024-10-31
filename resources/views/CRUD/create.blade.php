@extends('components.layout')

@section('content')
    <h1 class="text-7xl text-title uppercase font-antonio font-bold leading-none text-center">Create a new project</h1>

    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data"
        class="bg-icon flex flex-col flex-wrap-reverse content-center w-1/2 mx-auto mt-10 text-text text-xl border-2 rounded-md">
        @csrf

        <input type="text" name="name" id="name" placeholder="Project name"
            class="uppercase font-antonio font-bold text-center placeholder:text-text m-5 p-2 bg-icon border-2 rounded-md"
            required>

        <textarea name="description" id="description" placeholder="Project description"
            class="uppercase font-antonio font-bold text-center p-2 m-5 bg-icon placeholder:text-text border-2 rounded-md"
            rows="4" required></textarea>

        <input type="file" name="image" id="image"
            class="uppercase font-antonio font-bold  text-center m-5 bg-icon p-2" required>

        <button type="submit" class="uppercase font-antonio font-bold text-center m-5 p-2 bg-icon border-2 rounded-md">Create
            project</button>
    </form>
    <a href="/projects">
        <h2 class="text-4xl text-subtitle uppercase font-antonio font-bold leading-none text-center mt-5">Go back to
            projects</h2>
    </a>
@endsection
