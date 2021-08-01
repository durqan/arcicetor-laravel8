$(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#price a').click(function (e) {
        e.preventDefault();
        $('html').animate({
            scrollTop: $("#pricelist").offset().top - 150
        }, 100);
    });
    $('.btn-success').click(function (e) {
        e.preventDefault();
        $('.modal').modal('show');
    });
    $('.btn-close').click(function (e) {
        e.preventDefault();
        $('.modal').modal('hide');
        $('textarea').val('');
        $('input').val('');
    });

    $('#PlaneSolutions').on('click', function (e) {
        e.preventDefault();
        if (!$(this).hasClass('clicked')) {
            $(this).addClass('clicked');
            $('.UnderLinkOfProject').fadeIn('slow');
        }
        else {
            $(this).removeClass('clicked');
            $('.UnderLinkOfProject').fadeOut('slow');
        }
    });

    jQuery.validator.addMethod("alpha", function(value, element) {
        return this.optional(element) || /[а-яА-я]/.test(value);
    }, "В поле должны быть только буквы");

    $('form').validate({
        rules: {
            Name: {
                required: true,
                maxlength: 20,
                alpha: true,
            },
            SecondName: {
                required: true,
                maxlength: 20,
                alpha: true,
            },
            LastName: {
                required: true,
                maxlength: 20,
                alpha: true,
            },
            Email: {
                required: true,
                email: true,
            },
            PhoneNumber: {
                required: true,
                maxlength: 30,
                digits: true,
            },
        },
        messages: {
            Name: {
                required: "Это поле обязательно",
                maxlength: "Это поле не должно быть больше 20 символов",
                alpha: "Поле должно быть только из букв русского алфавита",
            },
            SecondName: {
                required: "Это поле обязательно",
                maxlength: "Это поле не должно быть больше 20 символов",
                alpha: "Поле должно быть только из букв русского алфавита",
            },
            LastName: {
                required: "Это поле обязательно",
                maxlength: "Это поле не должно быть больше 20 символов",
                alpha: "Поле должно быть только из букв русского алфавита",
            },
            Email: {
                required: "Это поле обязательно",
                email: "Укажите правильный адрес почты"
            },
            PhoneNumber: {
                required: "Это поле обязательно",
                maxlength: "Это поле не должно быть больше 30 символов",
                digits: "Это поле должно содержать только цифры"
            },
        },
        errorClass: "invalid",
        submitHandler: function (form, event) {
            event.preventDefault();

            let Name = $(form).find('#Name').val();
            let SecondName = $(form).find('#SecondName').val();
            let LastName = $(form).find('#LastName').val();
            let PhoneNumber = $(form).find('#PhoneNumber').val();
            let Email = $(form).find('#Email').val();
            let Commentary = $(form).find('#Commentary').val();

            $.ajax({
                url: "/SendEmail",
                method: "post",
                dataType: "json",
                data: {
                    Name: Name,
                    SecondName: SecondName,
                    LastName: LastName,
                    PhoneNumber: PhoneNumber,
                    Email: Email,
                    Commentary: Commentary
                },
                success: function (e) {
                    console.log(e);
                    $('.modal').modal('hide');
                    $('textarea').val('');
                    $('input').val('');
                },
            });
        },
    });
});
