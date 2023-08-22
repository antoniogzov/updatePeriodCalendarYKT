$(document).ready(function () {
  $(document).on("change", "#id_level_combination", function () {
    var id_level_combination = $(this).val();
    loading();
    window.location.search = "id_level_combination=" + id_level_combination;
    /* if (urlParams.has('submodule')) {
        //--- --- ---//

   //     const submodule = urlParams.get('submodule');
    } */
  });
  $(document).on("focusin", ".updateStartDate", function () {
    var fecha = $(this).text();
    var id_period_calendar = $(this).attr("data-id-period-calendar");
    //    console.log(fecha);
    if (fecha.length > 1 || fecha.length == 0) {
      $(this).html(
        ' <input type="date" id=startDatePC"' +
          id_period_calendar +
          '" class="start_date" data-id-period-calendar="' +
          id_period_calendar +
          '" value="' +
          fecha +
          '"></input>'
      );
      /* $(this).append(' <button type="button" class="btn btn-primary btn-sm">Small button</button>'); */
    } else {
      var fecha = $("#startDatePC" + id_period_calendar).val();
      $("#startDatePC" + id_period_calendar).val(fecha);
    }
  });

  $(document).on("focusout", ".start_date", function () {
    //--- --- ---//
    var id_period_calendar = $(this).attr("data-id-period-calendar");
    var fecha = $(this).val();
    if (fecha.length > 0) {
      $("#td_PCsD" + id_period_calendar)
        .empty()
        .text(fecha);

      //--- --- ---//
      loading();
      $.ajax({
        url: "php/controllers/level_combinations_controller.php",
        method: "POST",
        data: {
          mod: "updateStartDate",
          start_date: fecha,
          id_period_calendar: id_period_calendar,
        },
      })
        .done(function (data) {
          Swal.close();
          var data = JSON.parse(data);

          if (data.response == true) {
            var myToast = Toastify({
              text: data.message,
              duration: 3000,
            });
            myToast.showToast();
          } else {
            var myToast = Toastify({
              text: data.message,
              duration: 3000,
            });
            myToast.showToast();
          }

          //--- --- ---//
          //--- --- ---//
        })
        .fail(function (message) {
          Swal.close();
          var myToast = Toastify({
            text: data.message,
            duration: 3000,
          });
          myToast.showToast();
        });
    } else {
      Swal.fire({
        icon: "info",
        title: "No puede dejar este campo vacío!!!",
        timer: 1500,
      }).then((result) => {
        loading();
        location.reload();
      });
    }
  });

  $(document).on("focusin", ".updateEndDate", function () {
    var fecha = $(this).text();
    var id_period_calendar = $(this).attr("data-id-period-calendar");
    //    console.log(fecha);
    if (fecha.length > 1 || fecha.length == 0) {
      $(this).html(
        ' <input type="date" id=endDatePC"' +
          id_period_calendar +
          '" class="end_date" data-id-period-calendar="' +
          id_period_calendar +
          '" value="' +
          fecha +
          '"></input>'
      );
      /* $(this).append(' <button type="button" class="btn btn-primary btn-sm">Small button</button>'); */
    } else {
      var fecha = $("#endDatePC" + id_period_calendar).val();
      $("#endDatePC" + id_period_calendar).val(fecha);
    }
  });

  $(document).on("focusout", ".end_date", function () {
    //--- --- ---//
    var id_period_calendar = $(this).attr("data-id-period-calendar");
    var fecha = $(this).val();
    if (fecha.length > 0) {
      $("#td_PCeD" + id_period_calendar)
        .empty()
        .text(fecha);

      //--- --- ---//
      loading();
      $.ajax({
        url: "php/controllers/level_combinations_controller.php",
        method: "POST",
        data: {
          mod: "updateEndDate",
          end_date: fecha,
          id_period_calendar: id_period_calendar,
        },
      })
        .done(function (data) {
          Swal.close();
          var data = JSON.parse(data);

          if (data.response == true) {
            var myToast = Toastify({
              text: data.message,
              duration: 3000,
            });
            myToast.showToast();
          } else {
            var myToast = Toastify({
              text: data.message,
              duration: 3000,
            });
            myToast.showToast();
          }

          //--- --- ---//
          //--- --- ---//
        })
        .fail(function (message) {
          Swal.close();
          var myToast = Toastify({
            text: data.message,
            duration: 3000,
          });
          myToast.showToast();
        });
    } else {
      Swal.fire({
        icon: "info",
        title: "No puede dejar este campo vacío!!!",
        timer: 1500,
      }).then((result) => {
        loading();
        location.reload();
      });
    }
  });

  $(document).on("focusin", ".updateClosingDate", function () {
    var fecha = $(this).text();
    var id_period_calendar = $(this).attr("data-id-period-calendar");
    //    console.log(fecha);
    if (fecha.length > 1 || fecha.length == 0) {
      $(this).html(
        ' <input type="date" id=closingDatePC"' +
          id_period_calendar +
          '" class="closing_date" data-id-period-calendar="' +
          id_period_calendar +
          '" value="' +
          fecha +
          '"></input>'
      );
      /* $(this).append(' <button type="button" class="btn btn-primary btn-sm">Small button</button>'); */
    } else {
      var fecha = $("#closingDatePC" + id_period_calendar).val();
      $("#closingDatePC" + id_period_calendar).val(fecha);
    }
  });

  $(document).on("focusout", ".closing_date", function () {
    //--- --- ---//
    var id_period_calendar = $(this).attr("data-id-period-calendar");
    var fecha = $(this).val();
    if (fecha.length > 0) {
      $("#td_PCcD" + id_period_calendar)
        .empty()
        .text(fecha);

      //--- --- ---//
      loading();
      $.ajax({
        url: "php/controllers/level_combinations_controller.php",
        method: "POST",
        data: {
          mod: "updateClosingDate",
          grade_closing_date: fecha,
          id_period_calendar: id_period_calendar,
        },
      })
        .done(function (data) {
          Swal.close();
          var data = JSON.parse(data);

          if (data.response == true) {
            var myToast = Toastify({
              text: data.message,
              duration: 3000,
            });
            myToast.showToast();
          } else {
            var myToast = Toastify({
              text: data.message,
              duration: 3000,
            });
            myToast.showToast();
          }

          //--- --- ---//
          //--- --- ---//
        })
        .fail(function (message) {
          Swal.close();
          var myToast = Toastify({
            text: data.message,
            duration: 3000,
          });
          myToast.showToast();
        });
    } else {
      Swal.fire({
        icon: "info",
        title: "No puede dejar este campo vacío!!!",
        timer: 1500,
      }).then((result) => {
        loading();
        location.reload();
      });
    }
  });

  $(".view_student_reports").change(function () {
    id_period_calendar = $(this).attr("id");
    view_student_reports = "0";
    if (this.checked) {
      view_student_reports = "1";
    }

    loading();
    $.ajax({
      url: "php/controllers/level_combinations_controller.php",
      method: "POST",
      data: {
        mod: "updateViewStudentReports",
        view_student_reports: view_student_reports,
        id_period_calendar: id_period_calendar,
      },
    })
      .done(function (data) {
        Swal.close();
        var data = JSON.parse(data);

        if (data.response == true) {
          var myToast = Toastify({
            text: data.message,
            duration: 3000,
          });
          myToast.showToast();
        } else {
          var myToast = Toastify({
            text: data.message,
            duration: 3000,
          });
          myToast.showToast();
        }

        //--- --- ---//
        //--- --- ---//
      })
      .fail(function (message) {
        Swal.close();
        var myToast = Toastify({
          text: data.message,
          duration: 3000,
        });
        myToast.showToast();
      });
  });

  $(".allow_editing_grades").change(function () {
    id_period_calendar = $(this).attr("id");
    allow_editing_grades = "0";
    if (this.checked) {
      allow_editing_grades = "1";
    }

    loading();
    $.ajax({
      url: "php/controllers/level_combinations_controller.php",
      method: "POST",
      data: {
        mod: "updateAllowEditingGrades",
        allow_editing_grades: allow_editing_grades,
        id_period_calendar: id_period_calendar,
      },
    })
      .done(function (data) {
        Swal.close();
        var data = JSON.parse(data);

        if (data.response == true) {
          var myToast = Toastify({
            text: data.message,
            duration: 3000,
          });
          myToast.showToast();
        } else {
          var myToast = Toastify({
            text: data.message,
            duration: 3000,
          });
          myToast.showToast();
        }

        //--- --- ---//
        //--- --- ---//
      })
      .fail(function (message) {
        Swal.close();
        var myToast = Toastify({
          text: data.message,
          duration: 3000,
        });
        myToast.showToast();
      });
  });

  $(".show_paterns").change(function () {
    id_period_calendar = $(this).attr("id");
    show_paterns = "0";
    if (this.checked) {
      show_paterns = "1";
    }

    loading();
    $.ajax({
      url: "php/controllers/level_combinations_controller.php",
      method: "POST",
      data: {
        mod: "updateShowPaterns",
        show_paterns: show_paterns,
        id_period_calendar: id_period_calendar,
      },
    })
      .done(function (data) {
        Swal.close();
        var data = JSON.parse(data);

        if (data.response == true) {
          var myToast = Toastify({
            text: data.message,
            duration: 3000,
          });
          myToast.showToast();
        } else {
          var myToast = Toastify({
            text: data.message,
            duration: 3000,
          });
          myToast.showToast();
        }

        //--- --- ---//
        //--- --- ---//
      })
      .fail(function (message) {
        Swal.close();
        var myToast = Toastify({
          text: data.message,
          duration: 3000,
        });
        myToast.showToast();
      });
  });

  $(".allow_extra_exam").change(function () {
    id_period_calendar = $(this).attr("id");
    allow_extra_exam = "0";
    if (this.checked) {
      allow_extra_exam = "1";
    }

    loading();
    $.ajax({
      url: "php/controllers/level_combinations_controller.php",
      method: "POST",
      data: {
        mod: "updateAllowExtraExam",
        allow_extra_exam: allow_extra_exam,
        id_period_calendar: id_period_calendar,
      },
    })
      .done(function (data) {
        Swal.close();
        var data = JSON.parse(data);

        if (data.response == true) {
          var myToast = Toastify({
            text: data.message,
            duration: 3000,
          });
          myToast.showToast();
        } else {
          var myToast = Toastify({
            text: data.message,
            duration: 3000,
          });
          myToast.showToast();
        }

        //--- --- ---//
        //--- --- ---//
      })
      .fail(function (message) {
        Swal.close();
        var myToast = Toastify({
          text: data.message,
          duration: 3000,
        });
        myToast.showToast();
      });
  });
});

function loading() {
  Swal.fire({
    title: "Cargando...",
    html: '<img src="img/loading.gif" width="300" height="300">',
    allowOutsideClick: false,
    allowEscapeKey: false,
    showCloseButton: false,
    showCancelButton: false,
    showConfirmButton: false,
  });
}
