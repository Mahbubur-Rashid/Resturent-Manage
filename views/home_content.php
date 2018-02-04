<div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-sm-6">
                        <h4 class="nav_top_align">
                            <i class="fa fa-calendar"></i>
                            Dashboard
                        </h4>
                    </div>
                    <div class="col-sm-6 col-12">
                        <ol  class="breadcrumb float-right  nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="<?=base_url()?>dashboard">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="active breadcrumb-item">Dashboard</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-light lter bg-container cal_btn_hov">
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block m-t-35">
                                    <div id="calendar"></div>
                                    <div>
                                      
<!-- //all codes goes here -->

<div class="content_wrap">
         

<div style="margin-bottom:20px;float:right;">
<a class="uk-button" target="_blank" href="http://bastisapp.com/kmrs/update">
Click here to update your database <i class="fa fa-database"></i>
</a>
</div>
<div class="clear"></div>


<form id="frm_table_list" method="POST" class="report uk-form uk-form-horizontal">
<h3>New Merchant Registration List For Today <span class="uk-text-success">
Jan 31,2018</span>
</h3>

<input type="hidden" name="action" id="action" value="newMerchantRegList">
<input type="hidden" name="tbl" id="tbl" value="item">
<div id="table_list_wrapper" class="dataTables_wrapper" role="grid"><div id="table_list_length" class="dataTables_length"><label>Show <select size="1" name="table_list_length" aria-controls="table_list"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div class="dataTables_filter" id="table_list_filter"><label>Search: <input type="text" aria-controls="table_list"></label></div><div id="table_list_processing" class="dataTables_processing" style="visibility: hidden;">Processing...</div><table id="table_list" class="uk-table uk-table-hover uk-table-striped uk-table-condensed dataTable" aria-describedby="table_list_info">
  <caption>Merchant List</caption>
   <thead>
        <tr role="row"><th width="2%" class="sorting_desc" role="columnheader" tabindex="0" aria-controls="table_list" rowspan="1" colspan="1" aria-sort="descending" aria-label="MerchantID: activate to sort column ascending" style="width: 127px;">MerchantID</th><th width="6%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list" rowspan="1" colspan="1" aria-label="Merchant Name: activate to sort column ascending" style="width: 217px;">Merchant Name</th><th width="3%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list" rowspan="1" colspan="1" aria-label="Package Name: activate to sort column ascending" style="width: 134px;">Package Name</th><th width="3%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 111px;">Price</th><th width="3%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list" rowspan="1" colspan="1" aria-label="Payment Type: activate to sort column ascending" style="width: 136px;">Payment Type</th><th width="3%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 121px;">Status</th><th width="3%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 108px;">Date</th><th width="3%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 96px;"></th></tr>
    </thead>
    
<tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">No data available in table</td></tr></tbody></table><div class="dataTables_info" id="table_list_info">Showing 0 to 0 of 0 entries</div><div class="dataTables_paginate paging_two_button" id="table_list_paginate"><a class="paginate_disabled_previous" tabindex="0" role="button" id="table_list_previous" aria-controls="table_list">Previous</a><a class="paginate_disabled_next" tabindex="0" role="button" id="table_list_next" aria-controls="table_list">Next</a></div></div>
<div class="clear"></div>
</form>

<div style="padding-top:50px;padding-bottom:20px;">
<hr>
</div>

<h3>New Merchant Payment List For Today <span class="uk-text-success">
Jan 31,2018</span></h3>

<form id="frm_table_list2" method="POST" class="report uk-form uk-form-horizontal">
<input type="hidden" name="action" id="action" value="rptMerchantPaymentToday">
<input type="hidden" name="tbl" id="tbl" value="item">
<div id="table_list2_wrapper" class="dataTables_wrapper" role="grid"><div id="table_list2_length" class="dataTables_length"><label>Show <select size="1" name="table_list2_length" aria-controls="table_list2"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div class="dataTables_filter" id="table_list2_filter"><label>Search: <input type="text" aria-controls="table_list2"></label></div><div id="table_list2_processing" class="dataTables_processing" style="visibility: hidden;">Processing...</div><table id="table_list2" class="uk-table uk-table-hover uk-table-striped uk-table-condensed dataTable" aria-describedby="table_list2_info">
  <caption>Merchant Payment</caption>
   <thead>
        <tr role="row"><th width="2%" class="sorting_desc" role="columnheader" tabindex="0" aria-controls="table_list2" rowspan="1" colspan="1" aria-sort="descending" aria-label="TransID: activate to sort column ascending" style="width: 107px;">TransID</th><th width="5%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list2" rowspan="1" colspan="1" aria-label="Merchant Name: activate to sort column ascending" style="width: 202px;">Merchant Name</th><th width="3%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list2" rowspan="1" colspan="1" aria-label="Package: activate to sort column ascending" style="width: 141px;">Package</th><th width="3%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list2" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 117px;">Price</th><th width="3%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list2" rowspan="1" colspan="1" aria-label="Payment Type: activate to sort column ascending" style="width: 142px;">Payment Type</th><th width="3%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 126px;">Status</th><th width="3%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list2" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 114px;">Date</th><th width="3%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list2" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 102px;"></th></tr>
    </thead>
    
<tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd"><td class=" sorting_1">96</td><td class="">commission</td><td class="">Premium package</td><td class="">20.00</td><td class="">OBD</td><td class="">Pending</td><td class="">Jan 31,2018 0:08:03</td><td class=""><a data-id="96" class="edit-payment" href="javascript:">Edit</a></td></tr></tbody></table><div class="dataTables_info" id="table_list2_info">Showing 1 to 1 of 1 entries</div><div class="dataTables_paginate paging_two_button" id="table_list2_paginate"><a class="paginate_disabled_previous" tabindex="0" role="button" id="table_list2_previous" aria-controls="table_list2">Previous</a><a class="paginate_disabled_next" tabindex="0" role="button" id="table_list2_next" aria-controls="table_list2">Next</a></div></div>
<div class="clear"></div>
</form>



<h3>Incoming orders from merchant for today <span class="uk-text-success">
Jan 31,2018</span></h3>

<form id="frm_table_list3" method="POST" class="report uk-form uk-form-horizontal">
<input type="hidden" name="action" id="action" value="rptIncomingOrders">
<input type="hidden" name="tbl" id="tbl" value="item">
<div id="table_list3_wrapper" class="dataTables_wrapper" role="grid"><div id="table_list3_length" class="dataTables_length"><label>Show <select size="1" name="table_list3_length" aria-controls="table_list3"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div class="dataTables_filter" id="table_list3_filter"><label>Search: <input type="text" aria-controls="table_list3"></label></div><div id="table_list3_processing" class="dataTables_processing" style="visibility: hidden;">Processing...</div><table id="table_list3" class="uk-table uk-table-hover uk-table-striped uk-table-condensed dataTable" aria-describedby="table_list3_info">  
   <thead>
        <tr role="row"><th width="2%" class="sorting_desc" role="columnheader" tabindex="0" aria-controls="table_list3" rowspan="1" colspan="1" aria-sort="descending" aria-label="Ref#: activate to sort column ascending" style="width: 62px;">Ref#</th><th width="2%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list3" rowspan="1" colspan="1" aria-label="Merchant Name: activate to sort column ascending" style="width: 94px;">Merchant Name</th><th width="6%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list3" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 147px;">Name</th><th width="3%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list3" rowspan="1" colspan="1" aria-label="Item: activate to sort column ascending" style="width: 75px;">Item</th><th width="3%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list3" rowspan="1" colspan="1" aria-label="TransType: activate to sort column ascending" style="width: 116px;">TransType</th><th width="3%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list3" rowspan="1" colspan="1" aria-label="Payment Type: activate to sort column ascending" style="width: 105px;">Payment Type</th><th width="3%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list3" rowspan="1" colspan="1" aria-label="Total: activate to sort column ascending" style="width: 80px;">Total</th><th width="3%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list3" rowspan="1" colspan="1" aria-label="Tax: activate to sort column ascending" style="width: 70px;">Tax</th><th width="3%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list3" rowspan="1" colspan="1" aria-label="Total W/Tax: activate to sort column ascending" style="width: 87px;">Total W/Tax</th><th width="3%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list3" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 90px;">Status</th><th width="3%" class="sorting" role="columnheader" tabindex="0" aria-controls="table_list3" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 77px;">Date</th></tr>
    </thead>
    
<tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd"><td class=" sorting_1">2837</td><td class="">Subway</td><td class="">Adlan Rose</td><td class=""><span class="concat-text-table">italian b.m.t</span></td><td class="">Pickup</td><td class="">COD</td><td class="">23.00</td><td class="">0.00</td><td class="">25.00</td><td class="">Paid</td><td class="">Jan 30,2018 16:57:49<br><a data-id="2837" class="view-receipt" href="javascript:">View</a></td></tr><tr class="even"><td class=" sorting_1">2836</td><td class="">Subway</td><td class="">Adlan Rose</td><td class=""><span class="concat-text-table">sliced chicken</span></td><td class="">Pickup</td><td class="">COD</td><td class="">21.00</td><td class="">0.00</td><td class="">23.00</td><td class="">Paid</td><td class="">Jan 30,2018 16:49:50<br><a data-id="2836" class="view-receipt" href="javascript:">View</a></td></tr><tr class="odd"><td class=" sorting_1">2835</td><td class="">Testdawa</td><td class="">Testsa Testsa</td><td class=""><span class="concat-text-table">Dal Tadka</span></td><td class="">Delivery</td><td class="">COD</td><td class="">40.00</td><td class="">0.00</td><td class="">40.00</td><td class="">Accepted</td><td class="">Jan 30,2018 10:54:20<br><a data-id="2835" class="view-receipt" href="javascript:">View</a></td></tr><tr class="even"><td class=" sorting_1">2834</td><td class="">Mcdonalds</td><td class="">Shiva Achary</td><td class=""><span class="concat-text-table">bigmac</span></td><td class="">Delivery</td><td class="">COD</td><td class="">5.00</td><td class="">0.80</td><td class="">16.80</td><td class="">Successful</td><td class="">Jan 30,2018 9:14:08<br><a data-id="2834" class="view-receipt" href="javascript:">View</a></td></tr><tr class="odd"><td class=" sorting_1">2833</td><td class="">Ayaz Lokanta</td><td class="">Rintu Chowdhury</td><td class=""><span class="concat-text-table">Haşlama</span></td><td class="">Delivery</td><td class="">COD</td><td class="">12.00</td><td class="">0.00</td><td class="">12.00</td><td class="">Pending</td><td class="">Jan 30,2018 2:15:06<br><a data-id="2833" class="view-receipt" href="javascript:">View</a></td></tr><tr class="even"><td class=" sorting_1">2832</td><td class="">Ayaz Lokanta</td><td class="">Rintu Chowdhury</td><td class=""><span class="concat-text-table">Haşlama,Haşlama  sulu</span></td><td class="">Delivery</td><td class="">COD</td><td class="">32.00</td><td class="">0.00</td><td class="">32.00</td><td class="">Pending</td><td class="">Jan 30,2018 2:01:10<br><a data-id="2832" class="view-receipt" href="javascript:">View</a></td></tr><tr class="odd"><td class=" sorting_1">2831</td><td class="">Mcdonalds</td><td class="">Rwerwer Tetert</td><td class=""><span class="concat-text-table">bigmac</span></td><td class="">Delivery</td><td class="">COD</td><td class="">5.00</td><td class="">0.80</td><td class="">16.80</td><td class="">Pending</td><td class="">Jan 29,2018 20:27:24<br><a data-id="2831" class="view-receipt" href="javascript:">View</a></td></tr><tr class="even"><td class=" sorting_1">2830</td><td class="">Mcdonalds</td><td class="">Rwerwer Tetert</td><td class=""><span class="concat-text-table">bigmac,filet o fish,sausage mcmuffin,egg mcmuffin</span></td><td class="">Delivery</td><td class="">COD</td><td class="">40.50</td><td class="">2.58</td><td class="">54.08</td><td class="">Pending</td><td class="">Jan 29,2018 20:25:48<br><a data-id="2830" class="view-receipt" href="javascript:">View</a></td></tr><tr class="odd"><td class=" sorting_1">2829</td><td class="">Mcdonalds</td><td class="">Testa Nutzer</td><td class=""><span class="concat-text-table">double cheeseburger,beef burger</span></td><td class="">Delivery</td><td class="">PYP</td><td class="">5.40</td><td class="">0.82</td><td class="">17.22</td><td class="">Paid</td><td class="">Jan 29,2018 19:58:13<br><a data-id="2829" class="view-receipt" href="javascript:">View</a></td></tr><tr class="even"><td class=" sorting_1">2828</td><td class="">Mcdonalds</td><td class="">Rewrwr Rwrewr</td><td class=""><span class="concat-text-table">bigmac</span></td><td class="">Pickup</td><td class="">COD</td><td class="">7.00</td><td class="">0.40</td><td class="">8.40</td><td class="">Pending</td><td class="">Jan 28,2018 5:03:36<br><a data-id="2828" class="view-receipt" href="javascript:">View</a></td></tr></tbody></table><div class="dataTables_info" id="table_list3_info">Showing 1 to 10 of 100 entries</div><div class="dataTables_paginate paging_two_button" id="table_list3_paginate"><a class="paginate_disabled_previous" tabindex="0" role="button" id="table_list3_previous" aria-controls="table_list3">Previous</a><a class="paginate_enabled_next" tabindex="0" role="button" id="table_list3_next" aria-controls="table_list3">Next</a></div></div>
<div class="clear"></div>
</form>       </div>
<!-- code end here  -->





                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- /.outer -->
        </div>
        <!-- /#content -->
    </div>

