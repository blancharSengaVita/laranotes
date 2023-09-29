<!DOCTYPE html>
<html lang="fr" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
<div class="min-h-full">
    <x-navigation/>
    <x-header :heading="$heading"/>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Replace with your content -->
            <div class="px-4 py-6 sm:px-0">
                <div class="h-96 rounded-lg border-4 border-dashed border-gray-200">
                    <p>{{ $note->description }}</p>
                </div>
                <div>
                    <p> Created by {{ $note->owner->name }} </p>
                </div>
                <div>
                    <form action="/notes" method="post">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="id" value="{{ $note->id }} ">
                        <button type="submit">Delete this note</button>
                    </form>
                    <a href="/notes/{{ $note->id }}/edit">Edit this note</a>
                </div>
                <div>
                    <a href="/notes">View all your notes</a>
                </div>
            </div>
            <!-- /End replace -->
        </div>
    </main>
</div>

</body>

</html>
