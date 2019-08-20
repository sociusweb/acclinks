  <style type="text/css">
     .dt-buttons{
            display: inline;
        }
        .dt-buttons::before{
            content: 'Export as :';
        }
      .form-group{display: flex;}
      .profile_tab{
        background:white;
      }

      .dataTables_wrapper .dataTables_paginate .paginate_button{
        width:unset !important;
        margin-bottom:0px !important;
      }
      #rates{
          margin:40px 0px;
      }

      .print-tab{
        box-shadow: none;
      }
      .profile_tab_list{
        list-style:none;
        padding-left:0px;
      }
      .profile_tab .prof_li{
        padding:15px;
        box-sizing: border-box;
        border: 1px solid #cccccc;
        }
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
            margin-top: 2%;
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

        #opt_head {
            margin-top: 55px;
            margin-bottom: 15px;
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
    <div class="row" style="margin:0px;">
      <div class="col-md-2" style="background:white;padding:0px;">
        <div class="profile_tab">
          <ul class="profile_tab_list">
            <li class="prof_li"><a href="<?php echo base_url();?>home/account">Account</a></li>
            <li class="prof_li"><a href="<?php echo base_url();?>home/profile">Personal information</a></li>
            <li class="prof_li"><a href="<?php echo base_url();?>home/changepwd">Change Password</a></li>
            <li class="prof_li"><a data-toggle="collapse" href="#collapseExample">Statement<i class="fa fa-caret-down" style="float:right;"></i></a></li>
            <div class="collapse" id="collapseExample">
            <li style="padding:15px 8px 0px;"><a href="<?php echo base_url();?>home/statementvoice"><i class="fa fa-dot-circle-o" style="padding-right:15px;"></i>Statement Voice</a></li>
              <li style="padding:15px 8px 0px;"><a href="<?php echo base_url();?>home/statementdata"><i class="fa fa-dot-circle-o" style="padding-right:15px;"></i>Statement Data</a></li>
              <li style="padding:15px 8px 0px;"><a href="<?php echo base_url();?>home/statementsms"><i class="fa fa-dot-circle-o" style="padding-right:15px;"></i>Statement SMS</a></li>
              <li style="padding:15px 8px 0px;"><a href="<?php echo base_url();?>home/statementrecharge"><i class="fa fa-dot-circle-o" style="padding-right:15px;"></i>Statement Recharge</a></li>
              <li style="padding:15px 8px 0px;"><a href="<?php echo base_url();?>home/statementtransfer"><i class="fa fa-dot-circle-o" style="padding-right:15px;"></i>Statement Transfer</a></li>
          </div>
            <li class="prof_li"><a href="<?php echo base_url();?>home/login">Logout</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-10">
     <div class="container-fluid">
          <div id="rates">
            <div class="bgtab">
                <div class="container">
                    <h2 style="text-align: center;">Tranfer Statement</h2>
                    <div class="print-tab" data-tab-id="1">
                        <ul class="print-tab-menu" style="display: none;">
                            <li data-tab-menu="tab1"><a>Voice</a></li>
                            <li data-tab-menu="tab2"><a>Data Usage</a></li>
                            <li data-tab-menu="tab3"><a>SMS Usage</a></li>
                        </ul>
                        <div class="print-tab-content">
                            <div data-tab-content="tab2">
                                <div class="info">
                                   <!--  <button id="generate-csv">CSV</button> -->
                                    <section id="flip-scroll">
                                        <table id="datastatement" class="table table-hover table-condensed cf" id="table_flip">
                                           <thead>
                                                <tr style="text-align:center">
                                                    <th>Sl no:</th>
                                                    <th>Payment Type</th>
                                                    <th>Payment Time</th>
                                                    <th>Result</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                  <?php
                                                       $i = 0;
                                                      foreach ($transferdetails as $show) {
                                                      ?>
                                                <tr>
                                                    <td><?php echo$i=$i+1; ?></td>
                                                    <td><?php echo $show['TRANSFER_TYPE'];?></td>
                                                    <td><?php $date = new DateTime();
                                                        $date->setTimestamp(strtotime($show['TRANSFER_DATE']));
                                                        echo $date->format('d/m/Y m:i'); ?></td>
                                                    <td><?php echo $show['RESULT'];?></td>
                                                    <td><?php echo $show['AMOUNT'];?></td>
                                                </tr>    
                                                <?php } ?>  
                                            </tbody>
                                        </table>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" id='mobnumber' value="<?php echo $_SESSION['mobnumber_ki'] ?>">
                <input type="hidden" id='fname' value="<?php echo $_SESSION['name_ki'] ?>">
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script type="text/javascript">
          function displayDate()
                    {
                    today=new Date()
                    var month,day,year
                    year=today.getFullYear()
                    month=today.getMonth()
                    date=today.getDate()
                    if((month-3)<=0)
                    year=today.getFullYear()-1
                    var backdate = new Date(year,month-3,date)
                    return backdate;
            }
        var name= document.getElementById('fname').value;
        var number= document.getElementById('mobnumber').value;
        var todays = new Date();
        var dates = todays.getDate()+'-'+(todays.getMonth()+1)+'-'+todays.getFullYear();
        var Enddate = displayDate().getDate()+'-'+(displayDate().getMonth()+1)+'-'+displayDate().getFullYear();
        $('table').DataTable( {
                searching: true,
                paging: true,
                info: false,
                dom: 'Bfrtip',
                buttons: [{
                    extend: 'excelHtml5',
                    autoFilter: true,
                    sheetName: 'Transfer Statement',
                    filename : 'TransferStatement',
                 },{
                extend: 'pdfHtml5',
                messageTop: '',
                filename : 'TransferStatement',
                customize: function ( doc ) {
                    console.log(doc);
                  var cols = [];
                       // cols[0] = {text: 'Name : '+name, alignment: 'left'};
                       cols[1] = {text: Enddate+' to '+dates, alignment: 'center'};
                       cols[2] = {text: 'Exported on '+dates, alignment: 'right'};
                var cols2 = [];
                       cols2[1] = {text: 'CenpaccCell Network', alignment: 'right',fontSize :'18'}; 
                       cols2[0]= {
                        margin: [ 0, 0, 0, 12 ],
                        width: 50,
                        alignment: 'left',
                        image: 'data:image/png;base64,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'
                    };
                    doc.content[0].text = '';
                    doc.styles.tableBodyEven.alignment = 'center';
                    doc.styles.tableBodyOdd.alignment = 'center';
                    doc.styles.title.fontSize = '2';
                    doc.content[1].table.widths = 
                    Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                    doc.content.splice( 1, 0, { text: 'Call Detail Records for '+number, alignment:'center',fontSize:'13'});
                    doc.content.splice( 2, 0, { columns: cols});
                    doc.content.splice( 1, 0,  { columns: cols2});
                }
                    }
                 ]
            } );
    </script>
    </div>
    </div>