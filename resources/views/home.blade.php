
<?php /* <!-- Prop example <x-layout heading="Home Page"> --> */ ?>

<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    @foreach($comments as $comment)
        {{$comment->Name}}
    @endforeach
</x-layout>