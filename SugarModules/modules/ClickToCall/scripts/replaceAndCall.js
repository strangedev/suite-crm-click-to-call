
var phones = $('[type=phone]');

for (var i = 0; i < phones.length; i++) {

    var phone = $(phones[i]);
    var callerButton = $(phone).attr('caller-button');

    if (callerButton === undefined) {

        var number = phone.text().trim().replace(" ", "");

        phone.append('<a href="tel://'+ number +'"><img src="/themes/SuiteP/images/Calls.svg" alt="click-to-call" class="click-to-call"/></a>');
        $(phone).attr('caller-button', true);

    }

}
