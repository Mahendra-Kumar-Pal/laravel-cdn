<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- metisMenu -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.7/metisMenu.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        MetisMunu
                    </div>
                    {{-- <div class="card-body">
                        <ul id="menu">
                            <li class="active">
                                <a href="#" class="has-arrow" aria-expanded="true">Menu 0</a>
                                <ul>
                                    <li><a href="#">item 0.1</a></li>
                                    <li><a href="#">item 0.2</a></li>
                                    <li><a href="#">item 0.3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="has-arrow" aria-expanded="false">Menu 1</a>
                                <ul>
                                    <li><a href="#">item 1.1</a></li>
                                    <li><a href="#">item 1.2</a></li>
                                    <li>
                                        <a href="#" class="has-arrow" aria-expanded="false">Menu 1.3</a>
                                        <ul>
                                            <li><a href="#">item 1.3.1</a></li>
                                            <li><a href="#">item 1.3.2</a></li>
                                            <li><a href="#">item 1.3.3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">item 1.4</a></li>
                                    <li>
                                        <a href="#" class="has-arrow" aria-expanded="false">Menu 1.5</a>
                                        <ul>
                                            <li><a href="#">item 1.5.1</a></li>
                                            <li><a href="#">item 1.5.2</a></li>
                                            <li><a href="#">item 1.5.3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="has-arrow" aria-expanded="false">Menu 2</a>
                                <ul>
                                    <li><a href="#">item 2.1</a></li>
                                    <li><a href="#">item 2.2</a></li>
                                    <li><a href="#">item 2.3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="card-body">
                        <div class="clearfix">
                            <aside class="sidebar">
                                <nav class="sidebar-nav">
                                    <ul class="metismenu" id="auto-collapse-menu-demo">
                                        <li class="active">
                                            <a href="#" aria-expanded="true">
                                                <span class="sidebar-nav-item-icon fa fa-github fa-lg"></span>
                                                <span class="sidebar-nav-item">Menu demo</span>
                                                <span class="fa arrow"></span>
                                            </a>
                                            <ul aria-expanded="true">
                                                <li>
                                                    <a href="https://www.jquery-az.com/">
                                                        <span class="sidebar-nav-item-icon fa fa-code-fork"></span>
                                                        jQuery
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.jquery-az.com/">
                                                        <span class="sidebar-nav-item-icon fa fa-star"></span>
                                                        Bootstrap
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.jquery-az.com/">
                                                        <span
                                                            class="sidebar-nav-item-icon fa fa-exclamation-triangle"></span>
                                                        PHP
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" aria-expanded="false">jQuery <span
                                                    class="fa arrow"></span></a>
                                            <ul aria-expanded="false">
                                                <li><a href="https://www.jquery-az.com/">$.on</a></li>
                                                <li><a href="https://www.jquery-az.com/">$.animate</a></li>
                                                <li><a href="https://www.jquery-az.com/">$.click()</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="https://www.jquery-az.com/" aria-expanded="false">Bootstrap <span
                                                    class="glyphicon arrow"></span></a>
                                            <ul aria-expanded="false">
                                                <li><a href="#">Forms</a></li>
                                                <li><a href="#">Tables</a></li>
                                                <li>
                                                    <a href="#" aria-expanded="false">Carousel <span
                                                            class="fa plus-times"></span></a>
                                                    <ul aria-expanded="false">
                                                        <li><a href="#">Single Item</a></li>
                                                        <li><a href="#">Multi item</a></li>
                                                        <li><a href="#">Product</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Modals</a></li>
                                                <li>
                                                    <a href="#" aria-expanded="false">Accordions<span
                                                            class="fa plus-minus"></span></a>
                                                    <ul aria-expanded="false">
                                                        <li><a href="#">Accordion 1</a></li>
                                                        <li><a href="#">Accordion 2</a></li>
                                                        <li><a href="#">Accordion 3</a></li>
                                                        <li><a href="#">Accordion 4</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
    <!-- metisMenu -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.7/metisMenu.min.js"></script>
    {{-- <script>
        $(function() {
            $('#menu').metisMenu();
        });
    </script> --}}
    {{-- <script>
        $('#menu').metisMenu({
            // enabled/disable the auto collapse.
            toggle: true,
            // prevent default event
            preventDefault: true,
            // default classes
            activeClass: 'active',
            collapseClass: 'collapse',
            collapseInClass: 'in',
            collapsingClass: 'collapsing',
            // .nav-link for Bootstrap 4
            triggerElement: 'a',
            // .nav-item for Bootstrap 4
            parentTrigger: 'li',
            // .nav.flex-column for Bootstrap 4
            subMenu: 'ul'
        });
    </script> --}}
    <script>
        $(function() {
            $('#auto-collapse-menu-demo').metisMenu();
        });
    </script>
</body>

</html>
