$(document).ready(function () {
    $(".editobat").on("click", function () {
        const id = $(this).data("id");
        const code = $(this).data("code");
        $.ajax({
            url: "/dashboard/obats/" + code + "/edit",
            data: {
                id: id,
                code: code,
            },
            type: "get",
            dataType: "json",
            success: function (data) {
                console.log(data);
                $("#id").val(data.id);
                $("#code").val(data.code);
                $("#name").val(data.name);
                $("#description").val(data.description);
                $("#editform").attr("action", "/dashboard/obats/" + data.code);
            },
        });
    });
});
