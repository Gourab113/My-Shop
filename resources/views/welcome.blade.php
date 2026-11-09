<x-layout>

    @if (Auth::check())
        <h1>Welcome {{ Auth::user()->name }}</h1>
    @else
        <h1>Please Login </h1>
    @endif

</x-layout>
