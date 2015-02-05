// Morris.js Charts sample data for SB Admin template

$(function() {

    // Area Chart
    var seller =$('#sellerId');
    var seller_id= seller.val();
    //alert(seller_id);
   // console.log(sellerId);
    var chart1 =$('#chartData1').val();
     array1= chart1.split(',');
    var chart2 =$('#chartData2').val();
     array2= chart2.split(',');
    var chart3 =$('#chartData3').val();

     var pname1 =$('#pname1').val();
 var pname2 =$('#pname2').val();
var pname3=$('#pname3').val();

     array3= chart3.split(',');
    console.log(array1);
    console.log(array2);
    console.log(array3);
  //  var seller_id= seller.val();
var d_1 = new Date();
 d_1.setDate(d_1.getDate());

var d_5 = new Date();
 d_5.setDate(d_5.getDate()-4);

 var d_4 = new Date();
 d_4.setDate(d_4.getDate()-3);

 var d_3 = new Date();
 d_3.setDate(d_3.getDate()-2);

 var d_2 = new Date();
 d_2.setDate(d_2.getDate()-1);

 
console.log(d_1);
console.log(d_2);
console.log(d_3);
console.log(d_4);
console.log(d_5);

function formatDate(date) {
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var ampm = hours >= 12 ? 'pm' : 'am';
  hours = hours % 12;
  hours = hours ? hours : 12; // the hour '0' should be '12'
  minutes = minutes < 10 ? '0'+minutes : minutes;
  var strTime = hours + ':' + minutes + ' ' + ampm;
  return date.getFullYear() + "-"+  date.getMonth()+1 + "-" + date.getDate();
}


console.log(formatDate(d_1));

console.log(formatDate(d_2));
console.log(formatDate(d_3));
console.log(formatDate(d_4));
console.log(formatDate(d_5));

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: formatDate(d_1),
            iphone: array1[0],
            ipad: array2[0],
            itouch: array3[0]
        }, {
            period: formatDate(d_2),
            iphone: array1[1],
            ipad: array2[1],
            itouch: array3[1]
        }, {
            period: formatDate(d_3),
            iphone: array1[2],
            ipad: array2[2],
            itouch: array3[2]
        }, {
            period: formatDate(d_4),
            iphone: array1[3],
            ipad: array2[3],
            itouch: array3[3]
        }, {
            period: formatDate(d_5),
            iphone: array1[4],
            ipad: array2[4],
            itouch: array3[4]
        }],
        xkey: 'period',
        ykeys: ['iphone', 'ipad', 'itouch'],
        labels: [pname1, pname2, pname3],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    // Donut Chart
    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true
    });

    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [{
            d: '2012-10-01',
            visits: 802
        }, {
            d: '2012-10-02',
            visits: 783
        }, {
            d: '2012-10-03',
            visits: 820
        }, {
            d: '2012-10-04',
            visits: 839
        }, {
            d: '2012-10-05',
            visits: 792
        }, {
            d: '2012-10-06',
            visits: 859
        }, {
            d: '2012-10-07',
            visits: 790
        }, {
            d: '2012-10-08',
            visits: 1680
        }, {
            d: '2012-10-09',
            visits: 1592
        }, {
            d: '2012-10-10',
            visits: 1420
        }, {
            d: '2012-10-11',
            visits: 882
        }, {
            d: '2012-10-12',
            visits: 889
        }, {
            d: '2012-10-13',
            visits: 819
        }, {
            d: '2012-10-14',
            visits: 849
        }, {
            d: '2012-10-15',
            visits: 870
        }, {
            d: '2012-10-16',
            visits: 1063
        }, {
            d: '2012-10-17',
            visits: 1192
        }, {
            d: '2012-10-18',
            visits: 1224
        }, {
            d: '2012-10-19',
            visits: 1329
        }, {
            d: '2012-10-20',
            visits: 1329
        }, {
            d: '2012-10-21',
            visits: 1239
        }, {
            d: '2012-10-22',
            visits: 1190
        }, {
            d: '2012-10-23',
            visits: 1312
        }, {
            d: '2012-10-24',
            visits: 1293
        }, {
            d: '2012-10-25',
            visits: 1283
        }, {
            d: '2012-10-26',
            visits: 1248
        }, {
            d: '2012-10-27',
            visits: 1323
        }, {
            d: '2012-10-28',
            visits: 1390
        }, {
            d: '2012-10-29',
            visits: 1420
        }, {
            d: '2012-10-30',
            visits: 1529
        }, {
            d: '2012-10-31',
            visits: 1892
        }, ],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'd',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['visits'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Visits'],
        // Disables line smoothing
        smooth: false,
        resize: true
    });

    // Bar Chart
    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            device: 'iPhone',
            geekbench: 136
        }, {
            device: 'iPhone 3G',
            geekbench: 137
        }, {
            device: 'iPhone 3GS',
            geekbench: 275
        }, {
            device: 'iPhone 4',
            geekbench: 380
        }, {
            device: 'iPhone 4S',
            geekbench: 655
        }, {
            device: 'iPhone 5',
            geekbench: 1571
        }],
        xkey: 'device',
        ykeys: ['geekbench'],
        labels: ['Geekbench'],
        barRatio: 0.4,
        xLabelAngle: 35,
        hideHover: 'auto',
        resize: true
    });


});
