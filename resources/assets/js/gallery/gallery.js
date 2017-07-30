/**
 * Created by marimardelacerna on 30/07/2017.
 */
$(".add_gallery").click(function(){
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