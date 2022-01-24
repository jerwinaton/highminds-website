// submit
$(document).ready(() => {
  $(".my-modal-categories").on("submit", function (e) {
    // prevent default submission
    e.preventDefault();

    //used formData so images can be sent too
    let formData = new FormData(this);

    // ajax script to upload category
    $.ajax({
      type: "post",
      url: "php/upload-categories.php",
      data: formData,

      beforeSend: function () {
        $("#categories-btn-add").html("Processing...");

        // disable button upon submitting data
        $("#categories-btn-add").attr("disabled", true);

        console.log("Processing...");
      },

      complete: function () {
        $("#categories-btn-add").html("Add");

        // enable button again
        $("#categories-btn-add").removeAttr("disabled");
      },
      success: function (response) {
        $(".my-modal-categories h3").html(response);
        // reset form
        $(".my-modal-categories").trigger("reset");

        // delete icon from container
        $(".my-modal-categories").find(".delete-image").click();
        console.log("success");
      },
      cache: false,
      contentType: false,
      processData: false,
    });
  });
});
