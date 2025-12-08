<x-layout :title="$pagetitle">

<h2>{{$post->title}}</h2>

<p>{{ $post->body }}</p>
<p>{{ $post->author }}</p>

</x-layout>