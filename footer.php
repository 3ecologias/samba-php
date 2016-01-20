<?php wp_footer(); ?>
 <script>
  $( document ).ready(function() {
	$("#page-content").show("slide", {
      		direction: "up"
   	}, 2000);
  	$( "#page-load, .close-sobre" ).click(function() {
		$( "#page-content" ).slideToggle("slow");
	}, function(){
  		$( "#page-content" ).slideToggle("slow");
	});

	$( "#page-contato, .close-contato" ).click(function() {
		$( "#page-content-contato" ).slideToggle("slow");
	}, function(){
  		$( "#page-content-contato" ).slideToggle("slow");
	});

  });
  </script>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>

<script>
  $(function () {
    $('#myTabs a:last').tab('show')
  })
</script>

<!--
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>
<script>
Morris.Donut({
  element: 'chart1',
  data: [
    {label: "Informaçao", value: 12},
    {label: "Outra", value: 30},
    {label: "Mais uma", value: 20}
  ]
});
</script>

<script>
Morris.Area({
  element: 'chart2',
  data: [
    { y: '2006', a: 100, b: 90 },
    { y: '2007', a: 75,  b: 65 },
    { y: '2008', a: 50,  b: 40 },
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 50,  b: 40 },
    { y: '2011', a: 75,  b: 65 },
    { y: '2012', a: 100, b: 90 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Series A', 'Series B']
});
</script>

<script>
Morris.Bar({
  element: 'chart3',
  data: [
    { y: '2006', a: 100, b: 90 },
    { y: '2007', a: 75,  b: 65 },
    { y: '2008', a: 50,  b: 40 },
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 50,  b: 40 },
    { y: '2011', a: 75,  b: 65 },
    { y: '2012', a: 100, b: 90 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Series A', 'Series B']
});
</script>
-->
</body>
</html>