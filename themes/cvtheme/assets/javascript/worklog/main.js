/**
 * Created by petervandam on 13/01/16.
 */
$(function() {

    $('.save').on('click', function() {
        saveData();
    });
    
    $('input, select').blur(function() {
        saveData();   
    });
    
    $('.clear').on('click', function() {
        localStorage.removeItem('bookerForm');
        localStorage.removeItem('bookerDate');
        window.location.reload(false); 
    });
    
    // Load info
    var previousData = localStorage.getItem('bookerForm');
    
    if (previousData !== null) {
         $.each(decodeURIComponent(previousData).split('&'), function (index, elem) {
           var vals = elem.split('=');
           $("[name='" + vals[0] + "']").val(vals[1]);
        });
        
        $('.updateDate').html(localStorage.getItem('bookerDate'));
    }
    
    
    function saveData()
    {
        var data = $('#booker').serialize();
        var d = new Date();
        
        localStorage.setItem('bookerForm', data);
        localStorage.setItem('bookerDate', d.toLocaleTimeString());
        
        $('.updateDate').html(d.toLocaleTimeString());
    }
      
});
