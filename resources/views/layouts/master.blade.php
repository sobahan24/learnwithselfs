@include('layouts.partials.header')

<body>
    @include('layouts.partials.navber')

    <div id="app">
        <main>

            @yield('content')

            @include('layouts.partials.footer')
        </main>
    </div>

    <script src="{{ asset("ui") }}/frontend/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset("ui") }}/frontend/js/bootstrap5.bundle.min.js"></script>
    <script src="{{ asset("ui") }}/frontend/js/owl.carousel.js"></script>
    <script src="{{ asset("ui") }}/frontend/js/custom.js"></script>

    <script>
        setInterval(function() {
            window.location.reload();
        }, 1500000);
    </script>

    <script>
        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            alert("Copied Successfully");
            $temp.remove();
        }
    </script>
</body>
</html>
