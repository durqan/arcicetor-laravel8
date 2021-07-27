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

    $('form').validate({
        onfocusout: false,
        rules: {
            Name: 'required',
            LastName: 'required',
            SecondName: 'required',
            Email: {
                email: true,
                required: true,
            },
        },
        messages: {
            Name: 'Это поле обязательно',
            LastName: 'Это поле обязательно',
            SecondName: 'Это поле обязательно',
            Email: {
                email: 'Введите почту в формате name@example.ru(com)',
                required: 'Это поле обязательно',
            },
        },
        errorClass: 'invalid',
    });

    $('form').on('submit', function (e) {
        e.preventDefault();
        let Name = $('#Name').val();
        let SecondName = $('#SecondName').val();
        let LastName = $('#LastName').val();
        let PhoneNumber = $('#PhoneNumber').val();
        let Email = $('#Email').val();
        let Commentary = $('#Commentary').val();

        $.ajax({
            url: "/SendEmail",
            method: "post",
            data: {
                Name: Name,
                SecondName: SecondName,
                LastName: LastName,
                PhoneNumber: PhoneNumber,
                Email: Email,
                Commentary: Commentary
            },
            success: function (e) {
                $('.modal').modal('hide');
                $('textarea').val('');
                $('input').val('');
            }
        });
    });
});
