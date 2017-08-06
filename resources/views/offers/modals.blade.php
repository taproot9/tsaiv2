<div id="add_gallery" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">



        <div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px">
            <form action="/action_page.php">

                <img src="http://placehold.it/100x100" id ="showimages" style="max-width:200px;max-height:200px;margin-right: auto;margin-left: auto"/>

                <br>

                <input type="file" id="fname" name="firstname" placeholder="Title..">

                <br>
                <br>

                <label for="title">Title</label>
                <input type="text" id="title" name="firstname" placeholder="Title..">

                <label for="lname">Description</label>
                <textarea id="lname" placeholder="Text here ..."></textarea>

                <label for="price">Price</label>
                <input type="text" id="price" name="firstname" placeholder="Price..">

                {{--<label for="country">Country</label>--}}
                {{--<select id="country" name="country">--}}
                    {{--<option value="australia">Australia</option>--}}
                    {{--<option value="canada">Canada</option>--}}
                    {{--<option value="usa">USA</option>--}}
                    {{--</select>--}}

                <button onclick="document.getElementById('add_gallery').style.display='none'" type="button" class="w3-button w3-green w3-large" style="width: 25%; border-radius: 10px">Submit</button>

                <button onclick="document.getElementById('add_gallery').style.display='none'" type="button" class="w3-button w3-green w3-large" style="width: 25%; border-radius: 10px">Cancel</button>

            </form>
        </div>

    </div>
</div>


<div id="edit_gallery" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">



        <div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px">
            <form action="/action_page.php">

                <img src="http://placehold.it/100x100" id ="showimages" style="max-width:200px;max-height:200px;margin-right: auto;margin-left: auto"/>

                <br>

                <input type="file" id="fname" name="firstname" placeholder="Title..">

                <br>
                <br>

                <label for="title">Title</label>
                <input type="text" id="title" name="firstname" placeholder="Title..">
                <label for="price">Price</label>
                <input type="text" id="price" name="firstname" placeholder="Price..">
                <label for="lname">Description</label>
                <textarea id="lname" placeholder="Text here ..."></textarea>

                <br>
                <br>

                {{--<label for="country">Country</label>--}}
                {{--<select id="country" name="country">--}}
                    {{--<option value="australia">Australia</option>--}}
                    {{--<option value="canada">Canada</option>--}}
                    {{--<option value="usa">USA</option>--}}
                    {{--</select>--}}



                <button onclick="document.getElementById('edit_gallery').style.display='none'" type="button" class="w3-button w3-green w3-large" style="width: 25%; border-radius: 10px">Submit</button>

                <button onclick="document.getElementById('edit_gallery').style.display='none'" type="button" class="w3-button w3-green w3-large" style="width: 25%; border-radius: 10px">Cancel</button>

            </form>
        </div>

    </div>
</div>

<div id="delete_gallery" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">



        <div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px">
            <form action="/action_page.php">

                <label for="title">Do you really want to delete this?</label>
                <br>
                <br>
                <button onclick="document.getElementById('delete_gallery').style.display='none'" type="button" class="w3-button w3-green w3-large" style="width: 25%; border-radius: 10px">Ok</button>

                <button onclick="document.getElementById('delete_gallery').style.display='none'" type="button" class="w3-button w3-green w3-large" style="width: 25%; border-radius: 10px">Cancel</button>

            </form>
        </div>

    </div>
</div>

<div class="line">
    <div class="line">
        <div class="margin" id="offers_list">


            <div class="main-container">
                <img class="image" src="{{asset('tsai_bootstrap/img/second.jpg')}}" alt="Avatar" class="image">


                <div class="sub-container1">
                    <span class="hotel-name">crown regenct suites & residences - mactan</span><br>
                    <span class="promo-name">Romantic Getaway (Mactan, Cebu)</span>
                    <hr class="horizontal-line">
                    <p class="promo-desc">Enjoy 3 days 2 nights of some sweet lovin' in our Mediterranean-inspired property, Crown Regency Suites Residences in Mactan, Cebu. Let us pamper you with romantic candlelit meals, first-class suite accommodations, and a complimentary bottle of wine.</p>
                </div>

                <div class="sub-container2">
                    <span class="price-tag">P13,100.00</span><br>
                    <span class="info">Inclusive of VAT and local tax.</span> <br>
                    <!--                            <button type="button" class="btn btn-success" id="ovride-btn-success"><span class="glyphicon glyphicon-bed"></span>&nbsp&nbspBook Now</button>-->
                    <!--                            <button onclick="document.getElementById('bookNow').style.display='none'" type="button" class="w3-button w3-green w3-large" style="width: 25%; border-radius: 10px">BOOK NOW!</button>-->
                    <button  onclick="document.getElementById('bookNow').style.display='block'" type="button" class="w3-button w3-green" style="width: 25%; border-radius: 10px">BOOK NOW!</button>

                </div>

            </div>

        </div>
    </div>

    <!--            modal-->
    <div id="bookNow" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

            <br>
            <a href="" onclick="document.getElementById('bookNow').style.display='none'" class="w3-btn w3-green" style="width: 30%; border-radius: 10px" >Promo</a>

            <br>
            <br>

            <form class="w3-container" action="/action_page.php">
                <div class="w3-section">

                    <div class="w3-row">
                        <div class="w3-col l6 w3-left-align">
                            <label class="w3-left-align"><b>Check-in Date</b></label>
                            <input class="w3-input" type="date">
                        </div>

                        <div class="w3-col l6 w3-left-align">
                            <label><b style="text-align: left">Check-out Date</b></label>
                            <input class="w3-input" type="date">
                        </div>
                    </div>

                    <br>

                    <div class="w3-row">
                        <div class="w3-col s6 w3-left-align">
                            <label><b>Quantity</b></label>
                            <input class="w3-input" type="text" placeholder="0">
                        </div>

                        <div class="w3-col s3 w3-left-align">
                            <label><b>Adults</b></label>
                            <input class="w3-input" type="text" placeholder="0">
                        </div>

                        <div class="w3-col s3 w3-left-align">
                            <label><b>Children</b></label>
                            <input class="w3-input" type="text" placeholder="0">
                        </div>
                    </div>
                </div>


            </form>

            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                <button onclick="document.getElementById('bookNow').style.display='none'" type="button" class="w3-button w3-green" style="width: 25%; border-radius: 10px">Submit</button>
                <button onclick="document.getElementById('bookNow').style.display='none'" type="button" class="w3-button w3-green" style="width: 25%; border-radius: 10px">Cancel</button>
            </div>

        </div>
    </div>