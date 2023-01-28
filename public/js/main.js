$(document).ready(function () {
    $("#filter_student").on("change", function () {
        var filter_student = $(this).val();
        $.ajax({
            url: "{{ route('manage_subject_edit', $data->subject_id) }}",
            type: "GET",
            data: { filter_student: filter_student },
            success: function (data) {
                var students = data.students;
                var html = "";
                if (students.length > 0) {
                    for (let i = 0; i < students.length; i++) {
                        html +=
                            "<tr>\
                                <td>" +
                            students[i]["student_code"] +
                            "</td>\
                                <td>" +
                            students[i]["student_prefix"] +
                            students[i]["student_fname"] +
                            " " +
                            students[i]["student_lname"] +
                            "</td>\
                            <td>\
                            <div class='form-check'>\
                              <input class='form-check-input' type='checkbox'\
                                value='' id='defaultCheck1'>\
                            </div>\
                            </td>\
                                </tr>";
                    }
                } else {
                    html +=
                        "<tr>\
                    <td>No data</td>\
                    </tr>";
                }
                $("#student_filter").html(html);
            },
        });
    });
    $("#example").DataTable();
});

const tooltipTriggerList = document.querySelectorAll(
    '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
    (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);
const selectElement = document.querySelector(".input-nonenumber");
selectElement.addEventListener("input", (event) => {
    const result = document.querySelector(".result");
    event.target.value = event.target.value.replace(/[0-9]/g, "");
    result.textContent = event.target.value;
});
