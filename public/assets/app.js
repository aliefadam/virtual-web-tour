$(document).ready(function () {
    function readFile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                var htmlPreview =
                    '<img width="200" src="' +
                    e.target.result +
                    '" />' +
                    "<p>" +
                    input.files[0].name +
                    "</p>";
                var wrapperZone = $(input).parent();
                var previewZone = wrapperZone.siblings(".preview-zone");
                var boxZone = previewZone.find(".box-body");

                wrapperZone.removeClass("dragover");
                previewZone.removeClass("hidden");
                boxZone.empty();
                boxZone.append(htmlPreview);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".dropzone").change(function () {
        readFile(this);
    });

    $(".dropzone-wrapper").on("dragover", function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).addClass("dragover");
    });

    $(".dropzone-wrapper").on("dragleave", function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).removeClass("dragover");
    });

    $(".remove-preview").on("click", function () {
        var previewZone = $(this).parents(".form-group").find(".preview-zone");
        var boxZone = previewZone.find(".box-body");
        var dropzone = $(this).parents(".form-group").find(".dropzone");

        boxZone.empty();
        previewZone.addClass("hidden");
        dropzone.val(""); // Clear the file input
    });

    // Handle form submission
    $("#uploadForm").submit(function (e) {
        e.preventDefault();

        // Add any additional logic you need before submitting the form

        // Submit the form using AJAX
        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function (response) {
                // Handle success
                console.log(response);
            },
            error: function (xhr, status, error) {
                // Handle error
                console.error(xhr.responseText);
            },
        });
    });
});
