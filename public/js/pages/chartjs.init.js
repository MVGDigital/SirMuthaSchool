var ctx1=document.getElementById("lineChart").getContext("2d"),myChart=(Chart.defaults.font.family="Be Vietnam Pro",new Chart(ctx1,{type:"line",data:{labels:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],datasets:[{label:"Monthly Report",data:[12,19,13,9,12,11,12,19,13,9,12,11],backgroundColor:["#22c55e"],borderColor:["#22c55e"],borderWidth:2,borderDash:[3],borderJoinStyle:"round",borderCapStyle:"round",pointBorderColor:"#22c55e",pointRadius:3,pointBorderWidth:1,tension:.3},{label:"Monthly Report",data:[8,12,15,11,8,14,16,13,10,7,19,16],backgroundColor:["#fac146"],borderColor:["#fac146"],borderWidth:2,borderDash:[0],borderJoinStyle:"round",borderCapStyle:"round",pointBorderColor:"#fac146",pointRadius:3,pointBorderWidth:1,tension:.3}]},options:{maintainAspectRatio:!1,plugins:{legend:{labels:{color:"#7c8ea7",font:{family:"Be Vietnam Pro"}}}},scales:{y:{beginAtZero:!0,beginAtZero:!0,ticks:{callback:function(e,r,o){return"$"+e},color:"#7c8ea7"},grid:{drawBorder:"border",color:"rgba(132, 145, 183, 0.15)",borderDash:[3],borderColor:"rgba(132, 145, 183, 0.15)"}},x:{ticks:{color:"#7c8ea7"},grid:{display:!1,color:"rgba(132, 145, 183, 0.09)",borderDash:[3],borderColor:"rgba(132, 145, 183, 0.09)"}}}}})),ctx2=document.getElementById("bar").getContext("2d"),myChart=(Chart.defaults.font.family="Be Vietnam Pro",new Chart(ctx2,{type:"bar",data:{labels:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],datasets:[{label:"Monthly Report",data:[12,19,13,9,12,11,12,19,13,9,12,11],borderRadius:100,borderSkipped:!1,backgroundColor:"#00a6cb",borderColor:"#00a6cb",borderWidth:1,indexAxis:"x",barThickness:15,grouped:!0,maxBarThickness:9,barPercentage:50},{label:"Monthly Report",data:[8,12,15,11,8,14,16,13,10,7,19,16],borderRadius:100,borderSkipped:!1,backgroundColor:"#fac146",borderColor:"#fac146",borderWidth:1,indexAxis:"x",barThickness:15,grouped:!0,maxBarThickness:9}]},options:{maintainAspectRatio:!1,responsive:!0,plugins:{legend:{position:"top",labels:{color:"#7c8ea7",font:{family:"Be Vietnam Pro"}}},title:{display:!1,text:"Chart.js Bar Chart"}},scales:{y:{beginAtZero:!0,beginAtZero:!0,ticks:{callback:function(e,r,o){return"$"+e},color:"#7c8ea7"},grid:{drawBorder:"border",color:"rgba(132, 145, 183, 0.15)",borderDash:[3],borderColor:"rgba(132, 145, 183, 0.15)"}},x:{ticks:{color:"#7c8ea7"},grid:{display:!1,color:"rgba(132, 145, 183, 0.09)",borderDash:[3],borderColor:"rgba(132, 145, 183, 0.09)"}}}}})),ctx3=document.getElementById("doughnut").getContext("2d"),myChart=(Chart.defaults.font.family="Be Vietnam Pro",new Chart(ctx3,{type:"doughnut",data:{labels:["Desktops","Laptop","Tablets","Mobiles"],datasets:[{data:[80,50,100,121],backgroundColor:["#f67f7f","#7777f0","#fac146","#22c55e"],cutout:100,radius:100,borderColor:"transparent",borderRadius:0,hoverBackgroundColor:["#4d79f6","#ff5da0","#e0e7fd","#4ac7ec"]}]},options:{maintainAspectRatio:!1,plugins:{legend:{labels:{color:"#7c8ea7",font:{family:"Be Vietnam Pro"}}}}}})),ctx4=document.getElementById("polarArea").getContext("2d"),myChart=(Chart.defaults.font.family="Be Vietnam Pro",new Chart(ctx4,{type:"polarArea",data:{labels:["Desktops","Laptop","Tablets","Mobiles"],datasets:[{data:[80,50,100,121],backgroundColor:["#4d79f6","#ff5da0","#e0e7fd","#4ac7ec"],borderColor:"transparent",hoverBackgroundColor:["#4d79f6","#ff5da0","#e0e7fd","#4ac7ec"]}]},options:{maintainAspectRatio:!1,plugins:{legend:{labels:{color:"#7c8ea7",font:{family:"Be Vietnam Pro"}}}}}})),ctx5=document.getElementById("pie").getContext("2d"),myChart=(Chart.defaults.font.family="Be Vietnam Pro",new Chart(ctx5,{type:"pie",data:{labels:["Desktops","Laptop","Tablets","Mobiles"],datasets:[{data:[80,50,100,121],backgroundColor:["#4d79f6","#ff5da0","#e0e7fd","#4ac7ec"],cutout:0,radius:100,borderColor:"transparent",borderRadius:0,hoverBackgroundColor:["#4d79f6","#ff5da0","#e0e7fd","#4ac7ec"]}]},options:{maintainAspectRatio:!1,plugins:{legend:{labels:{color:"#7c8ea7",font:{family:"Be Vietnam Pro"}}}}}})),ctx6=document.getElementById("radar").getContext("2d"),myChart=(Chart.defaults.font.family="Be Vietnam Pro",new Chart(ctx6,{type:"radar",data:{labels:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],datasets:[{label:"Monthly Report",data:[12,19,13,9,12,11,12,19,13,9,12,11],backgroundColor:["rgba(11, 81, 183, 0.1)"],borderColor:["rgba(11, 81, 183, 1)"],borderWidth:2,borderDash:[3],borderJoinStyle:"round",borderCapStyle:"round",pointBorderColor:"rgba(11, 81, 183, 1)",pointRadius:3,pointBorderWidth:1,tension:.3,fill:!0,hitRadius:5},{label:"Monthly Report",data:[8,12,15,11,8,14,16,13,10,7,19,16],backgroundColor:["rgba(28, 202, 184, 0.1)"],borderColor:["rgba(137, 153, 175, 0.3)"],borderWidth:2,borderDash:[0],borderJoinStyle:"round",borderCapStyle:"round",pointBorderColor:"rgba(137, 153, 175, 0.3)",pointRadius:3,pointBorderWidth:1,tension:.3}]},options:{elements:{line:{borderWidth:3}},maintainAspectRatio:!1,scales:{r:{angleLines:{display:!0,color:"rgba(137, 153, 175, 0.3)",borderDash:[2],borderColor:["rgba(137, 153, 175, 0.3)"]},grid:{color:"rgba(137, 153, 175, 0.3)"}}},plugins:{legend:{labels:{color:"#7c8ea7",font:{family:"Be Vietnam Pro"}}}}}}));