@extends('components.layout')

@section('content')
    <h1 class="text-7xl text-title uppercase font-antonio font-bold leading-none text-center">Edit this project</h1>

    <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data"
        class="bg-icon flex flex-col flex-wrap-reverse content-center w-1/2 mx-auto mt-10 text-text text-xl border-2 rounded-md">
        @csrf
        @method('PUT')

        <input type="text" name="name" id="name" placeholder="Project name" value="{{ $project->name }}"
            class="uppercase font-antonio font-bold text-center placeholder:text-text m-5 p-2 bg-icon border-2 rounded-md">

        <textarea name="description" id="description" placeholder="Project description" rows="4"
            class="uppercase font-antonio font-bold text-center p-2 m-5 bg-icon placeholder:text-text border-2 rounded-md">{{ $project->description }}</textarea>

        <input type="file" name="image" id="image"
            class="uppercase font-antonio font-bold  text-center m-5 bg-icon p-2">

        <button type="submit" class="uppercase font-antonio font-bold text-center m-5 p-2 bg-icon border-2 rounded-md">Edit
            project</button>
    </form>

    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="text-center mt-5">
        @csrf
        @method('DELETE')
        <button type="submit"
            class=" text-4xl uppercase font-antonio font-bold text-center m-5 p-2 bg-icon border-2 rounded-md text-text">Delete
            project</button>
    </form>

    <a href="{{ route('projects.index') }}">
        <h2 class="text-4xl text-subtitle uppercase font-antonio font-bold leading-none text-center mt-5">Go back to
            projects</h2>
    </a>
@endsection
