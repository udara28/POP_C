function translate(params, url) {
    $.ajax({
        type: "POST",
        url: "http://localhost/pop_c/popc-api/index.php?do=" + url,
        dataType: "json",
        data: jQuery.parseJSON(params),
        success: function (data) {
            console.log(data['result']);
            img = "data:image/jpg;base64,"+data['result'];
            imgTag = "<img src="+img+">";
            $("#imageDiv").html(imgTag);
        }
    });
}