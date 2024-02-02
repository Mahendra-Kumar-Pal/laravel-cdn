<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <script src="https://cdn.jsdelivr.net/npm/lozad"></script> --}}
    <style>
        div {
            margin: 30px;
        }

        .thumb {
            text-align: center;
            width: 360px;
            height: 267px;
            display: inline-block;
            padding: 100px 100px;
        }

        img {
            padding: 10px;
        }

        .fade {
            animation-name: fade;
            animation-duration: 2s;
        }

        @keyframes fade {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">Lozad</div>
                    <div class="card-body">
                        <div>
                            <article class="thumb">
                                <img class="lozad" data-src="https://apoorv.pro/lozad.js/demo/images/thumbs/01.jpg">
                            </article>
                            <article class="thumb">
                                <img class="lozad" data-src="https://apoorv.pro/lozad.js/demo/images/thumbs/02.jpg">
                            </article>
                            <article class="thumb">
                                <img class="lozad" data-src="https://apoorv.pro/lozad.js/demo/images/thumbs/03.jpg">
                            </article>
                            <article class="thumb">
                                <img class="lozad" data-src="https://apoorv.pro/lozad.js/demo/images/thumbs/04.jpg">
                            </article>
                            <article class="thumb">
                                <img class="lozad" data-src="https://apoorv.pro/lozad.js/demo/images/thumbs/05.jpg">
                            </article>
                            <article class="thumb">
                                <img class="lozad" data-src="https://apoorv.pro/lozad.js/demo/images/thumbs/06.jpg">
                            </article>
                            <article class="thumb">
                                <img class="lozad" data-src="https://apoorv.pro/lozad.js/demo/images/thumbs/07.jpg">
                            </article>
                            <article class="thumb">
                                <img class="lozad" data-src="https://apoorv.pro/lozad.js/demo/images/thumbs/08.jpg">
                            </article>
                            <article class="thumb">
                                <img class="lozad" data-src="https://apoorv.pro/lozad.js/demo/images/thumbs/09.jpg">
                            </article>
                            <article class="thumb">
                                <img class="lozad" data-src="https://apoorv.pro/lozad.js/demo/images/thumbs/10.jpg">
                            </article>
                            <article class="thumb">
                                <img class="lozad" data-src="https://apoorv.pro/lozad.js/demo/images/thumbs/11.jpg">
                            </article>
                            <article class="thumb">
                                <img class="lozad" data-src="https://apoorv.pro/lozad.js/demo/images/thumbs/12.jpg">
                            </article>
                        </div>
                        <!-- IntersectionObserver polyfill -->
                        <script src="https://raw.githubusercontent.com/w3c/IntersectionObserver/master/polyfill/intersection-observer.js">
                        </script>
                        <!-- Lozad.js from CDN -->
                        <script src="https://cdn.jsdelivr.net/npm/lozad"></script>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        lozad('.lozad', {
            load: function(el) {
                el.src = el.dataset.src;
                el.onload = function() {
                    el.classList.add('fade')
                }
            }
        }).observe()
    </script>
</body>

</html>
