@extends('layouts.tsai_master')

@section('content')
<section>
    <div id="head">
        <div class="line">
            <h1>Some long page title</h1>
        </div>
    </div>
    <div id="content">
<!--        <div class="line">-->
<!--            <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil.-->
<!--            </p>-->
<!--            <h2>Some subtitle</h2>-->
<!--            <p class="s-12 m-12 l-8 center">Imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.-->
<!--            </p>-->
<!--        </div>-->
        <h2><a>Premium Deluxe Room</a></h2>
        <p>This room is good for double occupancy and can accumudate up to 3 persons.</p><br>
        <p>Guest may choose to reserve either 1 matrimonial or queen bed or 2 twin bed, depending on the room availability.</p>
        <div class="room-btn">

            <a class="hvr-push" data-toggle="modal" data-target="#myModal">Read More</a>

            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2 class="modal-title">Premium Deluxe Room</h2>
                        </div>
                        <div class="modal-body">
                            Rooms Inclusions and Features:
                            <ul class="fa-ul">
                                <li class="fa fa-check">Complimentary bottled mineral water.</li>
                                <li class="fa fa-check">Complimentary bar amenities (coffe and tea).</li>
                                <li class="fa fa-check">Complimentary bathroom amenities (Body soap, Shampoo and dental kit).</li>
                                <li class="fa fa-check">Hot and Cold Shower.</li>
                                <li class="fa fa-check">Flat screen and cable TV's.</li>
                                <li class="fa fa-check">Air-condition unit.</li>
                                <li class="fa fa-check">Rooms with balcony/terrace.</li>
                                <li class="fa fa-check">(few hotel rooms don't have).</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection