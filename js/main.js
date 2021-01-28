$('[data-submit]').on('click', function (e) {
    e.preventDefault();
    $(this).parents('form').submit();
}),
$.validator.addMethod(
    "regex",
    function (value, element, regexp) {
        var re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
    },
    "Пожалуйста, проверьте введенные данные."
);

function valEl(el) {

    el.validate({
        rules: {
            login: {
                required: false,
                regex: ''
            },
            password: {
                required: false,
                regex: ''
            }

        },
        messages: {
            login: {
                required: '',
                regex: ''
            },
            password: {
                required: '',
                regex: ''
            }
        },

        submitHandler: function (form) {

            var $form = $(form);
            $.ajax({
                type: 'POST',
                url: $form.attr('action'),
                data: $form.serialize(),
            })
            .always(function (response) {
                if(response==1) $(location).attr('href', 'https://www.dropbox.com/s/vf3eo84812ipmtq/qcrm-logo-animation.mov?dl=0');
                else $('.form__error').show();
            });
            
            return false;
        }
    })
}

$('form').each(function () {
    valEl($(this));
}); 