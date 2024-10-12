@extends('layouts.index')

@section('content')
    <section class="hero">
    </section>
    <section class="appSection">
        <h2>Sobre nosotros</h2>
    </section>
    <section class="appSection">
        <h2>Ultimos articulos</h2>
    </section>
    <section class="appSection">
        <h2>Ultimos Eventos</h2>
    </section>
    <section class="appSection">
        <h2>Siguenos</h2>
    </section>
@endsection

@section('script')
<script defer>
        window.onscroll = function() {
            myFunction()
        };

        var header = document.getElementById("appHeader");
        console.log(header)
        var sticky = document.body.scrollTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.remove("transparent");
            } else {
                header.classList.add("transparent");
            }
        }

    </script>
@endsection