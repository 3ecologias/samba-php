<?php get_header('single'); ?>

<?php if(have_posts()) : the_post(); ?>

<!-- Bootstrap NavBar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">go mobile</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
             <a class="navbar-brand" href="<?php echo home_url('/'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>      
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="nav navbar-nav navbar-left post-title">
                <h4><?php the_title(); ?></h4>
            </div>
            <ul class="nav nav-tabs navbar-right" id="myTabs">
                <li class="active"> <a id="universa" href="#universalizacao" data-toggle="tab" rel="tooltip" data-placement="bottom" title="Universalização do Acesso">&nbsp;</a></li>
                <li> <a id="tecnoapropriada" href="#tecnologia-apropriada" data-toggle="tab" rel="tooltip" data-placement="bottom" title="Tecnologia Apropriada">&nbsp;</a></li>
                <li> <a id="qualiserv" href="#qualidade-servicos" data-toggle="tab" rel="tooltip" data-placement="bottom" title="Qualidade dos Serviços Prestados">&nbsp;</a></li>
                <li> <a id="adequa" href="#adequacao" data-toggle="tab" rel="tooltip" data-placement="bottom" title="Adequação">&nbsp;</a></li>
                <li> <a id="interset" href="#intersetorialidade" data-toggle="tab" rel="tooltip" data-placement="bottom" title="Intersetorialidade">&nbsp;</a></li>
                <li> <a id="indicad" href="#indicadores-eficiencia" data-toggle="tab" rel="tooltip" data-placement="bottom" title="Indicadores de Eficiência">&nbsp;</a></li>
                <li> <a id="sustenta" href="#sustentabilidade-financeira" data-toggle="tab" rel="tooltip" data-placement="bottom" title="Sustentabilidade Financeira">&nbsp;</a></li>
                <li> <a id="participa" href="#participacao-controle" data-toggle="tab" rel="tooltip" data-placement="bottom" title="Participação e Controle Social">&nbsp;</a></li>
                <?php display_related_posts_via_categories() ?>
                <li class="date"><span class="lsf">&#xE12b;</span> <?php the_date(); ?></li>
                <li><button class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg">Relatório</button></li>
            </ul>
        </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- End navbar -->

