    <style type="text/css">
        /* Tabs*/
        .bgtab {
            margin-top: 20px;
        }
        #tabs .section-title {
            text-align: center;
            color: #007b5e;
            margin-bottom: 20px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 33px;
        }

        #tabs {
            color: #5985d7;
        }

        #tabs h6.section-title {
            color: #5985d7;
        }

        #tabs .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #f3f3f3;
            background-color: transparent;
            border-color: transparent transparent #f3f3f3;
            border-bottom: 4px solid !important;
            font-size: 20px;
            font-weight: bold;
        }

        #tabs .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            color: #5985d7;
            font-size: 20px;
        }

        #nav-tab {
            border-bottom: none;
        }

        #rates .option {
            margin-top: 10px;
        }

        #rates .print-tab {
            box-shadow: unset;
        }

        #rates .print-tab .print-tab-content>div {
            padding: 22px 0px;
        }

        #rates .info {
            padding: 0px;
            box-sizing: border-box;
        }

        .info table {
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: 0;
            padding: 0;
            width: 100%;
            table-layout: fixed;
        }

        .info .table td {
            padding: 1.75rem 0rem;
            text-align: center;
        }

        .info .text {
            font-size: 0.75rem;
        }

        .info ul {
            list-style: none;
        }

        .info ul li {
            box-sizing: border-box;
            float: left;
            width: 33.33%;
            margin-bottom: 50px;
            position: relative;
        }

        .info_title {
            background: #5A8FC5 none repeat scroll 0 0;
            box-sizing: border-box;
            color: #fff;
            float: left;
            font-size: 15px;
            padding: 10px 18px;
            width: 100%;
            text-transform: uppercase;
        }

        .info_select {
            border-bottom: 1px solid #9c9c9c;
            box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.2), 0 4px 10px 0 rgba(0, 0, 0, 0.19);
            position: relative;
            float: left;
            max-width: 292px;
            width: 100%;
            cursor: pointer;
            box-sizing: border-box;
            min-height: 180px;
        }

        .info_titlecontent {
            width: 100%;
            float: left;
            padding: 10px 18px;
            box-sizing: border-box;
            position: relative;
        }

        #rates .print-tab .print-tab-content>div.view {
            min-height: 400px;
        }

        .info_rs {
            background: #fff;
            border: 1px solid #818181;
            border-radius: 5px;
            box-sizing: border-box;
            cursor: pointer;
            float: right;
            line-height: 20px;
            padding: 9px 15px;
            text-align: center;
            width: auto;
            position: absolute;
            bottom: 13px;
            right: 20px;
        }



        .info ul li .info_select:hover {
            box-shadow: 0 5px 10px #9c9c9c;
            border-bottom-color: #3974e0;
        }

        .info_select :hover .info_rs {
            color: white;
            background-color: rgb(121, 181, 241);
            border-color: rgb(121, 181, 241);
        }

        @media only screen and (max-width: 800px) {
            .info ul {
                width: 100%;
            }

            .info ul li {
                width: 100%;
                margin-bottom: 20px;
            }

            .print-tab .print-tab-content>div {
                box-shadow: unset;
            }

            #opt_head h2 {
                font-size: 25px;
            }

            #rates .option {
                margin-top: 4px;
            }
        }

        @media only screen and (min-width: 1400px) {

            #rates .print-tab ul.print-tab-menu>li {
                width: 12%;
            }
        }

        @media only screen and (max-width: 800px) {

            #flip-scroll .cf:after {
                visibility: hidden;
                display: block;
                font-size: 0;
                content: " ";
                clear: both;
                height: 0;
            }

            #table_flip tr:nth-child(odd) {

                background-color: #f2f2f2;
            }

            #flip-scroll * html .cf {
                zoom: 1;
            }

            #flip-scroll *:first-child+html .cf {
                zoom: 1;
            }

            #flip-scroll table {
                width: 100%;
                border-collapse: collapse;
                border-spacing: 0;
            }


            #flip-scroll td {
                margin: 0;
                vertical-align: top;
            }

            #flip-scroll table {
                display: block;
                position: relative;
                width: 100%;
            }


            #flip-scroll tbody {
                display: block;
                width: auto;
                position: relative;
                overflow-x: auto;
                white-space: nowrap;
            }

            #flip-scroll thead tr {
                display: block;
            }



            #flip-scroll tbody tr {
                display: inline-block;
                vertical-align: top;
            }

            #flip-scroll td {
                display: block;
                min-height: 1.25em;
                text-align: center;
            }


            /* sort out borders */


            #flip-scroll td {
                border-left: 0;
                border-right: 0;
                border-bottom: 0;
            }



            #flip-scroll th:last-child,
            #flip-scroll td:last-child {
                border-bottom: 1px solid #babcbf;
            }
        }
    </style>
        <div class="container-fluid">
        <div id="rates">
            <div class="bgtab">
                <div class="container">
                    <div class="row" id="opt_head">
                        <div class="col-md-6">
                            <h2>Recharge Plans</h2>
                        </div>
                     
                    </div>
                    <div class="print-tab" data-tab-id="1">
                        <ul class="print-tab-menu" style="text-align:center;">
                            <li data-tab-menu="tab1"><a>Voice Plan</a></li>
                            <li data-tab-menu="tab2"><a>Data</a></li>
                            <li data-tab-menu="tab3"><a>SMS</a></li>
                        </ul>
                        <div class="print-tab-content">
                            <div data-tab-content="tab1">
                                <div class="info">

                                    <section id="flip-scroll">
                                        <table class="table table-hover table-condensed cf" id="table_flip">
                                            <thead>
                                              <tr>
                                                <th>Pack</th>
                                                <th>Validity</th>
                                                <th>Price</th>
                                                <th>Activation</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($list as $value) {
                                                if ($value['FREE_UNIT_TYPE'] == 1) {        
                                                ?>
                                                <tr>
                                                    <td><?php echo $value['OFR_NAME']; if ($value['IF_CYCLE']==1) {
                                                        echo ' (Auto Renewal)';
                                                        }   ?></td>
                                                    <td><?php echo $value['LIFE_DAYS'] ?></td>
                                                    <td><?php $data = ($value['PACAKGE_FEE']/100);
                                                       setlocale(LC_MONETARY, 'en_AU');
                                                        $data = money_format('%!i', $data);
                                                        echo $data; 
                                                        ?> AUD</td>
                                                    <td><a href="<?php echo base_url()."home/activateOffer/".$value['OFR_ID'] ?>"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap"
                                                            type="submit">Activate</button></a></td>
                                                </tr>
                                            <?php } } ?>
                                            </tbody>
                                        </table>

                                    </section>
                                </div>
                            </div>
                            <div data-tab-content="tab2">
                                <div class="info">
                                    <section id="flip-scroll">
                                        <table class="table table-hover table-condensed cf" id="table_flip">
                                            <thead>
                                              <tr>
                                                <th>Pack</th>
                                                <th>Validity</th>
                                                <th>Price</th>
                                                <th>Activation</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($list as $value) {
                                                if ($value['FREE_UNIT_TYPE'] == 3){        
                                                ?>
                                                <tr>
                                                    <td><?php echo $value['OFR_NAME']; if ($value['IF_CYCLE']==1) {
                                                        echo ' (Auto Renewal)';
                                                        }   ?></td>
                                                    <td><?php echo $value['LIFE_DAYS'] ?></td>
                                                    <td><?php $data = ($value['PACAKGE_FEE']/100);
                                                       setlocale(LC_MONETARY, 'en_AU');
                                                        $data = money_format('%!i', $data);
                                                        echo $data; 
                                                        ?> AUD</td>
                                                    <td><a href="<?php echo base_url()."home/activateOffer/".$value['OFR_ID'] ?>"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap"
                                                            type="submit">Activate</button></a></td>
                                                </tr>
                                                <?php } } ?>
                                            </tbody>
                                        </table>

                                    </section>

                                </div>
                            </div>
                            <div data-tab-content="tab3">
                                <div class="info">
                                    <section id="flip-scroll">
                                        <table class="table table-hover table-condensed cf" id="table_flip">
                                            <thead>
                                              <tr>
                                                <th>Pack</th>
                                                <th>Validity</th>
                                                <th>Price</th>
                                                <th>Activation</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($list as $value) {
                                                if ($value['FREE_UNIT_TYPE'] == 2){        
                                            ?>
                                            <tr>
                                                <td><?php echo $value['OFR_NAME']; if ($value['IF_CYCLE']==1) {
                                                    echo ' (Auto Renewal)';
                                                    }   ?></td>
                                                <td><?php echo $value['LIFE_DAYS'] ?></td>
                                                <td><?php $data = ($value['PACAKGE_FEE']/100);
                                                       setlocale(LC_MONETARY, 'en_AU');
                                                        $data = money_format('%!i', $data);
                                                        echo $data; 
                                                        ?> AUD</td>
                                                <td><a href="<?php echo base_url()."home/activateOffer/".$value['OFR_ID'] ?>"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap"
                                                        type="submit">Activate</button></a></td>
                                            </tr>
                                            <?php } } ?>
                                            </tbody>
                                        </table>

                                    </section>

                                </div>
                            </div>



                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript">
    $('table').DataTable( {
        searching: false,
        paging: false,
        info: false
      } );
    </script>