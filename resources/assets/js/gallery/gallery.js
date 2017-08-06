/**
 * Created by marimardelacerna on 30/07/2017.
 */
$(":button").click(function () {
    $(".gallery_id").hide();
    var id_check = this.id
    console.log(id_check)
    try{
        var club_id = $(this).attr("data-content");
        obj = JSON && JSON.parse(club_id) || $.parseJSON(club_id);
    }catch (e){}

    switch (id_check) {

        case 'add_item':
            break;
        case 'details_item':
            $("#detail_photo_name").attr("src", obj.photo_name)
            $( "#detail_title" ).text(obj.title);
            $( "#detail_description" ).text(obj.description);
            break;
        case 'edit_item':
            $(".gallery_id").val(obj.id);
            $(".photo_name").attr("src", obj.photo_name);
            $(".title").attr("value", obj.title);
            $(".description").val(obj.description);
            break;
        case 'delete_item':
            $(".gallery_id").val(obj.id);
            break;
        case 'add_cancel':
            $("#add_gallery").modal('toggle');
            break
        case 'edit_cancel':
            $("#edit_gallery").modal('toggle');
            break
        case 'delete_cancel':
            $("#delete_gallery").modal('toggle');
            break
        case 'details_cancel':
            $("#details_gallery").modal('toggle');
            break
        default:
        }
});

function readURL(input, check) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        if(check == 'add_image') {
            reader.onload = function (e) {
                $('.photo_name').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);

        }else{
            reader.onload = function (e) {
                $('.photo_name').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }

    }
}

$("#input_image_add").change(function () {
    readURL(this, 'add_image');
});
$("#input_image_edit").change(function () {
    readURL(this, 'edit_image');
});

$( "p" ).bind( "click", function( event ) {
    var str = "( " + event.pageX + ", " + event.pageY + " )";
    $( "span" ).text( "Click happened! " + str );
});
$( "p" ).bind( "dblclick", function() {
    $( "span" ).text( "Double-click happened in " + this.nodeName );
});
$( "p" ).bind( "mouseenter mouseleave", function( event ) {
    $( this ).toggleClass( "over" );
});