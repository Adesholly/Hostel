function Add_Meal_Type(click_type) {
    $.ajax(
        {
            type: 'get',
            url: ('http://localhost/Tiffin_Management/public/ajax/show_form?type='+click_type),
            data: "html",
            success: function (data) {
                document.getElementById("Show_Adding_Form").innerHTML = data;
            }
        }
    );
}
