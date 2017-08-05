/**
 * Created by marimardelacerna on 30/07/2017.
 */
// $("#edit_gallery").click(function(){
//
//     var club_id = $(this).attr("data-content");
//     console.log(club_id)
//
// });

$("#edit_gal").click(function(){

    var club_id = $(this).attr("data-content");
    obj = JSON && JSON.parse(club_id) || $.parseJSON(club_id);
    console.log(club_id);
    console.log(obj.title);
    $("#id").val( obj.id );
    $("#photo_name").attr("src",obj.photo_name);
    $("#title").attr("value",obj.title);
    $(".modal-body #bookId").val( obj.photo_name );
    $("#description").val( obj.description );


});
// $("#edit_gallery_sumbit").click(function(){
//
//     var club_id = $(this).attr("data-content");
//     console.log(club_id)
//
// });


$("#add_gallery").click(function(){
    // action goes here!!
    console.log("boter is real")
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#showimages').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#inputimages").change(function () {
    readURL(this);
});