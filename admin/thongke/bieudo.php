<div class="row">
<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Danh mục', 'Hours per Day'],
  <?php
    $tong_dm= count($listhongke);
    $i=1;
    foreach($listhongke as $thongke){
        extract($thongke);
        if($i==$tong_dm)
            $phay="";
        else
            $phay=",";
        echo "['".$thongke['tendm']."', ".$thongke['countsp']."]".$phay;
        $i+=1;
    }
  ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Thống kê sản phẩm theo danh mục', 'width':1110, 'height':800};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</div>
