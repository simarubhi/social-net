<x-header-layout>
    <div class="row my-5 container-xl px-0 mx-auto">
        <h1>{{ Auth::user()->name }}'s Friends</h1>

        <div class="container-fluid mt-4">
            <ul>
                <!-- {{ Auth::user()->friends() }} -->
                @foreach (Auth::user()->friends() as $friend)
                <li>
                    {{ \App\Models\User::find($friend)->name }}
                </li>
                @endforeach
            </ul>
        </div>
    </div>

</x-header-layout>