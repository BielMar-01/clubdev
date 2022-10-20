/*
$(document).ready(() => {
    $('[data-toggle="tooltip"]').tooltip();
    const actions = $('table td:last-child').html();
    // Append table with add row form on add new button click
    $('.add-new').click(function () {
        $(this).attr('disabled', 'disabled');
        const index = $('produtosDashboard__card__item').index();
        const row = '<div>'
            + '<input type="text" placeholder="Produto">'
            + '<input type="text" placeholder="R$ Preço">'
            + '<input class="desc" type="text" placeholder="Descrição">'
            + `<div>${actions}</div>`
            + '</tr>';
        $('div .produtosDashboard__card__item__sobre').append(row);
        $('div .produtosDashboard__card__item__sobre').eq(index + 1).find('.add, .edit').toggle();
    });
    // Add row on add button click
    $(document).on('click', '.add', function () {
        let empty = false;
        const input = $(this).parents('tr').find('input[type="url"]');
        input.each(function () {
            if (!$(this).val()) {
                $(this).addClass('error');
                empty = true;
            } else {
                $(this).removeClass('error');
            }
        });
        $(this).parents('tr').find('.error').first()
            .focus();
        if (!empty) {
            input.each(function () {
                $(this).parent('div').html($(this).val());
            });
            $(this).parents('div').find('.add, .edit').toggle();
            $('.add-new').removeAttr('disabled');
        }
    });
    // Edit row on edit button click
    $(document).on('click', '.edit', function () {
        $(this).parents('.produtosDashboard__card__item').find('td:not(:last-child)').each(function () {
            $(this).html(`<div class="produtosDashboard__card__item__sobre"> value="${$(this).text()}">`);
        });
        $(this).parents('produtosDashboard__card__item').find('.add, .edit').toggle();
        $('.add-new').attr('disabled', 'disabled');
    });
    // Delete row on delete button click
    $(document).on('click', '.delete', function () {
        $(this).parents('.produtosDashboard__card__item').remove();
        $('.add-new').removeAttr('disabled');
    });
});
*/

