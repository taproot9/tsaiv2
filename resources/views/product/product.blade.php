@extends('layouts.tsai_master')

@section('content')
<section>
    <div id="head">
        <div class="line">
            <h1>Some long page title</h1>
        </div>
    </div>
    <div id="content">
        <div class="line">
            <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil.
            </p>
            <h2>Some subtitle</h2>
            <p class="s-12 m-12 l-8 center">Imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
            </p>
        </div>
    </div>
    <!-- GALLERY -->
    <div id="third-block">
        <div class="line">
            <h2>Responsive gallery</h2>
            <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
            </p>
            <div class="margin">
                <div class="s-12 m-6 l-3">
                    <img src="img/first-small.jpg">
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
                <div class="s-12 m-6 l-3">
                    <img src="img/second-small.jpg">
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
                <div class="s-12 m-6 l-3">
                    <img src="img/third-small.jpg">
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
                <div class="s-12 m-6 l-3">
                    <img src="img/fourth-small.jpg">
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="fourth-block">
        <div class="line">
            <div id="owl-demo2" class="owl-carousel owl-theme">
                <div class="item">
                    <h2>Amazing responsive template</h2>
                    <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="item">
                    <h2>Responsive components</h2>
                    <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="item">
                    <h2>Retina ready</h2>
                    <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection