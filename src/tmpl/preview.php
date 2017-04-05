<!--
 * Project: plugin-complainprint
 *
 * Author: Farhan Wazir
 * Email: farhan.wazir@gmail.com, seejee1@gmail.com
 * Date: 3/30/2017
 * Time: 4:38 AM
 *
 *
 *
 * This project file is not redistributeable without permissions.
 * For more details about redistribution and reselling, contact to provided author details.
 -->

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="<?php echo sys()->getLocale(); ?>">

<head>
    <title>Print</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <style>
        html{
            font-size: 0.7em;
        }
    </style>
</head>

<body class="skin-blue layout-top-nav ">
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            <div class="print-container">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="text-center">
                            <?php echo trans('complainprint::complainprint.title'); ?><br>
                            <small><?php echo trans('complainprint::complainprint.title'); ?></small>
                        </h4>
                    </div>
                </div>
                <div class="print-header">
                    <!-- Print container header -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-outline-secondary">
                                <div class="card-block">
                                    <!-- Card content -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h4 class="card-title"><?php echo trans('complainprint::complainprint.logo'); ?></h4>
                                        </div>
                                        <div class="col-sm-4">
                                            <p>
                                                <label><?php echo trans('complainprint::complainprint.label.complain_no'); ?></label> <?php echo $item->complain_no; ?> <br>
                                                <label><?php echo trans('complainprint::complainprint.label.date'); ?></label> <?php echo $item->registered_on; ?>
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p>
                                                <label><?php echo trans('complainprint::complainprint.label.status'); ?>:</label> <?php echo $item->state->title; ?> <br>
                                                <label><?php echo trans('complainprint::complainprint.label.external_complain_no'); ?></label> <?php echo $item->external_ref; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="print-content">
                    <!-- Print container content -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-outline-secondary">
                                <div class="card-block">
                                    <!-- Card content
                                    DATOS GENERALES DEL SOLICITANTE:
                                    NOMBRE: ALEJANDRO DIEZ BARROSO REPIZO
                                    CALLE: ANAXAGORAS       No. EXTERIOR:
                                    COLONIA: 0              C.P.: 3020              TELEFONO:
                                    DELEGACION:             ESTADO:
                                    -->
                                    <!-- Card content -->
                                    <h6 class="card-title"><?php echo trans('complainprint::complainprint.label.general.title'); ?></h6>
                                    <!-- Complainer name -->
                                    <label><?php echo trans('complainprint::complainprint.label.complainer'); ?>:</label> <?php echo $item->user->name; ?>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p>
                                                <label><?php echo trans('complainprint::complainprint.label.location.block'); ?>:</label> <?php echo $item->location->block; ?> <br>
                                                <label><?php echo trans('complainprint::complainprint.label.location.area'); ?>:</label> <?php echo $item->user->area; ?>
                                                <label><?php echo trans('complainprint::complainprint.label.location.city'); ?>:</label> <?php echo config('csys.coverage.data.city'); ?>
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p>
                                                <label><?php echo trans('complainprint::complainprint.label.location.street_number'); ?>:</label> <?php echo $item->user->street_number; ?> <br>
                                                <label><?php echo trans('complainprint::complainprint.label.cp'); ?>:</label> 3020 <br>
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p>
                                                <label><?php echo trans('complainprint::complainprint.label.location.state'); ?>:</label> <?php echo config('csys.coverage.data.state'); ?> <br>
                                                <label><?php echo trans('complainprint::complainprint.label.telephone'); ?>:</label> <?php echo $item->user->mobile; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card card-outline-secondary">
                                <div class="card-block">
                                    <!-- Card content
                                    CARACTERISTICAS DE LA SOLICITUD:
                                    CALLE: ANAXAGORAS           No. EXT.: 1042      No. INT
                                    REFRENCIA:                  ENTRE: SAN BORJA    Y: ANGEL URRAZA
                                    COLONIA: NARVARTE PONIENTE  C.P.: 3020
                                    -->
                                    <!-- Card content -->
                                    <h6 class="card-title"><?php echo trans('complainprint::complainprint.label.location.title'); ?></h6>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p>
                                                <label><?php echo trans('complainprint::complainprint.label.location.block'); ?>:</label> <?php echo $item->location->block; ?> <br>
                                                <label><?php echo trans('complainprint::complainprint.label.location.reference'); ?>:</label> <?php echo $item->location->reference; ?> <br>
                                                <label><?php echo trans('complainprint::complainprint.label.location.area'); ?>:</label> <?php echo $item->user->area; ?>
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p>
                                                <label><?php echo trans('complainprint::complainprint.label.location.street_number'); ?>:</label> <?php echo $item->location->street_number; ?> <br>
                                                <label><?php echo trans('complainprint::complainprint.label.location.street'); ?>:</label> <?php echo $item->location->street; ?><br>
                                                <label><?php echo trans('complainprint::complainprint.label.cp'); ?>:</label> 3020
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p>
                                                <label><?php echo trans('complainprint::complainprint.label.location.no'); ?>:</label> INT <br>
                                                <label><?php echo trans('complainprint::complainprint.label.location.street_another'); ?>:</label> <?php echo $item->location->street_another; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card card-outline-secondary">
                                <div class="card-block">
                                    <!-- Card content
                                    SOLICITUD:
                                    SERVCIO:   LUMINARIA O LUMINARIAS APAGADAS              TIPO DE SERVCIO:   URGENTE
                                    AREA OPERATIVA:   JUD DE ALUMBRADO                      ANEXO:   NO
                                    TIPO DE RECEPCION:   PERSONAL
                                    AREA SOLICITANTE:   VECINOS EN GENERAL.
                                    DESCRIPCIÓN DEL SERVICIO:   SE SOLICITA REPARACIòN DE LUMINARIA EN EL NùMERO 1042 DE LA CALLE DE ANAXàGORAS, ENTRE SAN BORJA Y ANGEL URRAZA, ESTA MUY OBSCURO Y APROVECHAN PARA ROBO DE AUTOPARTES Y ATRANSEUNTE
                                    -->
                                    <!-- Card content -->
                                    <h6 class="card-title"><?php echo trans('complainprint::complainprint.label.detail.title'); ?></h6>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <p>
                                                <label><?php echo trans('complainprint::complainprint.label.detail.category'); ?>:</label> <?php echo $item->category->title; ?> <br>
                                                <label><?php echo trans('complainprint::complainprint.label.detail.operational_area'); ?>:</label> <?php echo $item->location->area; ?> <br>
                                                <label><?php echo trans('complainprint::complainprint.label.detail.requested_through'); ?>:</label> PERSONAL <br>
                                                <label><?php echo trans('complainprint::complainprint.label.detail.requested_area'); ?>:</label> <?php echo $item->location->area; ?> <br>
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p>
                                                <label><?php echo trans('complainprint::complainprint.label.detail.priority'); ?>:</label> <?php echo $item->priority; ?> <br>
                                                <label><?php echo trans('complainprint::complainprint.label.detail.annexed'); ?>:</label> NO
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Complain description -->
                                    <label><?php echo trans('complainprint::complainprint.label.detail.description'); ?>:</label> <?php echo $item->description; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="print-footer">
                    <!-- Print container footer -->
                    <label><?php echo trans('complainprint::complainprint.label.opinion'); ?> <br><br><br><br>

                        <?php echo trans('complainprint::complainprint.label.signature'); ?>: ____________________________________
                        <br><br>
                        <small>
                            <?php echo trans('complainprint::complainprint.disclaimer'); ?>
                            <br><br>
                            <?php echo trans('complainprint::complainprint.official.contacts'); ?>
                        </small>
                </div>
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
</div>

<script>
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
                }/* else {
                    afterPrint();
                }*/
            });
        }

        window.onbeforeprint = beforePrint;
        window.onafterprint = afterPrint;
        window.onload = function(){
            window.print();
        }
    }());
</script>
</body>
</html>