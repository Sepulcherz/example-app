<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <aside>
        <div class="blocs_right">
            <form action="{{ route('test') }}" method="post" id="form2">
                @csrf
                <input type="text" name="description" placeholder="write something..." required="required">
                <button>Send</button>
            </form>
        </div>
    </aside>

</x-app-layout>