<article id="content" class="single-post">
    <header class="single-post-header" class="clearfix">
        

    </header>

   <section class="content">
        <div class="container_dados">
            <?php
            global $qa1_global;
            $fields = get_fields(); 
            if( $fields ) {
                foreach( $fields as $field_name => $value ) {
                    $field = get_field_object($field_name, false, array('load_value' => true));

                    if ($field['name'] == "pa1") {
                        $pa1_instruction = $field['instructions'];
                        $pa1_value = $field['value'];
                        $pa1_append = $field['append'];
                    }
                    if ($field['name'] == "pa2") {
                        $pa2_instruction = $field['instructions'];
                        $pa2_value = $field['value'];
                        $pa2_append = $field['append'];
                    }
                    if ($field['name'] == "pa3") {
                        $pa3_instruction = $field['instructions'];
                        $pa3_value = $field['value'];
                        $pa3_append = $field['append'];
                    }       
                    if ($field['name'] == "pt1") {
                        $pt1_instruction = $field['instructions'];
                        $pt1_value = $field['value'];
                        $pt1_append = $field['append'];
                    }
                    if ($field['name'] == "pu1") {
                        $pu1_instruction = $field['instructions'];
                        $pu1_value = $field['value'];
                        $pu1_append = $field['append'];
                    }
                    if ($field['name'] == "pe1") {
                        $pe1_instruction = $field['instructions'];
                        $pe1_value = $field['value'];
                        $pe1_append = $field['append'];
                    }
                    if ($field['name'] == "pe2") {
                        $pe2_instruction = $field['instructions'];
                        $pe2_value = $field['value'];
                        $pe2_append = $field['append'];
                    }
                    if ($field['name'] == "pe3") {
                        $pe3_instruction = $field['instructions'];
                        $pe3_value = $field['value'];
                        $pe3_append = $field['append'];
                    }
                    if ($field['name'] == "pe4") {
                        $pe4_instruction = $field['instructions'];
                        $pe4_value = $field['value'];
                        $pe4_append = $field['append'];
                    }
                    if ($field['name'] == "pr1") {
                        $pr1_instruction = $field['instructions'];
                        $pr1_value = $field['value'];
                        $pr1_append = $field['append'];
                    }
                    if ($field['name'] == "pr2") {
                        $pr2_instruction = $field['instructions'];
                        $pr2_value = $field['value'];
                        $pr2_append = $field['append'];
                    }
                    if ($field['name'] == "ld1") {
                        $ld1_instruction = $field['instructions'];
                        $ld1_value = $field['value'];
                        $ld1_append = $field['append'];
                    }
                    if ($field['name'] == "lt1") {
                        $lt1_instruction = $field['instructions'];
                        $lt1_value = $field['value'];
                        $lt1_append = $field['append'];
                    }
                    if ($field['name'] == "fc1") {
                        $fc1_instruction = $field['instructions'];
                        $fc1_value = $field['value'];
                        $fc1_append = $field['append'];
                    }   
                    if ($field['name'] == "fv1") {
                        $fv1_instruction = $field['instructions'];
                        $fv1_value = $field['value'];
                        $fv1_append = $field['append'];
                    }
                    if ($field['name'] == "fq1") {
                        $fq1_instruction = $field['instructions'];
                        $fq1_value = $field['value'];
                        $fq1_append = $field['append'];
                    }
                    if ($field['name'] == "fq2") {
                        $fq2_instruction = $field['instructions'];
                        $fq2_value = $field['value'];
                        $fq2_append = $field['append'];
                    }
                    if ($field['name'] == "fd1") {
                        $fd1_instruction = $field['instructions'];
                        $fd1_value = $field['value'];
                        $fd1_append = $field['append'];
                    }
                    if ($field['name'] == "fd2") {
                        $fd2_instruction = $field['instructions'];
                        $fd2_value = $field['value'];
                        $fd2_append = $field['append'];
                    }
                    if ($field['name'] == "fv2") {
                        $fv2_instruction = $field['instructions'];
                        $fv2_value = $field['value'];
                        $fv2_append = $field['append'];
                    }
                    if ($field['name'] == "fv3") {
                        $fv3_instruction = $field['instructions'];
                        $fv3_value = $field['value'];
                        $fv3_append = $field['append'];
                    }
                    if ($field['name'] == "fh1") {
                        $fh1_instruction = $field['instructions'];
                        $fh1_value = $field['value'];
                        $fh1_append = $field['append'];
                    }
                    if ($field['name'] == "fq3") {
                        $fq3_instruction = $field['instructions'];
                        $fq3_value = $field['value'];
                        $fq3_append = $field['append'];
                    }
                    if ($field['name'] == "fv4") {
                        $fv4_instruction = $field['instructions'];
                        $fv4_value = $field['value'];
                        $fv4_append = $field['append'];
                    }       
                    if ($field['name'] == "nr1") {
                        $nr1_instruction = $field['instructions'];
                        $nr1_value = $field['value'];
                        $nr1_prepend = $field['prepend'];
                    }   
                    if ($field['name'] == "nt1") {
                        $nt1_instruction = $field['instructions'];
                        $nt1_value = $field['value'];
                        $nt1_prepend = $field['prepend'];
                    }
                    if ($field['name'] == "nr2") {
                        $nr2_instruction = $field['instructions'];
                        $nr2_value = $field['value'];
                        $nr2_prepend = $field['prepend'];
                    }
                    if ($field['name'] == "na1") {
                        $na1_instruction = $field['instructions'];
                        $na1_value = $field['value'];
                        $na1_prepend = $field['prepend'];
                    }
                    if ($field['name'] == "nr3") {
                        $nr3_instruction = $field['instructions'];
                        $nr3_value = $field['value'];
                        $nr3_prepend = $field['prepend'];
                    }
                    if ($field['name'] == "nr4") {
                        $nr4_instruction = $field['instructions'];
                        $nr4_value = $field['value'];
                        $nr4_prepend = $field['prepend'];
                    }          
                    if ($field['name'] == "a10") {
                        $a10_label = $field['label'];
                        $a10_value = $field['value'];
                    }   
                    if ($field['name'] == "aa10") {
                        $aa10_label = $field['label'];
                        $aa10_value = $field['value'];
                    }   
                    if ($field['name'] == "aaa10") {
                        $aaa10_label = $field['label'];
                        $aaa10_value = $field['value'];
                    }   
                    if ($field['name'] == "aaaa10") {
                        $aaaa10_label = $field['label'];
                        $aaaa10_value = $field['value'];
                    }   
                    if ($field['name'] == "b10") {
                        $b10_label = $field['label'];
                        $b10_value = $field['value'];
                    }   
                    if ($field['name'] == "bb10") {
                        $field = get_field_object('bb10'); 
                        $bb10_array = get_field('bb10');
                        $bb10_label = $field['label'];
                    }   
                    if ($field['name'] == "c10") {
                        $c10_label = $field['label'];
                        $c10_value = $field['value'];
                    }   
                    if ($field['name'] == "d10") {
                        $d10_label = $field['label'];
                        $d10_value = $field['value'];
                    }
                    if ($field['name'] == "sq1") {
                        $sq1_instruction = $field['instructions'];
                        $sq1_value = $field['value'];
                        $sq1_append = $field['append'];
                    }
                    if ($field['name'] == "sq2") {
                        $sq2_instruction = $field['instructions'];
                        $sq2_value = $field['value'];
                        $sq2_append = $field['append'];
                    }
                    if ($field['name'] == "sq3") {
                        $sq3_instruction = $field['instructions'];
                        $sq3_value = $field['value'];
                        $sq3_append = $field['append'];
                    }
                    if ($field['name'] == "sq4") {
                        $sq4_instruction = $field['instructions'];
                        $sq4_value = $field['value'];
                        $sq4_append = $field['append'];
                    }
                    if ($field['name'] == "sq5") {
                        $sq5_instruction = $field['instructions'];
                        $sq5_value = $field['value'];
                        $sq5_append = $field['append'];
                    }
                    if ($field['name'] == "sq6") {
                        $sq6_instruction = $field['instructions'];
                        $sq6_value = $field['value'];
                        $sq6_append = $field['append'];
                    }
                    if ($field['name'] == "sq7") {
                        $sq7_instruction = $field['instructions'];
                        $sq7_value = $field['value'];
                        $sq7_append = $field['append'];
                    }
                    if ($field['name'] == "sq8") {
                        $sq8_instruction = $field['instructions'];
                        $sq8_value = $field['value'];
                        $sq8_append = $field['append'];
                    }
                    if ($field['name'] == "sq9") {
                        $sq9_instruction = $field['instructions'];
                        $sq9_value = $field['value'];
                        $sq9_append = $field['append'];
                    }
                    if ($field['name'] == "sn1") {
                        $sn1_instruction = $field['instructions'];
                        $sn1_value = $field['value'];
                        $sn1_append = $field['append'];
                    }
                    if ($field['name'] == "sh1") {
                        $sh1_instruction = $field['instructions'];
                        $sh1_value = $field['value'];
                        $sh1_append = $field['append'];
                    }
                    if ($field['name'] == "sn2") {
                        $sn2_instruction = $field['instructions'];
                        $sn2_value = $field['value'];
                        $sn2_append = $field['append'];
                    }
                    if ($field['name'] == "sn3") {
                        $sn3_instruction = $field['instructions'];
                        $sn3_value = $field['value'];
                        $sn3_append = $field['append'];
                    }
                    if ($field['name'] == "sd1") {
                        $sd1_instruction = $field['instructions'];
                        $sd1_value = $field['value'];
                        $sd1_append = $field['append'];
                    }
                    if ($field['name'] == "sn4") {
                        $sn4_instruction = $field['instructions'];
                        $sn4_value = $field['value'];
                        $sn4_append = $field['append'];
                    }
                    if ($field['name'] == "se1") {
                        $se1_instruction = $field['instructions'];
                        $se1_value = $field['value'];
                        $se1_append = $field['append'];
                    }
                    if ($field['name'] == "sm1") {
                        $sm1_instruction = $field['instructions'];
                        $sm1_value = $field['value'];
                        $sm1_append = $field['append'];
                    }
                    if ($field['name'] == "sm2") {
                        $sm2_instruction = $field['instructions'];
                        $sm2_value = $field['value'];
                        $sm2_append = $field['append'];
                    }
                    if ($field['name'] == "sn5") {
                        $sn5_instruction = $field['instructions'];
                        $sn5_value = $field['value'];
                        $sn5_append = $field['append'];
                    }
                    if ($field['name'] == "sn6") {
                        $sn6_instruction = $field['instructions'];
                        $sn6_value = $field['value'];
                        $sn6_append = $field['append'];
                    }
                    if ($field['name'] == "sn7") {
                        $sn7_instruction = $field['instructions'];
                        $sn7_value = $field['value'];
                        $sn7_append = $field['append'];
                    }
                    if ($field['name'] == "sn8") {
                        $sn8_instruction = $field['instructions'];
                        $sn8_value = $field['value'];
                        $sn8_append = $field['append'];
                    }
                    if ($field['name'] == "sn9") {
                        $sn9_instruction = $field['instructions'];
                        $sn9_value = $field['value'];
                        $sn9_append = $field['append'];
                    }
                    if ($field['name'] == "sn10") {
                        $sn10_instruction = $field['instructions'];
                        $sn10_value = $field['value'];
                        $sn10_append = $field['append'];
                    }
                    if ($field['name'] == "sn11") {
                        $sn11_instruction = $field['instructions'];
                        $sn11_value = $field['value'];
                        $sn11_append = $field['append'];
                    }
                    if ($field['name'] == "sn12") {
                        $sn12_instruction = $field['instructions'];
                        $sn12_value = $field['value'];
                        $sn12_append = $field['append'];
                    }
                    if ($field['name'] == "sn13") {
                        $sn13_instruction = $field['instructions'];
                        $sn13_value = $field['value'];
                        $sn13_append = $field['append'];
                    }
                    if ($field['name'] == "sn14") {
                        $sn14_instruction = $field['instructions'];
                        $sn14_value = $field['value'];
                        $sn14_append = $field['append'];
                    }
                    if ($field['name'] == "sn15") {
                        $sn15_instruction = $field['instructions'];
                        $sn15_value = $field['value'];
                        $sn15_append = $field['append'];
                    }
                    if ($field['name'] == "sc1") {
                        $sc1_instruction = $field['instructions'];
                        $sc1_value = $field['value'];
                        $sc1_append = $field['append'];
                    }
                    if ($field['name'] == "sc2") {
                        $sc2_instruction = $field['instructions'];
                        $sc2_value = $field['value'];
                        $sc2_append = $field['append'];
                    }
                    if ($field['name'] == "sc3") {
                        $sc3_instruction = $field['instructions'];
                        $sc3_value = $field['value'];
                        $sc3_append = $field['append'];
                    }
                    if ($field['name'] == "sc4") {
                        $sc4_instruction = $field['instructions'];
                        $sc4_value = $field['value'];
                        $sc4_append = $field['append'];
                    }
                    if ($field['name'] == "sq7") {
                        $sq7_instruction = $field['instructions'];
                        $sq7_value = $field['value'];
                        $sq7_append = $field['append'];
                    }
                    if ($field['name'] == "sq8") {
                        $sq8_instruction = $field['instructions'];
                        $sq8_value = $field['value'];
                        $sq8_append = $field['append'];
                    }
                    if ($field['name'] == "sq10") {
                        $sq10_instruction = $field['instructions'];
                        $sq10_value = $field['value'];
                        $sq10_append = $field['append'];
                    }
                    if ($field['name'] == "sq12") {
                        $sq12_instruction = $field['instructions'];
                        $sq12_value = $field['value'];
                        $sq12_append = $field['append'];
                    }
                    if ($field['name'] == "sv1") {
                        $sv1_instruction = $field['instructions'];
                        $sv1_value = $field['value'];
                        $sv1_append = $field['append'];
                    }
                    if ($field['name'] == "ss1") {
                        $ss1_instruction = $field['instructions'];
                        $ss1_value = $field['value'];
                        $ss1_append = $field['append'];
                    }
                    if ($field['name'] == "st4") {
                        $st4_instruction = $field['instructions'];
                        $st4_value = $field['value'];
                        $st4_append = $field['append'];
                    }
                    if ($field['name'] == "st5") {
                        $st5_instruction = $field['instructions'];
                        $st5_value = $field['value'];
                        $st5_append = $field['append'];
                    }
                    if ($field['name'] == "qt8") {
                        $qt8_instructions = $field['instructions'];
                        $qt8_value = $field['value'];
                        $qt8_append = $field['append'];
                    }
                    if ($field['name'] == "qt8_quais") {
                        $qt8_quais_label = $field['label'];
                        $qt8_quais_value = $field['value'];
                    }
                    if ($field['name'] == "qt9") {
                        $qt9_instructions = $field['instructions'];
                        $qt9_value = $field['value'];
                        $qt9_append = $field['append'];
                    }
                    if ($field['name'] == "qt10") {
                        $qt10_instructions = $field['instructions'];
                        $qt10_value = $field['value'];
                        $qt10_append = $field['append'];
                    }
                    if ($field['name'] == "qt11") {
                        $qt11_instructions = $field['instructions'];
                        $qt11_value = $field['value'];
                        $qt11_append = $field['append'];
                    }

                    if ($field['name'] == "ae1") {
                        $ae1_instruction = $field['instructions'];
                        $ae1_value = $field['value'];
                        $ae1_append = $field['append'];
                    }
                    if ($field['name'] == "ad1") {
                        $ad1_instruction = $field['instructions'];
                        $ad1_value = $field['value'];
                        $ad1_append = $field['append'];
                    }
                    if ($field['name'] == "av1") {
                        $av1_instruction = $field['instructions'];
                        $av1_value = $field['value'];
                        $av1_append = $field['append'];
                    }
                    if ($field['name'] == "al1") {
                        $al1_instruction = $field['instructions'];
                        $al1_value = $field['value'];
                        $al1_append = $field['append'];
                    }

                    if ($field['name'] == "a7") {
                        $a7_label = $field['label'];
                        $a7_value = $field['value'];
                    }
                    if ($field['name'] == "aa7") {
                        $aa7_label = $field['label'];
                        $aa7_value = $field['value'];
                    }
                    if ($field['name'] == "aaa7") {
                        $aaa7_label = $field['label'];
                        $aaa7_value = $field['value'];
                    }
                    if ($field['name'] == "b7") {
                        $b7_label = $field['label'];
                        $b7_value = $field['value'];
                    }

                    if ($field['name'] == "ta1") {
                        $ta1_label = $field['label'];
                        $ta1_value = $field['value'];
                    }
                    if ($field['name'] == "ta1_descreva") {
                        $ta1_descreva_value = $field['value'];
                    }
                    if ($field['name'] == "te1") {
                        $te1_label = $field['label'];
                        $te1_value = $field['value'];
                    }
                    if ($field['name'] == "te1_descreva") {
                        $te1_descreva_value = $field['value'];
                    }
                    if ($field['name'] == "tr1") {
                        $tr1_label = $field['label'];
                        $tr1_value = $field['value'];
                    }
                    if ($field['name'] == "tr1_descreva") {
                        $tr1_descreva_value = $field['value'];
                    }
                    if ($field['name'] == "tr2") {
                        $tr2_label = $field['label'];
                        $tr2_value = $field['value'];
                        $tr2_instruction = $field['instructions'];
                    }
                    if ($field['name'] == "tr2_descreva") {
                        $tr2_descreva_value = $field['value'];
                    }
                    if ($field['name'] == "td1") {
                        $td1_label = $field['label'];
                        $td1_value = $field['value'];
                    }
                    if ($field['name'] == "td1_descreva") {
                        $td1_descreva_value = $field['value'];
                    }
                    if ($field['name'] == "td2") {
                        $field = get_field_object('td2'); 
                        $td2_array = get_field('td2');
                        $td2_label = $field['label'];
                        $td2_instruction = $field['instructions'];
                    }
                    if ($field['name'] == "td2_descreva") {
                        $td2_descreva_value = $field['value'];
                    }

                    $meses = 12;
                    $ano = 2;   

                    $ua1 = ($pa1_value * 100) / $pt1_value;
                    $ua2 = ($pa2_value * 100) / $pu1_value;
                    $ua3 = ($pa3_value * 100) / $pt1_value;
                    $ue1 = ($pe1_value * 100) / $pt1_value;
                    $ue2 = ($pe2_value * 100) / $pu1_value;
                    $ue3 = ($pe3_value * 100) / $pt1_value;
                    $ue4 = ($pe4_value * 100) / $pu1_value;
                    $ur1 = ($pr1_value * 100) / $pt1_value;
                    $ur2 = ($pr2_value * 100) / $pu1_value;
                    $ud1 = ($ld1_value * 100) / $lt1_value;

                    $ee1 = $fc1_value / $fv1_value;
                    $ep1 = $fq1_value / $fq2_value;
                    $ep2 = ($fd1_value * 100) / $fd2_value;
                    $er1 = ($fv2_value * 100) / $fv3_value;
                    $et1 = ($fh1_value * 100) / $fq3_value;
                    $et2 = ($fv4_value * 100) / $fv3_value;

                    $sf1 = ($nr1_value * 100) / $nt1_value;
                    $sr1 = ($na1_value * 100) / $nr2_value;
                    $sa1 = ($nr3_value * 100) / $nr2_value;
                    $se1 = ($nr4_value * 100) / $nr2_value;

                    $qa1 = ($sq1_value * 100) / $sq2_value;
                    $qa2 = ($sq3_value * 100) / $sq2_value;
                    $qa3 = ($sq4_value * 100) / $sq5_value;
                    $qa4 = ($sq6_value * 100) / $sq5_value;
                    $qa5 = ($sq7_value * 100) / $sq8_value;
                    $qa6 = ($sq9_value * 100) / $sq8_value;
                    $qc1 = $sn1_value / $meses;
                    $qr1 = $sh1_value / $sn2_value;
                    $qr2 = $sh2_value / $sn3_value;
                    $qr3 = $sd1_value / $sn4_value;
                    $qr4 = $sn4_value / $se1_value;
                    $qr1 = $sh1_value / $sn2_value;
                    $qs1 = ($sm1_value * 100) / $sm2_value;
                    $qs2 = $sn5_value / $meses;
                    $qs3 = ($sn6_value * 100) / $sn7_value;
                    $qt1 = ($sn8_value * 100) / $sn9_value;
                    $qt2 = ($sn10_value * 100) / $sn9_value;
                    $qt3 = ($sn11_value * 100) / $sn9_value;
                    $qt4 = ($sn12_value * 100) / $sn9_value;
                    $qt5 = ($sn13_value * 100) / $sn7_value;
                    $qt6 = ($sn14_value * 100) / $sn7_value;
                    $qt7 = $sn15_value / $ano;
                    $qm1 = ($sq7_value * 100) / $sq8_value;
                    $qm2 = ($sv1_value * 100) / $ss1_value;
                    $qm3 = ($st4_value * 100) / $st5_value;

                    $qcc1 = ($sc1_value * 100) / $sc2_value;
                    $qcc2 = ($sc3_value * 100) / $sc4_value;

                }
            }
            ?>



        <div class="tab-content row">
