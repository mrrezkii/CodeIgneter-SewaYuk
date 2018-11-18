( function ( $ ) {
    "use strict";

        try {
    var ctx = document.getElementById( "JenisKelamin" );
    var JenisKelamin = new Chart( ctx, {
        type: 'pie',
        data: {
            datasets: [
                {

                    data : [60,40],
                    backgroundColor: [
                                    'rgb(0, 188, 212)',
                                    'rgb(76, 175, 80)'      
                                     ],
                    
                    borderWidth: 2
                            
                },
               
                        ],
           labels : ['Female','Male']
        },
        options: {
            legend: {
            display: false
            },
            responsive: true,
             tooltips: {
             enabled: false
             },
            hover: {
                mode: 'nearest',
                intersect: true
            },

            pieceLabel: {
                render: 'percentage',
                fontColor: 'white',
                precision: 2
              }

        }


    } );

       } catch (error) {}

} ) ( jQuery );
$(document).ready(function(){

    $.ajax({
      url:'<?php echo site_url("admin/get_chart_data"); ?>',
      success:function(response)
      {
        var data = [];
    
        for (var i = 0; i < response.length; i++) {
          data.push(response[i].reply_message);
         }
    
    
          var ctx = document.getElementById("myChart").getContext('2d');
          var myChart = new Chart(ctx, {
              type: 'pie',
              data: {
                  labels: ["Yes", "No"],
                  datasets: [{
                      label: '# of Votes',
                      data: data,
                      backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
    
                      ],
                      borderColor: [
                          'rgba(255,99,132,1)',
                          'rgba(54, 162, 235, 1)',
                      ],
                      borderWidth: 2
                  }]
              },
    
          });
    
    
      }
    });
    
    }); 