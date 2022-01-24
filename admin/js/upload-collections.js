// submit
$(document).ready(() => {
  $(".my-modal-collections").on("submit", function (e) {
    // prevent default submission
    e.preventDefault();

    //used formData so images can be sent too
    let formData = new FormData(this);

    // ajax script to upload category
    $.ajax({
      type: "post",
      url: "php/upload-collections.php",
      data: formData,

      beforeSend: function () {
        $("#collections-btn-add").html("Processing...");

        // disable button upon submitting data
        $("#collections-btn-add").attr("disabled", true);

        console.log("Processing...");
      },

      complete: function () {
        $("#collections-btn-add").html("Add");

        // enable button again
        $("#collections-btn-add").removeAttr("disabled");
      },
      success: function (response) {
        $(".my-modal-collections h3").html(response);
        // reset form
        $(".my-modal-collections").trigger("reset");

        // delete icon from container
        $(".my-modal-collections").find(".delete-image").click();
        console.log("success");
      },
      cache: false,
      contentType: false,
      processData: false,
    });
  });
});