<!-- 
                <div class="tab-pane active" id="post-content">
                    <?php
                        $id = get_the_ID();
                        $p = get_post($id);
                        echo apply_filters('the_content', $p->post_content);
                    ?>
                </div>  -->
                
                <div class="tab-pane active" id="universalizacao">

                    <h3> Universalização do acesso </h3>
                    <!-- Definição de Propriedades -->
                     <?php $ua1_value = number_format($ua1,2,".","."); ?> 
                     <?php $ua2_value = number_format($ua2,2,".","."); ?> 
                     <?php $ua3_value = number_format($ua3,2,".","."); ?>
                     <?php $ue1_value = number_format($ue1,2,".","."); ?>
                     <?php $ue2_value = number_format($ue2,2,".","."); ?>
                     <?php $ue3_value = number_format($ue3,2,".","."); ?>
                     <?php $ue4_value = number_format($ue4,2,".","."); ?> 
                     <?php $ur1_value = number_format($ur1,2,".","."); ?>
                     <?php $ur2_value = number_format($ur2,2,".","."); ?>
                     <?php $ud1_value = number_format($ud1,2,".","."); ?> 
                      
                                
                    <!-- antigo relatorio -->
                    <div>
                        <?php if ( is_user_logged_in() ): ?>

                            <div class="col-md-12"> 
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?php echo $pa1_instruction; ?>
                                                <h4><?php echo number_format($pa1_value,0,".","."); ?> &nbsp; <?php echo $pa1_append; ?> </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo $pa2_instruction; ?>
                                                <h4><?php echo number_format($pa2_value,0,".","."); ?> &nbsp; <?php echo $pa1_append; ?> </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo $pa3_instruction; ?>
                                                <h4><?php echo number_format($pa3_value,0,".","."); ?> &nbsp; <?php echo  $pa3_append; ?> </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo $pt1_instruction; ?>
                                                <h4><?php echo number_format($pt1_value,0,".","."); ?> &nbsp; <?php echo $pt1_append; ?> </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo $pu1_instruction; ?>
                                                <h4><?php echo number_format($pu1_value,0,".","."); ?> &nbsp; <?php echo $pu1_append; ?> </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo $pe1_instruction; ?>
                                                <h4><?php echo number_format($pe1_value,0,".","."); ?> &nbsp; <?php echo $pe1_append; ?> </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo $pe2_instruction; ?>
                                                <h4><?php echo number_format($pe1_value,0,".","."); ?> &nbsp; <?php echo $pe2_append; ?> </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo $pe3_instruction; ?>
                                                <h4><?php echo number_format($pe3_value,0,".","."); ?> &nbsp; <?php echo $pe3_append; ?> </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo $pe4_instruction; ?>
                                                <h4><?php echo number_format($pe4_value,0,".","."); ?> &nbsp; <?php echo $pe4_append; ?> </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo $pr1_instruction; ?>
                                                <h4><?php echo number_format($pr1_value,0,".","."); ?> &nbsp; <?php echo $pr1_append; ?> </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo $pr2_instruction; ?>
                                                <h4><?php echo number_format($pr2_value,0,".","."); ?> &nbsp; <?php echo $pr2_append; ?> </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo $ld1_instruction; ?>
                                                <h4><?php echo number_format($ld1_value,0,".","."); ?> &nbsp; <?php echo $ld1_append; ?> </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo $lt1_instruction; ?>
                                                <h4><?php echo number_format($lt1_value,0,".","."); ?> &nbsp; <?php echo $lt1_append; ?> </h4>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <div class="col-md-12"> 
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td class="abastece">
                                                <h3> Abastecimento de Água </h3>
                                                <div> Índice de abastecimento de água  </div>
                
                                                <h4> <?php echo $ua1_value; ?> % </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div> Índice de atendimento de água à população urbana  </div>
                       
                                                <h4> <?php echo $ua2_value; ?> % </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>              
                                                <div> Índice de atendimento de água (soluções individualizadas)  </div>
                                     
                                                <h4> <?php echo $ua3_value; ?> % </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="esgoto">
                                                <h3>Esgotamento Sanitário</h3>
                                                <div> Índice de atendimento de esgoto (rede de esgotamento sanitário)  </div>
                                                
                                                <h4> <?php echo $ue1_value; ?> % </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div> Índice de atendimento de esgoto á população urbana (rede de esgotamento sanitário)  </div>
                                                
                                                <h4> <?php echo $ue2_value; ?> % </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div> Índice de atendimento de esgoto (solução individualizada)  </div>
                                                
                                                <h4> <?php echo $ue3_value; ?> % </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div> Índice de atendimento de esgoto à população urbana (solução individualizada)  </div>
                                                
                                                <h4> <?php echo $ue4_value; ?> % </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="residuos">
                                                <h3>Resíduos Sólidos</h3>
                                                <div> Índice de cobertura do serviço de coleta de RDO  </div>
                                                
                                                <h4> <?php echo $ur1_value; ?> % </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div> Índice de cobertura do serviço de coleta de RDO (população urbana)  </div>
                                               
                                                <h4> <?php echo $ur2_value; ?> % </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="drenagem">
                                                <h3>Manejo de Águas Pluviais</h3>
                                                <div> Índice de atendimento de drenagem urbana  </div>
                                               
                                                <h4> <?php echo $ud1_value; ?> % </h4>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        <?php else: ?>

                            <div class="col-md-12"> 
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td class="abastece">
                                                <div> Índice de abastecimento de água  </div>
                                               <?php  $ua1_value = number_format($ua1,2,".","."); ?>
                                                <h4> <?php echo $ua1_value; ?> % </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div> Índice de atendimento de água à população urbana  </div>
                                                <?php $ua2_value = number_format($ua2,2,".","."); ?>
                                                <h4> <?php echo $ua2_value; ?> % </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>              
                                                <div> Índice de atendimento de água (soluções individualizadas)  </div>
                                               <?php  $ua3_value = number_format($ua3,2,".","."); ?>
                                                <h4> <?php echo $ua3_value; ?> % </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="esgoto">
                                                <div> Índice de atendimento de esgoto (rede de esgotamento sanitário)  </div>
                                               <?php  $ue1_value = number_format($ue1,2,".","."); ?>
                                                <h4> <?php echo $ue1_value; ?> % </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div> Índice de atendimento de esgoto á população urbana (rede de esgotamento sanitário)  </div>
                                                <?php $ue2_value = number_format($ue2,2,".","."); ?>
                                                <h4> <?php echo $ue2_value; ?> % </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div> Índice de atendimento de esgoto (solução individualizada)  </div>
                                               <?php  $ue3_value = number_format($ue3,2,".","."); ?>
                                                <h4> <?php echo $ue3_value; ?> % </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div> Índice de atendimento de esgoto à população urbana (solução individualizada)  </div>
                                                <?php $ue4_value = number_format($ue4,2,".","."); ?>
                                                <h4> <?php echo $ue4_value; ?> % </h4>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="residuos">
                                                <div> Índice de cobertura do serviço de coleta de RDO  </div>
                                               <?php  $ur1_value = number_format($ur1,2,".","."); ?>
                                                <h4> <?php echo $ur1_value; ?> % </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div> Índice de cobertura do serviço de coleta de RDO (população urbana)  </div>
                                               <?php  $ur2_value = number_format($ur2,2,".","."); ?>
                                                <h4> <?php echo $ur2_value; ?> % </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="drenagem">
                                                <div> Índice de atendimento de drenagem urbana  </div>
                                              <?php   $ud1_value = number_format($ud1,2,".","."); ?>
                                                <h4> <?php echo $ud1_value; ?> % </h4>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>        
                        <?php endif; ?>
                       
                    
                </div>
                </div>

                <div class="tab-pane" id="tecnologia-apropriada">
                <h3> Tecnologia Apropriada </h3>
                    <div>
                        <div class="col-md-12"> 
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td class="abastece">
                                            <?php 
                                                echo '<h3>' . $ta1_label . '</h3>';
                                                $field_ta1 = get_field_object('ta1'); 
                                                $choices_ta1 = get_field('ta1'); 
                                                foreach($choices_ta1 as $choice){
                                                echo '<h4>' . $choice . '</h4>';
                                                }
                                            ?>
                                            <h4> <?php echo $ta1_descreva_value; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="esgoto">
                                            <?php
                                                echo '<h3>' . $te1_label . '</h3>';
                                                $field_te1 = get_field_object('te1'); 
                                                $choices_te1 = get_field('te1'); 
                                                foreach($choices_te1 as $choice){
                                                echo '<h4>' . $choice . '</h4>';
                                                }
                                            ?>
                                            <h4> <?php echo $te1_descreva_value; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="residuos">
                                            <?php
                                            echo '<h3>' . $tr1_label . '</h3>';
                                            $field_tr1 = get_field_object('tr1'); 
                                            $choices_tr1 = get_field('tr1');  
                                            foreach($choices_tr1 as $choice){
                                            echo '<h4>' . $choice . '</h4>';
                                            }
                                            ?>
                                            <h4> <?php echo $tr1_descreva_value; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $tr2_instruction; ?>
                                            <h4> <?php echo $tr2_value; ?> </h4>
                                            <h4> <?php echo $tr2_descreva_value; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="drenagem">
                                            <?php 
                                            echo '<h3>' . $td1_label . '</h3>';
                                            $field_td1 = get_field_object('td1'); 
                                            $choices_td1 = get_field('td1'); 
                                            foreach($choices_td1 as $choice){
                                            echo '<h4>' . $choice . '</h4>';
                                            }
                                            ?>
                                            <h4> <?php echo $td1_descreva_value; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php 
                                                echo $td2_instruction;
                                                $field_td2 = get_field_object('td2'); 
                                                $choices_td2 = get_field('td2');  
                                                foreach($choices_td2 as $choice){
                                                echo '<h4>' . $choice . '</h4>';
                                                }
                                            ?>
                                            <h4> <?php echo $td2_descreva_value; ?> </h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                      
                    </div>
                </div>

                <div class="tab-pane" id="qualidade-servicos">
                    <h3> Qualidade dos Serviços Prestados </h3>
                    <!-- Definição de Propriedades -->
                    <?php $qa1_value = number_format($qa1,2,".",".");?>
                    <?php $qa1_global = $qa1_value; ?>
                    <?php $qa2_value = number_format($qa2,2,".","."); ?>
                    <?php $qa3_value = number_format($qa3,2,".","."); ?>
                    <?php $qa4_value = number_format($qa4,2,".","."); ?>
                    <?php $qa5_value = number_format($qa5,2,".","."); ?>
                    <?php $qa6_value = number_format($qa6,2,".","."); ?>
                    <?php $qs1_value = number_format($qs1,2,".","."); ?>
                    <?php $qs2_value = number_format($qs2_count,2,".","."); ?>
                    <?php $qs3_value = number_format($qs3,2,".","."); ?>
                    <?php $qt1_value = number_format($qt1,2,".","."); ?>
                    <?php $qt2_value = number_format($qt2,2,".","."); ?>
                    <?php $qt3_value = number_format($qt3,2,".","."); ?>
                    <?php $qt4_value = number_format($qt4,2,".","."); ?>
                    <?php $qt5_value = number_format($qt5,2,".","."); ?>
                    <?php $qt6_value = number_format($qt6,2,".","."); ?>
                    <?php $qm1_value = number_format($qm1,2,".","."); ?>
                    <?php $qm2_value = number_format($qm2,2,".","."); ?>
                    <?php $qm3_value = number_format($qm3,2,".","."); ?>
                    <?php $qcc1_value = number_format($qcc1,2,".","."); ?>
                    <?php $qcc2_value = number_format($qcc2,2,".","."); ?>
                    <?php $qa1_value = number_format($qa1,2,".","."); ?>
                    <?php $qa2_value = number_format($qa2,2,".","."); ?>
                    <?php $qa3_value = number_format($qa3,2,".","."); ?>
                    <?php $qa4_value = number_format($qa4,2,".","."); ?>
                    <?php $qa5_value = number_format($qa5,2,".","."); ?>
                    <?php $qa6_value = number_format($qa6,2,".","."); ?>
                    <?php $qs1_value = number_format($qs1,2,".","."); ?>
                    <?php $qs2_value = number_format($qs2_count,0,".","."); ?>
                    <?php $qs3_value = number_format($qs3,2,".","."); ?>
                    <?php $qt1_value = number_format($qt1,2,".","."); ?>
                    <?php $qt2_value = number_format($qt2,2,".","."); ?>
                    <?php $qt3_value = number_format($qt3,2,".","."); ?>
                    <?php $qt4_value = number_format($qt4,2,".","."); ?>
                    <?php $qt5_value = number_format($qt5,2,".","."); ?>
                    <?php $qt6_value = number_format($qt6,2,".","."); ?>
                    <?php $qm1_value = number_format($qm1,2,".",".");?> 
                    <?php $qm2_value = number_format($qm2,2,".",".");?> 
                    <?php $qm3_value = number_format($qm3,2,".",".");?> 
                    <?php $qcc1_value = number_format($qcc1,0,".","."); ?>
                    <?php $qcc2_value = number_format($qcc2,0,".","."); ?>
                    
                    <div>
                    <div class="col-md-12">
                      
                        
                    </div>
                        <?php if ( is_user_logged_in() ): ?> 

                        <div class="col-md-12"> 
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>        
                                            <?php echo $sq1_instruction; ?>
                                            <h4><?php echo number_format($sq1_value,0,".",".");?> &nbsp;  <?php $sq1_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sq2_instruction; ?>
                                            <h4><?php echo number_format($sq2_value,0,".","."); ?> &nbsp; <?php echo $sq2_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sq3_instruction; ?>
                                            <h4><?php echo number_format($sq3_value,0,".","."); ?> &nbsp; <?php echo $sq3_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sq4_instruction; ?>
                                            <h4><?php echo number_format($sq4_value,0,".","."); ?> &nbsp; <?php echo $sq4_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sq5_instruction; ?>
                                            <h4><?php echo number_format($sq5_value,0,".","."); ?> &nbsp; <?php echo $sq5_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sq6_instruction; ?>
                                            <h4><?php echo number_format($sq6_value,0,".","."); ?> &nbsp; <?php echo $sq6_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sq7_instruction; ?>
                                            <h4><?php echo number_format($sq7_value,0,".","."); ?> &nbsp; <?php echo $sq7_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sq8_instruction; ?>
                                            <h4><?php echo number_format($sq8_value,0,".","."); ?> &nbsp; <?php echo $sq8_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sq9_instruction; ?>
                                            <h4><?php echo number_format($sq9_value,0,".","."); ?> &nbsp; <?php echo $sq9_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sn1_instruction; ?>
                                            <h4><?php echo number_format($sn1_value,0,".","."); ?> &nbsp; <?php echo $sn1_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sh1_instruction; ?>
                                            <h4><?php echo number_format($sh1_value,0,".","."); ?> &nbsp; <?php echo $sh1_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sn2_instruction; ?>
                                            <h4><?php echo number_format($sn2_value,0,".","."); ?> &nbsp; <?php echo $sn2_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sn3_instruction; ?>
                                            <h4><?php echo number_format($sn3_value,0,".","."); ?> &nbsp; <?php echo $sn3_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sd1_instruction; ?>
                                            <h4><?php echo number_format($sd1_value,0,".","."); ?> &nbsp; <?php echo $sd1_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sn4_instruction; ?>
                                            <h4><?php echo number_format($sn4_value,0,".","."); ?> &nbsp; <?php echo $sn4_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $se1_instruction; ?>
                                            <h4><?php echo number_format($se1_value,0,".","."); ?> &nbsp; <?php echo $se1_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sm1_instruction; ?>
                                            <h4><?php echo number_format($sm1_value,0,".","."); ?> &nbsp; <?php echo $sm1_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sm2_instruction; ?>
                                            <h4><?php echo number_format($sm2_value,0,".","."); ?> &nbsp; <?php echo $sm2_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sn5_instruction; ?>
                                            <h4><?php echo number_format($sn5_value,0,".","."); ?> &nbsp; <?php echo $sn5_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sn6_instruction; ?>
                                            <h4><?php echo number_format($sn6_value,0,".","."); ?> &nbsp; <?php echo $sn6_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sn7_instruction; ?>
                                            <h4><?php echo number_format($sn7_value,0,".","."); ?> &nbsp; <?php echo $sn7_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sn8_instruction; ?>
                                            <h4><?php echo number_format($sn8_value,0,".","."); ?> &nbsp; <?php echo $sn8_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sn9_instruction; ?>
                                            <h4><?php echo number_format($sn9_value,0,".","."); ?> &nbsp; <?php echo $sn9_append;?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sn10_instruction; ?>
                                            <h4><?php echo number_format($sn10_value,0,".","."); ?> &nbsp; <?php echo $sn10_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sn11_instruction; ?>
                                            <h4><?php echo number_format($sn11_value,0,".","."); ?> &nbsp; <?php echo $sn11_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sn12_instruction; ?>
                                            <h4><?php echo number_format($sn12_value,0,".","."); ?> &nbsp; <?php echo $sn12_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sn13_instruction; ?>
                                            <h4><?php echo number_format($sn13_value,0,".","."); ?> &nbsp; <?php echo $sn13_append;?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sn14_instruction; ?>
                                            <h4><?php echo number_format($sn14_value,0,".","."); ?> &nbsp; <?php echo $sn14_append;?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sn15_instruction; ?>
                                            <h4><?php echo number_format($sn15_value,0,".","."); ?> &nbsp; <?php echo $sn15_append;?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sq7_instruction; ?>
                                            <h4><?php echo number_format($sq7_value,0,".","."); ?> &nbsp; <?php $sq7_append; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sq8_instruction; ?>
                                            <h4><?php echo number_format($sq8_value,0,".","."); ?> &nbsp; <?php echo $sq8_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sv1_instruction; ?>
                                            <h4> <?php echo number_format($sv1_value,2,".","."); ?>&nbsp;<?php echo $sv1_append;?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>
                                    <?php echo $ss1_instruction; ?>
                                    <h4> <?php echo number_format($ss1_value,2,".","."); ?> &nbsp; <?php echo $ss1_append;?></h4>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $st4_instruction; ?>
                                            <h4><?php echo number_format($st4_value,0,".","."); ?> &nbsp; <?php echo $st4_append;?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $st5_instruction; ?>
                                            <h4><?php echo number_format($st5_value,0,".","."); ?> &nbsp; <?php echo $st5_append;?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sc1_instruction; ?>
                                            <h4><?php echo number_format($sc1_value,0,".","."); ?> &nbsp; <?php echo $sc1_append;?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sc2_instruction; ?>
                                            <h4><?php echo number_format($sc2_value,0,".","."); ?> &nbsp; <?php echo $sc2_append;?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sc3_instruction; ?>
                                            <h4><?php echo number_format($sc3_value,0,".","."); ?> &nbsp; <?php echo $sc3_append;?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $sc4_instruction; ?>
                                            <h4><?php echo number_format($sc4_value,0,".","."); ?> &nbsp; <?php echo $sc4_append;?></h4>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-12">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td class="qualidadeagua">
                                            <h3> (QA1)Qualidade da Água </h3>   
                                            <div> Índice de conformidade da quantidade de amostra - cloro residual  </div>
                                            
                                            <h4> <?php echo $qa1_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Incidência das análises de cloro residual fora do padrão  </div>
                                            
                                            <h4> <?php echo $qa2_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Índice de conformidade da quantidade de amostra - turbidez  </div>
                                            
                                            <h4> <?php echo $qa3_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Incidência das análises de turbidez fora do padrão  </div>
                                            
                                            <h4> <?php echo $qa4_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Índice de conformidade da quantidade de amostra - coliformes totais  </div>
                                            
                                            <h4> <?php echo $qa5_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Incidência das análises de coliformes totais fora do padrão  </div>
                                            
                                            <h4> <?php echo $qa6_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cortesia">
                                            <h3>(QC1) Cortesia no Atendimento</h3>  
                                            <div> Satisfação do usuário no atendimento dos serviços prestados  </div>
                                            <h4><?php echo number_format($qc1,2, ',', '.');?> Reclamações / mês </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="regularidade"> 
                                            <h3>Regularidade / Continuidade</h3> 
                                            <div> Duração média das paralisações  </div>
                                            <h4> <?php echo $qr1;?> horas / paralização </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Duração média das intermitências  </div>
                                            <h4> <?php echo $qr2;?> horas / interrupção </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Duração média dos reparos de extravasamentos de esgotos  </div>
                                            <h4><?php echo number_format($qr3,2, ',', '.') ;?> horas / extravasamento </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Extravasamentos de esgotos por extensão de rede </div>
                                            <h4> <?php echo $qr4;?> extravasamento / km </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="seguranca">
                                        <h3>Segurança</h3>  
                                            <div> Nível de segurança contra contaminação dos manaciais aquíferos (superficial e subterrâneo)  </div>
                                            
                                            <h4> <?php echo $qs1_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Ocorrências quanto à vandalismo, roubo/furto e depredações  </div>
                                            
                                            <h4> <?php echo $qs2_value; ?> Ocorrências/mês </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Risco de acidente de trabalho  </div>
                                            
                                            <h4> <?php echo $qs3_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="manutencao"> 
                                            <h3>(QT1) Condições Técnico-operacionais de Manutenção</h3> 
                                            <div> Cadastro técnico atualizado da rede de abastecimento de água  </div>
                                            
                                            <h4> <?php echo $qt1_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Cadastro técnico atualizado da rede de esgotamento sanitário  </div>
                                            
                                            <h4> <?php echo $qt2_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Cadastro técnico atualizado do sistema de drenagem  </div>
                                            
                                            <h4> <?php echo $qt3_value; ?> % </h4>
                                        </td>
                                    </tr>        
                                    <tr>
                                        <td>  
                                            <div> Cadastro da rota de coleta de resíduo sólido  </div>
                                            
                                            <h4> <?php echo $qt4_value; ?> % </h4>
                                        </td>
                                    </tr>        
                                    <tr>
                                        <td>  
                                            <div> Grau de qualificação técnica dos profissionis envolvidos (nível superior)  </div>
                                            
                                            <h4> <?php echo $qt5_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Grau de qualificação técnica dos profissionis envolvidos (nível técnico) </div>
                                            
                                            <h4> <?php echo $qt6_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Grau de qualificação técnica dos profissionis envolvidos  </div>
                                            <h4> <?php echo $qt7;?> Funcionários treinados / ano </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> <?php echo $qt8_instructions; ?> </div>
                                            <h4> <?php echo $qt8_value; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> <?php echo $qt8_quais_label; ?> </div>
                                            <h4> <?php echo $qt8_quais_value; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> <?php echo $qt9_instructions; ?> </div>
                                            <h4> <?php echo $qt9_value; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> <?php echo $qt10_instructions; ?> </div>
                                            <h4> <?php echo $qt10_value; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> <?php echo $qt11_instructions; ?> </div>
                                            <h4> <?php echo $qt11_value; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="modicidade"> 
                                            <h3>(QM1) Modicidade das Tarifas</h3> 
                                            <div> Participação das economias residenciais de água no total das economias de água  </div>
                                            
                                            <h4> <?php echo $qm1_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Impacto da tarifa social na renda dos usuários  </div>
                                            
                                            <h4> <?php echo $qm2_value; ?> % </h4>        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Índice de inadiplências da conta de água  </div>
                                            
                                            <h4> <?php echo $qm3_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Índice de reclamações do serviço de abastecimento de água  </div>
                                            
                                            <h4> <?php echo $qcc1_value; ?> Reclamações/1000 lig. ativas </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Índice de reclamações do serviço de abastecimento de água  </div>
                                            
                                            <h4> <?php echo $qcc2_value; ?> Reclamações/1000 lig. ativas </h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    <?php else: ?>
                        <div class="col-md-12">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td class="qualidadeagua">
                                            <h3> (QA1)Qualidade da Água </h3>    
                                            <div> Índice de conformidade da quantidade de amostra - cloro residual  </div>
                                            
                                            <h4> <?php echo $qa1_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Incidência das análises de cloro residual fora do padrão  </div>
                                            
                                            <h4> <?php echo $qa2_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Índice de conformidade da quantidade de amostra - turbidez  </div>
                                            
                                            <h4> <?php echo $qa3_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Incidência das análises de turbidez fora do padrão  </div>
                                            
                                            <h4> <?php echo $qa4_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Índice de conformidade da quantidade de amostra - coliformes totais  </div>
                                            
                                            <h4> <?php echo $qa5_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Incidência das análises de coliformes totais fora do padrão  </div>
                                            
                                            <h4> <?php echo $qa6_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cortesia"> 
                                            <h3>(QC1) Cortesia no Atendimento</h3>   
                                            <div> Satisfação do usuário no atendimento dos serviços prestados  </div>
                                            <h4><?php echo number_format($qc1,0, ',', '.');?> Reclamações / mês </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="regularidade">
                                            <h3>Regularidade / Continuidade</h3>   
                                            <div> Duração média das paralisações  </div>
                                            <h4> <?php echo $qr1;?> horas / paralização </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Duração média das intermitências  </div>
                                            <h4> <?php echo $qr2;?> horas / interrupção </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Duração média dos reparos de extravasamentos de esgotos  </div>
                                            <h4><?php echo number_format($qr3,0, ',', '.');?> horas / extravasamento </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Extravasamentos de esgotos por extensão de rede </div>
                                            <h4><?php echo number_format($qr4,0, ',', '.');?> extravasamento / km </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="seguranca">
                                            <h3>Segurança</h3>   
                                            <div> Nível de segurança contra contaminação dos manaciais aquíferos (superficial e subterrâneo)  </div>
                                            
                                            <h4> <?php echo $qs1_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Ocorrências quanto à vandalismo, roubo/furto e depredações  </div>
                                            
                                            <h4> <?php echo $qs2_value; ?> Ocorrências/mês </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Risco de acidente de trabalho  </div>
                                            
                                            <h4> <?php echo $qs3_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Ocorrências quanto à vandalismo, roubo/furto e depredações  </div>
                                            <h4><?php echo number_format($qs3,0, ',', '.');?>Ocorrências / mês </h4>
                                        </td>
                                    </tr>        
                                    <tr>
                                        <td class="manutencao">
                                            <h3>(QT1) Condições Técnico-operacionais de Manutenção</h3>  
                                            <div> Cadastro técnico atualizado da rede de abastecimento de água  </div>
                                            
                                            <h4> <?php echo $qt1_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Cadastro técnico atualizado da rede de esgotamento sanitário  </div>
                                            
                                            <h4> <?php echo $qt2_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Cadastro técnico atualizado do sistema de drenagem  </div>
                                            
                                            <h4> <?php echo $qt3_value; ?> % </h4>
                                        </td>
                                    </tr>        
                                    <tr>
                                        <td>  
                                            <div> Cadastro da rota de coleta de resíduo sólido  </div>
                                            
                                            <h4> <?php echo $qt4_value; ?> % </h4>
                                        </td>
                                    </tr>        
                                    <tr>
                                        <td>  
                                            <div> Grau de qualificação técnica dos profissionis envolvidos  </div>
                                            
                                            <h4> <?php echo $qt5_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Grau de qualificação técnica dos profissionis envolvidos  </div>
                                            
                                            <h4> <?php echo $qt6_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Grau de qualificação técnica dos profissionis envolvidos  </div>
                                            <h4><?php echo number_format($qt7,0, ',', '.');?> Funcionários treinados / ano </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> <?php echo $qt8_instructions; ?> </div>
                                            <h4> <?php echo $qt8_value; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> <?php echo $qt8_quais_label; ?> </div>
                                            <h4> <?php echo $qt8_quais_value; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> <?php echo $qt9_instructions; ?> </div>
                                            <h4> <?php echo $qt9_value; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> <?php echo $qt10_instructions; ?> </div>
                                            <h4><?php echo number_format($qt10_value,0, ',', '.');?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> <?php echo $qt11_instructions; ?> </div>
                                            <h4><?php echo number_format($qt11_value,0, ',', '.');?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="modicidade">
                                            <h3>(QM1) Modicidade das Tarifas</h3>   
                                            <div> Participação das economias residenciais de água no total das economias de água  </div>
                                            
                                            <h4> <?php echo $qm1_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Impacto da tarifa social na renda dos usuários  </div>
                                            
                                            <h4> <?php echo $qm2_value; ?> % </h4>        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Índice de inadiplências da conta de água  </div>
                                            
                                            <h4> <?php echo $qm3_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Índice de reclamações do serviço de abastecimento de água  </div>
                                            
                                            <h4> <?php echo $qcc1_value; ?> Reclamações/1000 lig. ativas </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Índice de reclamações do serviço de abastecimento de água  </div>
                                            
                                            <h4> <?php echo $qcc2_value; ?> Reclamações/1000 lig. ativas </h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <?php endif; ?>
                      
                    </div>
                </div>

                <div class="tab-pane" id="adequacao">
                    <h3> Adequação a Saúde Pública e ao Meio Ambiente</h3>
                    <div>

                    <div class="col-md-12"> 
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td class="saude">
                                        <h3>Saúde Pública</h3> 
                                        <?php echo $ae1_instruction; ?>
                                        <h4><?php echo number_format($ae1_value,0,".",".") . '&nbsp;' . $ae1_append; ?> </h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 
                                        <?php echo $ad1_instruction; ?>
                                        <h4><?php echo number_format($ad1_value,0,".","."); ?> &nbsp; <?php echo $ad1_append; ?> </h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 
                                        <?php echo $av1_instruction; ?>
                                        <h4><?php echo number_format($av1_value,0,".","."); ?> &nbsp; <?php echo $av1_append; ?> </h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 
                                        <?php echo $al1_instruction; ?>
                                        <h4><?php echo number_format($al1_value,0,".","."); ?> &nbsp; <?php echo $al1_append; ?> </h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>        
                    </div>

                    </div>
                </div>

                <div class="tab-pane" id="intersetorialidade">
                <h3> Intersetorialidade </h3>
                <div>

                    <div class="col-md-12"> 
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td class="meioambiente">
                                        <h3>Proteção do Meio Ambiente</h3> 
                                        <?php echo $a7_label; ?>
                                        <h4> <?php echo $a7_value; ?> </h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 
                                        <?php echo $aa7_label; ?>
                                        <h4> <?php echo $aa7_value ; ?> </h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 
                                        <?php echo $aaa7_label; ?>
                                        <h4> <?php echo $aaa7_value ; ?> </h4>
                                    </td>
                                </tr> 
                                <tr>
                                    <td> 
                                        <?php echo $b7_label; ?>
                                        <h4> <?php echo $b7_value ; ?> </h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table> 
                    </div>

                </div>
            </div>


                <div class="tab-pane" id="indicadores-eficiencia">
                    <h3> Indicadores de Eficiência </h3>
                    <div>

                        <div class="col-md-12">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>        
                                            <div> Índice de consumo de energia elétrica em sistemas de abastecimento de água  </div>
                                            <?php $ee1_value = number_format($ee1,2,".","."); ?>
                                            <h4> <?php echo $ee1_value; ?> kWh/m³ </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Índice de Produtividade: Economias Ativas por Pessoal Próprio  </div>
                                            <?php $ep1_value = number_format($ep1,0,".","."); ?>
                                            <h4> <?php echo $ep1_value; ?> economias/empregados </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Incidência da Desp. de Pessoal e de Serv. de Terc. nas despesas Totais de Serviços  </div>
                                            <?php $ep2_value = number_format($ep2,2,".","."); ?>
                                            <h4> <?php echo $ep2_value; ?> % </h4>
                                        </td>
                                    </tr>        
                                    <tr>
                                        <td>  
                                            <div> Índice de Faturamento de Água  </div>
                                            <?php $er1_value = number_format($er1,2,".","."); ?>
                                            <h4> <?php echo $er1_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Índice de instalação do hidrômetro  </div>
                                            <?php $et1_value = number_format($et1,2,".","."); ?>
                                            <h4> <?php echo $et1_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  
                                            <div> Índice de perdas na Distribuição  </div>
                                            <?php $et2_value = number_format($et2,2,".","."); ?>
                                            <h4> <?php echo $et2_value; ?> % </h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>         
                        </div>

                        <div class="col-md-12"> 
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td class="energetica">
                                            <h3> Energética </h3> 
                                            <?php echo $fc1_instruction; ?>
                                            <h4><?php echo number_format($fc1_value,0,".","."); ?> &nbsp; <?php echo  $fc1_append ;?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                            <?php echo $fv1_instruction; ?>
                                            <h4><?php echo number_format($fv1_value,0,".","."); ?> &nbsp; <?php echo $fv1_append;?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                            <?php echo $fq1_instruction; ?>
                                            <h4><?php echo number_format($fq1_value,0,".","."); ?> &nbsp; <?php echo $fq1_append; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pessoal">
                                            <h3> Pessoal </h3>
                                            <?php echo $fq2_instruction; ?>
                                            <h4><?php echo number_format($fq2_value,0,".","."); ?> &nbsp; <?php echo $fq2_append; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                            <?php echo $fd1_instruction; ?>
                                            <h4><?php echo number_format($fd1_value,2,".","."); ?> &nbsp; <?php echo $fd1_append; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $fd2_instruction; ?>
                                            <h4><?php echo number_format($fd2_value,2,".","."); ?> &nbsp; <?php echo $fd2_append;?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="recursos">
                                            <h3>Recursos financeiros</h3> 
                                            <?php echo $fv2_instruction; ?>
                                            <h4><?php echo number_format($fv2_value,0,".","."); ?> &nbsp; <?php echo $fv2_append; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                            <?php echo $fv3_instruction; ?>
                                            <h4><?php echo number_format($fv3_value,0,".","."); ?> &nbsp; <?php echo $fv3_append; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tecnico">
                                            <h3>Técnico-operacional</h3> 
                                            <?php echo $fh1_instruction; ?>
                                            <h4><?php echo number_format($fh1_value,0,".","."); ?> &nbsp; <?php echo $fh1_append; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                            <?php echo $fq3_instruction; ?>
                                            <h4><?php echo number_format($fq3_value,0,".","."); ?> &nbsp; <?php echo $fq3_append; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                            <?php echo $fv4_instruction; ?>
                                            <h4><?php echo number_format($fv4_value,0,".","."); ?> &nbsp; <?php echo $fv4_append; ?> </h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>         

                        </div>

                    </div>
                </div>



                <div class="tab-pane" id="sustentabilidade-financeira">
                <h3> Sustentabilidade Financeira </h3>
                <div>
                    <?php if ( is_user_logged_in() ): ?>

                        <div class="col-md-12"> 
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td> 
                                            <?php echo $nr1_instruction; ?>
                                            <h4><?php echo $nr1_prepend;?> &nbsp;<?php echo number_format($nr1_value,2,".","."); ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>        
                                            <?php echo $nt1_instruction; ?>
                                            <h4> <?php echo $nt1_prepend;?> &nbsp;<?php echo number_format($nt1_value,2,".",".") ; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>        
                                            <?php echo $nr2_instruction; ?>
                                            <h4> <?php echo $nr2_prepend; ?>&nbsp;<?php echo number_format($nr2_value,2,".",".") ; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>        
                                            <?php echo $na1_instruction; ?>
                                            <h4> <?php echo $na1_prepend; ?>&nbsp;<?php echo number_format($na1_value,2,".",".") ; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>        
                                            <?php echo $nr3_instruction; ?>
                                            <h4> <?php echo $nr3_prepend; ?>&nbsp;<?php echo number_format($nr3_value,2,".",".") ; ?> </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>        
                                            <?php echo $nr4_instruction; ?>
                                            <h4> <?php echo $nr4_prepend; ?>&nbsp;<?php echo number_format($nr4_value,2,".",".") ; ?> </h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>         
                        </div>

                        <div class="col-md-12">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td class="situacao">
                                            <h3>Situação financeira</h3>
                                            <div> Indicador de desempenho financeiro  </div>
                                            <?php $sf1_value = number_format($sf1,2,".",".");?> 
                                            <h4> <?php echo $sf1_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mecanismo">
                                            <h3>Mecanismos de arrecadação</h3>        
                                            <div> Índice de Evasão de Receitas  </div>
                                            <?php $sr1_value = number_format($sr1,2,".","."); ?>
                                            <h4> <?php echo $sr1_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="composicao">
                                            <h3>Composição das despesas</h3>        
                                            <div> Participação da Receita Operacional Direta de Água na Receita Operacional Total </div>
                                            <?php $sa1_value = number_format($sa1,2,".","."); ?>
                                            <h4> <?php echo $sa1_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>        
                                            <div> Participação da Receita Operacional Direta de Esgoto na Receita Operacional Total </div>
                                            <?php $se1_value = number_format($se1,2,".","."); ?>
                                            <h4> <?php echo $se1_value; ?> % </h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>         

                        </div>
                    <?php else: ?> 

                        <div class="col-md-12">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td class="situacao">
                                            <h3>Situação financeira</h3>
                                            <div> Indicador de desempenho financeiro  </div>
                                            <?php $sf1_value = number_format($sf1,2,".","."); ?>
                                            <h4> <?php echo $sf1_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mecanismo">
                                            <h3>Mecanismos de arrecadação</h3>        
                                            <div> Índice de Evasão de Receitas  </div>
                                            <?php $sr1_value = number_format($sr1,2,".","."); ?>
                                            <h4> <?php echo $sr1_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="composicao">
                                            <h3>Composição das despesas</h3>
                                            <div> Participação da Receita Operacional Direta de Água na Receita Operacional Total </div>
                                            <?php $sa1_value = number_format($sa1,2,".","."); ?>
                                            <h4> <?php echo $sa1_value; ?> % </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>        
                                            <div> Participação da Receita Operacional Direta de Esgoto na Receita Operacional Total </div>
                                            <?php $se1_value = number_format($se1,2,".","."); ?>
                                            <h4> <?php echo $se1_value; ?> % </h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>         

                        </div>

                    <?php endif; ?>
                </div>
            </div>


                <div class="tab-pane" id="participacao-controle">
                <h3> Participação e Controle Social </h3>
                <div>

                    <div class="col-md-12"> 
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>
                                        <?php echo $a10_label;
                                        echo '<h4>' . $a10_value . '</h4>';
                                         ?> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>         
                                        <?php echo $aa10_label;
                                        echo '<h4>' . $aa10_value . '</h4>';
                                         ?> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>         
                                        <?php echo $aaa10_label;
                                        echo '<h4>' . $aaa10_value . '</h4>';
                                         ?> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>         
                                        <?php echo $aaaa10_label;
                                        echo '<h4>' . $aaaa10_value . '</h4>'; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>         
                                        <?php echo $b10_label;
                                        echo '<h4>' . $b10_value . '</h4>';
                                         ?> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>         
                                        <?php 
                                            echo $bb10_label;
                                            foreach($bb10_array as $bb10){                
                                            echo '<h4>' . $bb10 . '</h4>';
                                            }
                                        ?>
                                        <?php 
                                            echo $c10_label;
                                            echo '<h4>' . $c10_value . '</h4>';
                                        ?>
    
                                    </td>
                                </tr>
                                <tr>
                                    <td>         
                                        <?php echo $d10_label;
                                        echo '<h4>' . $d10_value . '</h4>';
                                         ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>     
                    </div>
                </div>
                </div>
        </div>
    </div>



