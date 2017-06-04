/**
 * Created by marimardelacerna on 04/06/2017.
 */
// var node = document.createElement("LI");                 // Create a <li> node
// var textnode = document.createTextNode("Water");         // Create a text node
// node.appendChild(textnode);                              // Append the text to <li>
// document.getElementById("offers_list").appendChild(node);     // Append <li> to <ul> with id="myList"
var list = ["Room 1", "Room 2", "Room 3", "Room 4"]

var offers_list = document.getElementById("offers_list");

for (i = 0; i < list.length; i++) {
    var _div_main = document.createElement("div");
    _div_main.setAttribute("class", "row");
    offers_list.appendChild(_div_main);
    //div_
    var div_img = document.createElement("div");
    div_container.setAttribute("class", "col-sm-12");
    _div_main.appendChild(div_container);

//title
    var h2_title = document.createElement("h2");
    h2_title.setAttribute("style", "text-align:left");
    var textnode = document.createTextNode(list[i]);         // Create a text node
    h2_title.appendChild(textnode);
    _div_main.appendChild(h2_title);

//div_container
    var div_container = document.createElement("div");
    div_container.setAttribute("class", "col-sm-12");
    _div_main.appendChild(div_container);

//img_container
    var img_container = document.createElement("img");
    img_container.setAttribute("alt", "Avatar");
    img_container.setAttribute("class", "image");
// img_container.src("{{asset('/second.jpg')}}");
    img_container.src = "http://localhost:8000/tsai_bootstrap/img/second.jpg";
    div_container.appendChild(img_container);

//div_desc
    var div_desc = document.createElement("div");
    div_desc.setAttribute("class", "col-sm-8");
    div_container.appendChild(div_desc);

    var p_desc = document.createTextNode("Lorem ipsum dolor sit amet, consectetuer adipiscing elit." +
        "Lorem ipsum dolor sit amet, consectetuer adipiscing elit." +
        "Lorem ipsum dolor sit amet, consectetuer adipiscing elit." +
        "Lorem ipsum dolor sit amet, consectetuer adipiscing elit.")
    div_desc.appendChild(p_desc);
}
offers_list.appendChild(divtest)


// <div class="s-12 m-6 l-4">
//     <h2 style="text-align: left">Titles</h2>
//     <div class="myContainer">
//     <img class="image" src="{{asset('tsai_bootstrap/img/second.jpg')}}" alt="Avatar">
//     <div class="middle">
//     <a class="button rounded-full-btn submit-btn margin-bottom" href="#">
//     <img src="{{asset('tsai_bootstrap/img/ic_mode_edit_white_24dp_1x.png')}}">
//     </a>
//     <a class="button rounded-full-btn cancel-btn margin-bottom" href="#">
//     <img src="{{asset('tsai_bootstrap/img/ic_delete_forever_white_24dp_1x.png')}}">
//     </a>
//     </div>
//     </div>
//
//     Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
//     Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
//     Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
// <a href="">
//     <span onclick="hide(); return false">Details</span>
//     </a>                </p>
//     </div>