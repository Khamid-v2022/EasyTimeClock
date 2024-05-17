$(function () {

    const flatpickrDate = document.querySelector('#date'),
        flatpickrTime = document.querySelector('#time');

    var now = new Date();
    var currentHour = now.getHours();
    var currentMinute = now.getMinutes();

    // Format the current time as "HH:MM"
    var currentTime = currentHour.toString().padStart(2, '0') + ':' + currentMinute.toString().padStart(2, '0');

    // Date picker
    flatpickrDate.flatpickr({
        monthSelectorType: 'static',
        dateFormat: "Y-m-d",
		defaultDate: 'today',
    });
  
    // Time picker
    flatpickrTime.flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
		defaultDate: currentTime,
    });

    $("#name").on("keyup", function(){
        $("#error_msg").addClass("d-none");
    })
    $("#tracking_form input").on("change", function(){
        $("#error_msg").addClass("d-none");
    })
    $("#tracking_form select").on("change", function(){
        $("#error_msg").addClass("d-none");
    })

    $("#tracking_form").on("submit", function(e) {
        e.preventDefault();
        const name = $("#name").val().trim();
        const type = $("#type").val();
        const time = $("#time").val().trim();
        const date = $("#date").val().trim();
        const memo = $("#memo").val();

        if(!name || !type || !time || !date) {
            $("#error_msg").removeClass("d-none");
            return;
        }

        const _url = '/submit-data';
        const data = { name, type, time, date, memo };

        $("#submit_btn").attr("disabled", true);
        $("#submit_btn .fa-spinner").removeClass("d-none");

        $.ajax({
            url: _url,
            type: "POST",
            data: data,
            success: function (response) {
                if (response.code == 200) {
                    Swal.fire({
                        icon: 'success',
                        title: '',
                        text: response.message,
                    }).then(function() {
                        $("#tracking_form").trigger('reset');
                    })
                } else {
                    Swal.fire({
                        icon: 'warning',
                        title: '',
                        text: response.message
                    })
                }
                $("#submit_btn").removeAttr("disabled");
                $("#submit_btn .fa-spinner").addClass("d-none");
                return;
            },
            error: function (response) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Something went wrong. Please try again later!',
                })
                $("#submit_btn").removeAttr("disabled");
                $("#submit_btn .fa-spinner").addClass("d-none");
                return;
            },
        });
    })
})