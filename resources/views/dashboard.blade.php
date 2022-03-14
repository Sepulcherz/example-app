<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <section>
        {{ App\Http\Controllers\PostController2::index() }}
    </section>
    <aside>
        <a href="#most_visited">
            <div class="blocs_right" onmouseover="changeColor(this)" onmouseout="changeColorBack(this)">Go back to the first post</div>
        </a>
        <div class="blocs_right" onmouseover="changeColor(this)" onmouseout="changeColorBack(this)">
            <a href="https://sepulcherz.github.io/CV/" target="blank"><img src="{{ asset('/storage/img/rotatingtiass2.gif') }}" id="qrcode" alt="ma tête mais un peu cheloue" /></a>
        </div>
        <div class="blocs_right" onmouseover="changeColor(this)" onmouseout="changeColorBack(this)">
            <form id="form1" action="mailto:mr_devaux@hotmail.fr" method="GET"><label for="email">Send me an e-mail!</label><input type="email" id="email"></form><button type="submit" form="form1" value="Submit" onClick="return empty()">Send</button>
        </div>
    </aside>
    </div>
</x-app-layout>