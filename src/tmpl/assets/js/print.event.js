/**
 * Created by Farhan Wazir on 4/5/2017.
 *
 * Thanks for TJ Van Toll tutorial for handling print events.
 * URL: https://www.tjvantoll.com/2012/06/15/detecting-print-requests-with-javascript
 */
(function() {
    var beforePrint = function() {
        console.log('Plugin-ComplainPrint initialize printing request. Good luck!');
    };
    var afterPrint = function() {
        console.log('Plugin-ComplainPrint print request completed.');
        window.close();
    };

    if (window.matchMedia) {
        var mediaQueryList = window.matchMedia('print');
        mediaQueryList.addListener(function(mql) {
            if (mql.matches) {
                beforePrint();
            }/* else { //It is not support in chrome
             afterPrint();
             }*/
        });
    }

    window.onbeforeprint = beforePrint;
    window.onafterprint = afterPrint;
}());