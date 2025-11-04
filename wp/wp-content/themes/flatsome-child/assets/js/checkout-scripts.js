jQuery(document).ready(function($) {
    let currentStep = 1;

    function showStep(step) {
        $('.step-content').hide();
        $('.step-content[data-step="' + step + '"]').fadeIn();
        $('.step-header').removeClass('active');
        $('.step-header[data-step="' + step + '"]').addClass('active');
        currentStep = step;
    }

    $('.next-step').on('click', function() {
        let nextStep = $(this).data('step');
        let isValid = true;

        if (currentStep === 1) {
            if ($('input[name="delivery_option"]:checked').val() === 'shipping') {
                $('#shipping-form .validate-required input').each(function() {
                    if ($(this).val() === '') {
                        isValid = false;
                        $(this).addClass('invalid');
                    } else {
                        $(this).removeClass('invalid');
                    }
                });
            } else {
                if ($('#pickup_location_select').val() === '') {
                    isValid = false;
                    $('#pickup_location_select').addClass('invalid');
                } else {
                    $('#pickup_location_select').removeClass('invalid');
                }
            }
        }

        if (isValid) {
            showStep(nextStep);
        }
    });

    $('.prev-step').on('click', function() {
        let prevStep = $(this).data('step');
        showStep(prevStep);
    });

    $('input[name="delivery_option"]').on('change', function() {
        if ($(this).val() === 'shipping') {
            $('#shipping-form').slideDown();
            $('#pickup-form').slideUp();
        } else {
            $('#shipping-form').slideUp();
            $('#pickup-form').slideDown();
        }
    });

    $('#pickup_location_select').on('change', function() {
        let locationId = $(this).val();
        let locations = checkout_scripts_vars.pickup_locations;
        if (locationId !== '' && locations[locationId]) {
            let details = '<strong>' + locations[locationId].name + '</strong><br>' +
                          locations[locationId].address + '<br>' +
                          locations[locationId].commune + ', ' + locations[locationId].region + '<br>' +
                          'Horario: ' + locations[locationId].hours;
            $('#pickup_location_details').html(details).slideDown();
        } else {
            $('#pickup_location_details').slideUp().html('');
        }
    });
});