<!-- Large modal -->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" id="printThis">
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h1 class="modal-title"><?php the_title(); ?></h1>
		<?php echo do_shortcode('[printfriendly]'); ?>
            </div>
            <h2>Universalização do Acesso</h2>
            <div>
                Segundo a Lei no 11.445/2007, universalização é a “ampliação progressiva do acesso de todos os domicílios ocupados ao 
                saneamento básico” (BRASIL, 2007). <br>
                Para a análise do princípio da universalidade, os indicadores trazem, de uma maneira geral, um panorama da cobertura 
                dos serviços de saneamento no município. Assim, demonstram o desempenho destes serviços (abastecimento de água, 
                esgotamento sanitário, manejo de resíduos sólidos e manejo de águas pluviais) no que diz respeito à cobertura ao 
                longo do tempo. Portanto, a partir dos indicadores, pode-se visualizar a proximidade do município em alcançar a 
                universalização do acesso aos serviços, ou seja, atingir 100% de cobertura para os indicadores.<br>
                A partir dos dados disponibilizados pelo gestor dos serviços de saneamento básico, é possível afirmar que 
                atualmente dos serviços encontram-se no nível de cobertura apresentada a seguir:
            </div>
            <h4>Abastecimento de Água</h4>
            <div id="graph01" class="chartz">
                <?php
                    $data = array('0','0','0');
                    $zona_rural = ($ua1_value-$ua2_value);
                    $natendidas = (100-$ua1_value);
                    $chart = array($ua2_value,$zona_rural,$natendidas);
                    $data = implode(",", $chart);
                    echo do_shortcode('[wp_charts title="mydough" type="doughnut" align="aligncenter" margin="5px 5px 5px 5px" colors="#22DDA4,#67A686,#B0D54B" width="350px" height="350px" animation="true" data="'. $data .'"]');

                ?>
                <span id="legend01" class="pull-right">
                    <ul class="list-group">
                      <li class="list-group-item" style="background-color:#22DDA4;">Zona Urbana: <?php echo $ua2_value?>% </li>
                      <li class="list-group-item" style="background-color:#67A686;">Zona Rural: <?php echo $zona_rural?>%</li>
                      <li class="list-group-item" style="background-color:#B0D54B;">Não Atendidas: <?php echo $natendidas?>%</li>
                    </ul>
                </span>
            </div>
            <div>
                O abastecimento de água contempla <?php echo $ua1_value?>% dos moradores do 
                município, Na zona urbana, este índice é de <?php echo $ua2_value?>%, enquanto na zona rural
                é de <?php echo ($ua1_value - $ua2_value) ?>%. Assim, existe um montante de 
                [<?php echo (100-$ua1_value)?>%]
                da população a ser atendida para se alcançar universalização deste serviço.<br>
                Alternativas de abastecimento como poço e nascente são até hoje utilizadas em 
                algumas localidades da zona rural, suprindo as necessidades de consumo da 
                população. As soluções individualizadas representam (<?php echo $ua3_value?>%)
                deste total. <br>
                <?php if ($ua1_value < 100):?>
                A partir desses dados, demonstra-se que o município terá que investir na 
                ampliação da cobertura do abastecimento por água potável, devendo, para tanto, 
                observar o PMSB com seus programas, projetos e ações, a fim de atingir o acesso 
                universal à água potável. Nesse sentido, o município deve considerar o mais 
                adequado modelo de prestação de serviço, a importância da proteção dos mananciais,
                tomando partido de diferentes modelos tecnológicos. <br>
                <?php elseif ($ua1_value == 100): ?>
                A partir desses dados, demonstra-se que o município conseguiu investir na 
                ampliação da cobertura do abastecimento por água potável e, portanto, alcançar 
                a universalização do acesso. Porém, sempre se deve acompanhar o PMSB a fim de 
                ampliar a oferta desse serviço simultâneo à dinâmica populacional. <br>
                <?php endif; ?>
            </div>
            <h4>Esgotamento Sanitário</h4>
            <div id="graph02" class="chartz">
                <?php
                    $data02 = array('0','0','0');
                    $zona_rural02 = ($ue1_value-$ue2_value);
                    $natendidas02 = (100-$ue1_value);
                    $chart02 = array($ue2_value,$zona_rural02,$natendidas02);
                    $data02 = implode(",", $chart02);
                    echo do_shortcode('[wp_charts title="mydough02" type="doughnut" align="aligncenter" margin="5px 5px 5px 5px" colors="#22DDA4,#67A686,#B0D54B" width="350px" height="350px" animation="true" data="'. $data02 .'"]');

                ?>
                <span id="legend02" class="pull-right">
                    <ul class="list-group">
                      <li class="list-group-item" style="background-color:#22DDA4;">Zona Urbana: <?php echo $ue2_value?>% </li>
                      <li class="list-group-item" style="background-color:#67A686;">Zona Rural: <?php echo $zona_rural02?>%</li>
                      <li class="list-group-item" style="background-color:#B0D54B;">Não Atendidas: <?php echo $natendidas02?>%</li>
                    </ul>
                </span>
            </div>            
            <div>
                O índice de atendimento de esgoto por rede de esgotamento sanitário no 
                município é de <?php echo $ue1_value?>%, sendo este índice de 
                <?php echo $ue2_value?>% na zona urbana e <?php echo ($ue1_value-$ue2_value)?>% 
                na zona rural. Assim, existe um montante de <?php echo (100-$ue1_value)?>%  
                da população a ser atendida para se alcançar universalização deste serviço. 
                Outras formas de esgotamento são utilizadas além da rede, como fossa séptica, 
                fossa rudimentar entre outros. As soluções individualizadas somam <?php echo $ue3_value?>%, 
                sendo <?php echo $ue4_value?>% referentes à população urbana. <br>
                O maior desafio para essa componente do saneamento é garantir que toda a 
                população tenha acesso a uma solução adequada para a destinação das excretas
                e das águas servidas. Assim, a universalização dos banheiros e sanitários
                deve seguir simultânea às intervenções necessárias à retirada de lançamento
                de esgotos não tratados nos corpos hídricos e o lançamento a céu aberto das
                águas servidas. Para tanto, é necessário observar o PMSB com seus 
                programas, projetos e ações, a fim de atingir o acesso universal dessa 
                componente do saneamento básico. <br> 
                <?php if ($ue1_value < 100):?>
                A partir desses dados, demonstra-se que o município terá que investir na 
                ampliação da cobertura da coleta de esgotos sanitários, devendo, para tanto, 
                observar o PMSB com seus programas, projetos e ações, a fim de atingir o 
                acesso universal. Nesse sentido, o município deve considerar o mais adequado 
                modelo de prestação de serviço, a importância do uso de modelos tecnológicos 
                adequados, bem como nas oportunidades que podem surgir com o reuso dos 
                efluentes. <br>
                <?php elseif ($ua1_value == 100): ?>
                A partir desses dados, demonstra-se que o município conseguiu investir na 
                ampliação da cobertura do esgotamento sanitário e, portanto, alcançar a 
                universalização do acesso. Porém, sempre se deve acompanhar o PMSB a fim de 
                ampliar a oferta desse serviço simultâneo à dinâmica populacional.  <br>
                <?php endif; ?>
            </div>
            <h4>Resíduos Sólidos</h4>
            <div id="graph03" class="chartz">
                <?php
                    $data03 = array('0','0','0');
                    $zona_rural03 = ($ur1_value-$ur2_value);
                    $natendidas03 = (100-$ur1_value);
                    $chart03 = array($ur2_value,$zona_rural03,$natendidas03);
                    $data03 = implode(",", $chart03);
                    echo do_shortcode('[wp_charts title="mydough03" type="doughnut" align="aligncenter" margin="5px 5px 5px 5px" colors="#22DDA4,#67A686,#B0D54B" width="350px" height="350px" animation="true" data="'. $data03 .'"]');

                ?>
                <span id="legend02" class="pull-right">
                    <ul class="list-group">
                      <li class="list-group-item" style="background-color:#22DDA4;">Zona Urbana: <?php echo $ur2_value?>% </li>
                      <li class="list-group-item" style="background-color:#67A686;">Zona Rural: <?php echo $zona_rural03?>%</li>
                      <li class="list-group-item" style="background-color:#B0D54B;">Não Atendidas: <?php echo $natendidas03?>%</li>
                    </ul>
                </span>
             </div> 
              <div> 
                O índice de cobertura do serviço de coleta de resíduos sólidos no município é 
                de <?php echo $ur1_value?>%. Para a zona urbana, esta porcentagem é de
                <?php echo $ur2_value?>%, sendo para 
                a zona rural de <?php echo ($ur1_value-ur2_value)?>%. Assim, existe 
                um montante de <?php echo (100-$ur1_value)?>% da população a ser atendida 
                para se alcançar universalização deste serviço.<br>

                <?php if ($ur1_value < 100):?>
                A partir desses dados, demonstra-se que o município terá que investir na 
                ampliação da cobertura da coleta de resíduos sólidos, devendo, para tanto, 
                observar o PMSB com seus programas, projetos e ações, a fim de atingir o 
                acesso universal. Nesse sentido, para a melhoria da qualidade dos serviços
                e para que se consiga satisfazer ao preconizado na Política Nacional de 
                Resíduos Sólidos, tão importante quanto diversificar estratégias de coleta 
                e estabelecer uma destinação final adequada para os resíduos, é estabelecer 
                um programa de educação ambiental e sanitária onde tais estratégias 
                sejam apresentadas à população usuária do serviço de maneira que esta 
                seja informada da importância da mudança de comportamento e dos 
                benefícios correspondentes, que dependerá tanto da ação do poder 
                público como da população usuária dos serviços. <br>
            <?php elseif ($ur1_value == 100): ?>
                A partir desses dados, demonstra-se que o município conseguiu investir 
                na ampliação da cobertura da coleta de resíduos sólidos e, portanto, 
                alcançar a universalização do acesso. Porém, sempre se deve acompanhar 
                o PMSB a fim de ampliar a oferta desse serviço simultâneo à dinâmica 
                populacional, bem como garantir a destinação final adequada e a continua 
                manutenção de uma cultura da minimização da geração de resíduos.  <br>
            <?php endif; ?>
            </div>
            <h4>Manejo de Águas Pluviais</h4>
            <div id="graph04" class="chartz">
                <?php
                    $data04 = array('0','0');
                    $natendidas04 = (100-$ud1_value);
                    $chart04 = array($ud1_value,$natendidas04);
                    $data04 = implode(",", $chart04);
                    echo do_shortcode('[wp_charts title="mydough04" type="doughnut" align="aligncenter" margin="5px 5px 5px 5px" colors="#22DDA4,#B0D54B" width="350px" height="350px" animation="true" data="'. $data04 .'"]');

                ?>
                <span id="legend02" class="pull-right">
                    <ul class="list-group">
                      <li class="list-group-item" style="background-color:#22DDA4;">Vias Totais: <?php echo $ud1_value?>% </li>
                      <li class="list-group-item" style="background-color:#B0D54B;">Não Atendidas: <?php echo $natendidas04?>%</li>
                    </ul>
                </span>
             </div> 
            <div>
                O índice de atendimento de drenagem urbana no município é de <?php echo $ud1_value?>%, 
                restando ainda cerca de <?php echo (100-$ud1_value)?>% das vias e ruas para serem 
                atendidas com esse serviço, ação necessária à universalização do acesso.<br>
                Além da infraestrutura de micro e macrodrenagem o gerenciamento da água 
                de chuva que escoa no meio urbano com soluções de prevenção é importante 
                para minimizar os riscos associados à urbanização desordenada, permitindo 
                um maior avanço na direção de um serviço que possibilita o desenvolvimento 
                urbano de forma harmônica, articulada e sustentável.
            </div>

            <h2>Tecnologia Apropriada</h2>
            <div>
                Segundo os princípios fundamentais, constantes nos incisos V e VIII do art. 2º da 
                Lei Nacional do Saneamento Básico, os métodos, as técnicas e os processos, entendidos aqui 
                como tecnologias apropriadas, devem considerar as peculiaridades locais e regionais e a 
                capacidade de pagamento dos usuários (Plansab, 2011). <br>
                Tecnologia apropriada é uma tecnologia baseada em conhecimentos técnicos e experiências 
                práticas, visando trabalhar com a realidade local e de preferência com os materiais que mais 
                facilmente se obtenha, sempre em busca de aperfeiçoamento para melhor atender às comunidades e 
                aos objetivos de promoção da saúde pública e proteção ambiental.<br>
                Além das características acima, para considerar-se uma tecnologia apropriada deve-se observar 
                ainda: baixo investimento por posto de trabalho, baixo capital investido por unidade produzida, 
                potencial de geração de empregos, simplicidade organizacional, pequena escala de produção, alto 
                grau de adaptabilidade ao ambiente sociocultural, auto-suficiência local e regional, economia no 
                uso de recursos naturais, preferência pelo uso de recursos renováveis e controle social (RODRIGUES; BARBIERI, 2008).<br>
                Assim, para análise desta categoria se utiliza a dimensão qualitativa, onde se avalia 
                a solução adotada em cada região do município a fim de verificar se a tecnologia adotada é a adequada 
                para a realidade vivenciada pelos usuários.<br>

                <h4>Abastecimento de Água</h4>
                Um Sistema de Abastecimento de Água pode ser concebido e projetado para atender a pequenos povoados 
                ou a grandes cidades, variando nas características e no porte de suas instalações. <br>
                As soluções individuais de abastecimento são mais comumente usadas em locais onde a população 
                vive dispersa no território. Nesse caso, normalmente se utiliza mananciais subterrâneos (com bombeamento)
                e/ou água de chuva (armazenamento em cisternas), fontes de água onde a potabilidade é mais segura. 
                No caso da utilização de mananciais superficiais para soluções individuais o controle da qualidade
                do manancial e o uso de técnicas caseiras de tratamento são fundamentais para a prevenção de doenças. <br>
                Além disso, as soluções individuais podem ser utilizadas como forma de complementação do uso da 
                água em diferentes atividades, a exemplo de jardinagem, lavagem de áreas, entre outros, diminuindo
                a utilização de água tratada para usos que exigem menor potabilidade. <br>

                A(s) solução(ões) de abastecimento de água adotada(s) no município é (são):<br>
                <?php if(count($ta1_value) == 2 ):?>
                Solução Coletiva e Solução Individualizada<br>
                <h5>Descrição do Gestor: 
                <?php echo $ta1_descreva_value; ?></h5><br> 

                <?php    elseif (count($ta1_value) == 1
                    &&(strcasecmp($ta1_value[0],'Solução Coletiva') == 0 || strcasecmp($ta1_value[0],'Solução Individualizada')==0) ):
                    echo $ta1_value[0];?><br>
                    <h5>Descrição do Gestor:
                    <?php echo $ta1_descreva_value;?></h5><br>

                    <?php elseif (count($ta1_value) == 1 && strcasecmp($ta1_value[0], 'Nenhuma') == 0):
                    echo $ta1_value[0];?><br>
                <?php endif; ?>



                <h4>Esgotamento Sanitário</h4>
                Um Sistema de Esgotamento Sanitário pode ser concebido e projetado para atender a pequenos povoados
                ou a grandes cidades, variando nas características e no porte de suas instalações. <br>
                As soluções individuais de esgotamento são mais comumente usadas em locais onde a população vive 
                dispersa no território, ou quando o subsolo do território tem características que privilegiam esse tipo de
                solução. Ainda, em se tratando de soluções individuais de esgotamento sanitário, além das variações entre
                uso da água para transporte das excretas ou não, no caso dos sanitários secos, a segregação entre as águas
                cinzas e as águas do vaso sanitário e a integração dessas soluções com atividades de reuso em agricultura
                são fundamentais para a colaboração com a sustentabilidade ambiental no saneamento.  <br>
                Nesse caso, a prática do reuso na agricultura pode e deve ser replicada para os sistemas coletivos também, 
                que com esse objetivo, não poderão receber efluentes industriais, já que esses, normalmente, trazem substâncias 
                que exigem um maior rigor na destinação do efluente para atividades agrícolas, o que pode tornar a prática de 
                reuso agrícola inviável economicamente. <br>
                A(s) solução(ões) de esgotamento sanitário adotada(s) no município é (são):<br>

                <?php if(count($te1_value) == 2  ):?>
                Solução Coletiva e Solução Individualizada<br>
                <h5>Descrição do Gestor: 
                <?php echo $te1_descreva_value; ?></h5> <br> 

                <?php    elseif (count($te1_value) == 1
                    &&(strcasecmp($te1_value[0],'Solução Coletiva') == 0 || strcasecmp($te1_value[0],'Solução Individualizada')==0) ):
                    echo $te1_value[0];?><br>
                    <h5>Descrição do Gestor: 
                    <?php echo $te1_descreva_value;?></h5><br>

                    <?php elseif (count($te1_value) == 1 && strcasecmp($te1_value[0], 'Nenhuma') == 0):
                    echo $ta1_value[0];?><br>
                <?php endif; ?>

                <h4>Resíduos Sólidos</h4>
                Os resíduos sólidos constituem problema sanitário de importância, quando não recebem o manejo adequado. No 
                caso da componente de resíduos sólidos o uso de tecnologias apropriadas se relaciona às diferentes etapas do 
                serviço. Deve-se desde a concepção planejar as melhores estratégias para cada região do município, como os 
                equipamentos de coleta (carroças, carro de mão, caminhões, pontos de coleta voluntária, etc). Implantação de 
                coleta seletiva, implantação de soluções de disposição final ambientalmente adequadas, inserção de cooperativas 
                de catadores de materiais reaproveitáveis de baixa renda, entre outros. <br>
                Assim, as estratégias adotadas para a prestação desse serviço é de extrema importância para um futuro mais 
                voltado às questões socioambientais no saneamento. <br>

                A(s) solução(ões) para manejo de resíduos sólidos adotada(s) no município é (são):<br>
                <?php if(count($tr1_value) == 2 ):?>
                Solução Coletiva e Solução Individualizada<br>
                <h5>Descrição do Gestor: 
                <?php echo $tr1_descreva_value; ?></h5> <br> 

                <?php    elseif (count($tr1_value) == 1
                    &&(strcasecmp($tr1_value[0],'Solução Coletiva') == 0 || strcasecmp($tr1_value[0],'Solução Individualizada')==0)):
                    echo $tr1_value[0];?><br>
                    <h5>Descrição do Gestor: 
                    <?php echo $tr1_descreva_value;?></h5><br>

                    <?php elseif (count($tr1_value) == 1 && strcasecmp($tr1_value[0], 'Nenhuma') == 0):
                    echo $tr1_value[0];?><br>
                <?php endif;?>

                No município, 
                <?php if (strcasecmp($tr2_value,'Não')==0): ?>
                não
                <?php endif; ?> 
                existe coleta seletiva do lixo
                <?php if (strcasecmp($tr2_value,'Não')==0): ?>.<br>
                <?php else: ?>  
                , que acontece:<br>
                <?php endif;?>
                <h5>Descrição do Gestor: 
                <?php echo $tr2_descreva_value?></h5>
                <h4>Manejo de Águas Pluviais</h4>
                O uso de tecnologias apropriadas no manejo das águas de chuva e drenagem urbana tem relação direta com a 
                utilização de medidas preventivas de detenção e/ou retenção de escoamentos. Essas medidas devem ser implantadas 
                tanto nas áreas particulares (lotes que sofrem modificações a partir da construção de edificações) quanto nas 
                áreas públicas (praças, vias públicas, leitos de rios, lagoas, edificações públicas). Nesse sentido, as medidas 
                preventivas devem estar associadas aos sistemas públicas de microdrenagem - sistema de escoamento das águas 
                pluviais pelas vias das áreas urbanizadas -, e de macrodrenagem - sistema natural de drenagem, ou seja, os 
                cursos de água estruturados pela natureza nos pontos mais baixos dos terrenos-, dessa maneira é possível 
                No município, existe(m) a(s) seguinte(s) infraestrutura(s) básica(s) de sistema de drenagem:<br>

                <?php if(count($td1_value) == 2 ):?>
                Sistema Microdrenagem e Sistema de Macrodrenagem<br>
                <h5>Descrição do Gestor: 
                <?php echo $td1_descreva_value; ?></h5> <br> 

                <?php    elseif (count($td1_value) == 1
                    &&(strcasecmp($td1_value[0],'Sistema Microdrenagem') == 0 || strcasecmp($td1_value[0],'Sistema de Macrodrenagem')==0) ):
                    echo $td1_value[0];?><br>
                    <h5>Descrição do Gestor: 
                    <?php echo $td1_descreva_value;?></h5><br>

                    <?php elseif (count($td1_value) == 1 && strcasecmp($td1_value[0], 'Nenhuma') == 0):
                    echo $td1_value[0];?><br>
                <?php endif;?>

                Com relação a soluções sustentáveis de prevenção, no município, encontramos as seguintes:<br>
                <?php if(count($td2_array) == 5):
                for ($i=0; $i < count($td2_array); $i++){
                 echo $td2_array[$i];
                 if($i+1 != count($td2_array)):
                    echo ', ';
                endif;
                }?><br>
                <h5>Descrição do Gestor: 
                <?php echo $td1_descreva_value; ?> </h5><br> 

                <?php   elseif (count($td2_array) != 1 && !in_array('Nenhuma', $td2_array)):
                for ($i=0; $i < count($td2_array); $i++){
                 echo $td2_array[$i];
                 if($i+1 != count($td2_array)):
                    echo ', ';
                endif;
                }?><br>
                <h5>Descrição do Gestor: 
                <?php echo $td2_descreva_value;?></h5><br>

                <?php elseif (count($td2_array) == 1 && strcasecmp($td2_array[0], 'Nenhuma') == 0):
                echo $td2_array[0]?><br>
                <?php endif;?>
            </div>

            <h2>Qualidade dos Serviços Prestados</h2>
            <div>
                A qualidade da solução ou dos serviços públicos de saneamento básico é
                aquela adequada ao atendimento das suas funções no ponto de vista
                sanitário e ambiental (PLANSAB, 2011). </br> O artigo 43 da Lei nº.
                11.445/2007 traz como condições mínimas de qualidade na prestação dos
                serviços públicos de saneamento básico: a regularidade, a
                continuidade, os aspectos relativos aos produtos oferecidos, o
                atendimento dos usuários e os relativos às condições operacionais e de
                manutenção dos sistemas, de acordo com as normas regulamentares e
                contratuais (PLANSAB, 2011). Assim, os indicadores dessa categoria
                pretendem analisar as condições de qualidade na prestação dos serviços
                de saneamento.
            </div>

            <h2>Qualidade da Água</h2>
            <div>
                Para análise da qualidade da água de sistemas e soluções coletivos de
                abastecimento se utiliza como referência a Portaria MS nº 2914/ 2011,
                onde são estabelecidos os padrões de potabilidade e valores máximos e
                mínimos para os diferentes parâmetros.</br> Em relação à conformidade
                das amostras da água coletadas para os parâmetros de cloro residual,
                turbidez e coliforme totais, tem-se:</br>

                <h4>Cloro Residual</h4>
                <div id="graph05" class="chartz">
                <?php
                    $data05 = array('0','0');
                    $chart05 = array($qa1_value,$qa2_value);
                    $data05 = implode(",", $chart05);
                    echo do_shortcode('[wp_charts title="mydough05" type="doughnut" align="aligncenter" margin="5px 5px 5px 5px" colors="#22DDA4,#B0D54B" width="350px" height="350px" animation="true" data="'. $data05 .'"]');

                ?>
                    <span id="legend02" class="pull-right">
                        <ul class="list-group">
                            <li class="list-group-item" style="background-color:#22DDA4;">Em conformidade: <?php echo $qa1_value?>% </li>
                            <li class="list-group-item" style="background-color:#B0D54B;">Fora do padrão: <?php echo $qa2_value?>%</li>
                        </ul>
                    </span>
                </div> 
                O índice de conformidade da quantidade de amostra para cloro residual ficou em <?php echo $qa1_value;?>%, 
                sendo, portanto, a incidência das análises fora do padrão de <?php echo $qa2_value; ?>%. </br>
                Portanto, nesse ano <?php if ($qa1 >= 95):?> o padrão de potabilidade verificado pelos valores das amostras coletadas pelo prestador de 
                serviço está dentro do que preconiza a Portaria MS 2914/2011.<?php elseif ($qa1 < 95): ?>O padrão de potabilidade verificado pelos valores das amostras coletadas pelo prestador de 
                serviço está apontando para um valor de inconformidade maior que o permitido pela Portaria 
                MS 2914/2011, devendo, portanto, se fazer um levantamento sobre as possíveis causas dessas
                alterações.
                <?php endif; ?>
                </br>

                <h4>Turbidez</h4>
                <div id="graph06" class="chartz">
                <?php
                    $data06 = array('0','0');
                    $chart06 = array($qa3_value,$qa4_value);
                    $data06 = implode(",", $chart06);
                    echo do_shortcode('[wp_charts title="mydough06" type="doughnut" align="aligncenter" margin="5px 5px 5px 5px" colors="#22DDA4,#B0D54B" width="350px" height="350px" animation="true" data="'. $data06 .'"]');

                ?>
                    <span id="legend02" class="pull-right">
                        <ul class="list-group">
                            <li class="list-group-item" style="background-color:#22DDA4;">Em conformidade: <?php echo $qa3_value?>% </li>
                            <li class="list-group-item" style="background-color:#B0D54B;">Fora do padrão: <?php echo $qa4_value?>%</li>
                        </ul>
                    </span>
                </div> 

                Para turbidez, o índice de conformidade foi de <?php echo $qa3_value; ?>%, estando 
                <?php echo $qa4_value; ?>% das amostras fora do padrão.</br> Portanto, nesse
                ano <?php if ($qa3 >= 95): ?> o padrão de potabilidade verificado pelos valores das amostras coletadas pelo prestador de 
                serviço está dentro do que preconiza a Portaria MS 2914/2011.<?php elseif ($qa3 < 95): ?>
                o padrão de potabilidade verificado pelos valores das amostras coletadas pelo prestador de 
                serviço está apontando para um valor de inconformidade maior que o permitido pela Portaria 
                MS 2914/2011, devendo, portanto, se fazer um levantamento sobre as possíveis causas dessas
                alterações.
                <?php endif; ?>
                </br>

                <h4>Coliformes Totais</h4>
                <div id="graph07" class="chartz">
                <?php
                    $data07 = array('0','0');
                    $chart07 = array($qa5_value,$qa6_value);
                    $data07 = implode(",", $chart07);
                    echo do_shortcode('[wp_charts title="mydough07" type="doughnut" align="aligncenter" margin="5px 5px 5px 5px" colors="#22DDA4,#B0D54B" width="350px" height="350px" animation="true" data="'. $data07 .'"]');

                ?>
                    <span id="legend02" class="pull-right">
                        <ul class="list-group">
                            <li class="list-group-item" style="background-color:#22DDA4;">Em conformidade: <?php echo $qa5_value?>% </li>
                            <li class="list-group-item" style="background-color:#B0D54B;">Fora do padrão: <?php echo $qa6_value?>%</li>
                        </ul>
                    </span>
                </div>
                Já para coliformes totais, este índice de conformidade foi de <?php echo $qa5_value; ?>% no  
                período, enquanto a incidência das análises fora do padrão registrou <?php echo $qa6_value; ?>%.</br>
                Portanto, nesse ano 
                <?php if ($qa5 >= 95): ?>
                o padrão de potabilidade verificado pelos valores das amostras coletadas pelo prestador de 
                serviço está dentro do que preconiza a Portaria MS 2914/2011.
                <?php elseif ($qa5 < 95): ?>
                o padrão de potabilidade verificado pelos valores das amostras coletadas pelo prestador de 
                serviço está apontando para um valor de inconformidade maior que o permitido pela Portaria 
                MS 2914/2011, devendo, portanto, se fazer um levantamento sobre as possíveis causas dessas
                alterações.
                <?php endif; ?>
                </br>
            </div>

            <h2>Cortesia no Atendimento ao Usuário</h2>
            <div>
                Foram registradas pela prestadora dos serviços, no período, <?php echo $qc1; ?> para os serviços de 
                abastecimento de água. O que indica que a prestação do serviço de abastecimento de água está
                <?php if ($qc1 <= 50): ?>
                excelente.
                <?php elseif ($qc1 > 50 && $qc1 <= 100): ?>
                bom.
                <?php elseif ($qc1 > 100 && $qc1 <= 150):?>
                mediano.
                <?php elseif ($qc1 > 150): ?>
                ruim.
                <?php endif;?>
                <br>

                Para os serviços de esgotamento sanitário foram registrados no período, <?php echo $qc2;?> pela prestadora 
                dos serviços, O que indica que a prestação do serviço de esgotamento sanitário está 
                <?php if ($qc2 <= 50): ?>
                excelente.
                <?php elseif ($qc2 > 50 && $qc2 <= 100): ?>
                bom.
                <?php elseif ($qc2 > 100 && $qc2 <= 150): ?>
                mediano.
                <?php elseif ($qc2 > 150): ?>
                ruim.
                <?php endif; ?>
                <br>
            </div>
            <h2>Regularidade/ Continuidade</h2>
            <div>
                A duração média das paralisações foi de <?php echo $qr1; ?> horas/paralisação, enquanto que a 
                duração média das intermitências foi de <?php echo $qr2; ?> horas/interrupção.</br>
                A duração média dos reparos de extravasamentos de esgotos foi de <?php echo $qr3; ?> horas/extravasamento,
                e houve <?php echo $qr4; ?> extravasamento/km por extensão de rede.</br>
            </div>

            <h2>Segurança</h2>
            <div>
                O nível de segurança contra contaminação dos mananciais aquíferos
                (superficial e subterrâneo) foi de <?php echo $qs1_value; ?> %.</br>

                <?php if ($qs1 == 100): ?>
                O indicador aponta para a prática de uma política de proteção de mananciais ampla e com 
                amplitude adequada, já que, é ideal para a perpétua melhoria do abastecimento que os mananciais
                utilizados para abastecimento humano sempre sejam protegidos pelo prestador do serviço bem como
                pelo poder concedente do serviço.
                <?php elseif ($qs1 < 100): ?>
                O indicador aponta para a prática de uma política de proteção de mananciais ainda deficiente, 
                já que a amplitude ideal para a perpétua melhoria do abastecimento é que os mananciais utilizados
                para abastecimento humano sempre sejam protegidos quer seja por ações do prestador do serviço
                bem como do poder concedente do serviço.
                <?php endif; ?>
                <br>
                <?php echo $qs2; ?> ocorrências/mês foram registradas quanto a vandalismo, roubo/furto e depredações.
            </div>

            <h2>Condições técnico-operacionais e de manutenção</h2>
            <div>
                <ul>
                    <li>
                        O cadastro técnico atualizado da rede de abastecimento de água é de <?php echo $qt1_value;?> % do total, 
                        sendo este valor de <?php echo $qt2_value; ?> %
                        para esgotamento, de <?php echo $qt3_value; ?> % para cadastro do sistema de drenagem
                        e de <?php echo $qt4_value; ?> % para o cadastro da rota de coleta de resíduo sólido.
                    </li>
                    <li>
                        O grau de qualificação técnica dos profissionais envolvidos é de <?php echo $qt5_value;?> funcionários
                        de nível superior, <?php echo $qt6; ?> funcionários de (nível técnico), e <?php echo $qt7;?>
                        funcionários que  receberam alguma qualificação de saneamento e meio ambiente.
                    </li>
                    <li>
                        Em relação à monitorização dos serviços, foi informado pelo gestor que
                        <?php if ($qt8 == 'NÃO'): ?>
                            não
                        <?php endif; ?>
                            são empregadas técnicas de monitorização das unidades de tratamento.</br>
                        <?php if ($qt8 == 'SIM'): ?>
                            Essas técnicas de monitorização constituem de: <?php echo $qt8_quais_value; ?> <!-- ou $qt8_quais_label? -->
                        <?php endif; ?>
                    </li>
                    <li>
                        As unidades de tratamento possuem
                        <?php echo $qt9; ?> de uso dos recursos hídricos em vigência.</br>
                        <?php if ($qt9 == 'outorga e/ou licença'): ?>
                            Essas técnicas de monitorização se constituem : 
                            <?php echo $qt8_quais_value; ?> <!-- mesmo do 8, não identifiquei quais para qt9 -->
                        <?php endif; ?>
                    </li>
                    <li>
                        A regularidade na manutenção dos sistemas é de <?php echo $qt10; ?> dias.
                    </li>
                </ul>
                    As atividades operacionais-técnicas dos serviços 
                    <?php echo $qt11; ?> as normas, resoluções referentes 
                    às suas especificidades.
            </div>
            <h2>Modicidade das Tarifas</h2>
            <div id="graph08" class="chartz">
                <?php
                    $data08 = array('0','0');
                    $total08 = (100-$qm1_value);
                    $chart08 = array($qm1_value,$total08);
                    $data08 = implode(",", $chart08);
                    echo do_shortcode('[wp_charts title="mydough08" type="doughnut" align="aligncenter" margin="5px 5px 5px 5px" colors="#22DDA4,#B0D54B" width="350px" height="350px" animation="true" data="'. $data08 .'"]');

                ?>
                    <span id="legend02" class="pull-right">
                        <ul class="list-group">
                            <li class="list-group-item" style="background-color:#22DDA4;">Economias Residencias: <?php echo $qm1_value?>% </li>
                            <li class="list-group-item" style="background-color:#B0D54B;">Demais Economias: <?php echo $total08?>%</li>
                        </ul>
                    </span>
                </div>

            <div>
                A participação das economias residenciais de água no total das economias de água é de 
                <?php echo $qm1_value; ?> %. O impacto da tarifa social na renda dos usuários 
                é de <?php echo $qm2_value; ?> %, enquanto o 
                índice de inadimplência das contas de água é de <?php echo $qm3_value; ?> %.
            </div>
            <div id="graph09" class="chartz">
                <?php
                    $data09 = array('0','0');
                    $total09 = (100-$qm3_value);
                    $chart09 = array($qm3_value,$total09);
                    $data09 = implode(",", $chart09);
                    echo do_shortcode('[wp_charts title="mydough09" type="doughnut" align="aligncenter" margin="5px 5px 5px 5px" colors="#22DDA4,#B0D54B" width="350px" height="350px" animation="true" data="'. $data09 .'"]');

                ?>
                    <span id="legend02" class="pull-right">
                        <ul class="list-group">
                            <li class="list-group-item" style="background-color:#22DDA4;">Inadimplência: <?php echo $qm3_value?>% </li>
                            <li class="list-group-item" style="background-color:#B0D54B;">Ativos: <?php echo $total09?>%</li>
                        </ul>
                    </span>
                </div>
        </div>
    </div>
</div>


</section>
</article>



<?php endif; ?>
<?php get_footer(); ?>