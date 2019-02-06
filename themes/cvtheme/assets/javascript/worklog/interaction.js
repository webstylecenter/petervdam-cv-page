/**
 * Created by petervandam on 24/01/16.
 */

function enableNextRow(nr) {
    nr++;
    enableRow(nr);
}

function enableRow(nr) {
    $('#row'+nr).find('*').each(function() {
        $(this).prop('disabled', false);
    });
}

function updateTime(el, nr) {
    var selectedTime = $(el).val();    
    setNextStartTime(nr, selectedTime);
    updateAmountOfTime(nr);
    enableNextRow(nr);
}

function setNextStartTime(nr, selectedTime) {
    var timeInfo = selectedTime.split(':');
    var hour = timeInfo[0];
    var minute = timeInfo[1];
    nr++;

    if ($('#starttijd'+nr).val() == '09:00') {
    
        $('#starttijd'+nr).val(selectedTime);

        // Set next time
        minute = parseInt(minute) + 15;
        if (minute == 60) {
            var time = (parseInt(hour)+1)+':00';
        } else {
            var time = hour+':'+minute;
        }

        $('#eindtijd'+nr).val(time);
        updateAmountOfTime(nr);
    }
}

function updateAmountOfTime(nr) {
    var start = $('#starttijd'+nr).val();
    var eind = $('#eindtijd'+nr).val();
    var time = calculateTime(start, eind);
    $('#time'+nr).val(time);
}
