
$(document).ready(function() {
    var $wrapper = $('.js-child-wrapper');
    $wrapper.on('click', '.js-remove-child-form', function(e) {
        e.preventDefault();

        $(this).closest('.js-child-edit-form').remove();
    });

    $wrapper.on('click', '.js-child-add', function(e) {
        e.preventDefault();

        // Get the data-prototype explained earlier
        var prototype = $wrapper.data('prototype');

        // get the new index
        var index = $wrapper.data('index');

        var newForm = prototype;
        // You need this only if you didn't set 'label' => false in your tags field in TaskType
        // Replace '__name__label__' in the prototype's HTML to
        // instead be a number based on how many items we have
        // newForm = newForm.replace(/__name__label__/g, index);

        // Replace '__name__' in the prototype's HTML to
        // instead be a number based on how many items we have
        newForm = newForm.replace(/__name__/g, index);

        // increase the index with one for the next item
        $wrapper.data('index', index + 1);

        // Display the form in the page in an li, before the "Add a tag" link li
        $(this).before(newForm);
    });


    $('.js-remove-child').on('click', function(e) {
        e.preventDefault();
        var $el = $(this).closest('.js-children');
        $(this).find('.fa-close')
            .removeClass('fa-close')
            .addClass('.fa-spinner')
            .addClass('.fa-spin');

        $.ajax({
            url: $(this).data('url'),
            method: 'DELETE'
        }).done(function() {
            $el.fadeOut(500);
        });
    });


});