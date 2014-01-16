/**
 * Created by masaud on 1/16/14.
 */
$(document).ready(function() {
    //Get context with jQuery - using jQuery's .get() method.
    var ctx = $("#myChart").get(0).getContext("2d");

    var data = {
        labels : ["January","February","March","April","May","June","July"],
        datasets : [
            {
                fillColor : "#c9302c",
                strokeColor : "#c9302c",
                data : [4,9,12,10,6,5,10]
            }
        ]
    };

    new Chart(ctx).Bar(data);


});
