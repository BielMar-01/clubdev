$(document).ready(() => {
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Select/Deselect checkboxes
    const checkbox = $('table tbody input[type="checkbox"]');
    $('#selectAll').click(function () {
      if (this.checked) {
        checkbox.each(function () {
          this.checked = true;
        });
      } else {
        checkbox.each(function () {
          this.checked = false;
        });
      }
    });
    checkbox.click(function () {
      if (!this.checked) {
        $('#selectAll').prop('checked', false);
      }
    });
  });