<!DOCTYPE html>
<html>
<head class="no-js" lang="">
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="noindex, nofollow"><meta name="googlebot" content="noindex, nofollow,noarchieve">
    <title>สร้างรายการขาย</title>
    <link rel="shortcut icon" href="/Content/themes/base/images/zorticon.ico" type="image/x-icon" />
    <link rel="icon" href="/Content/themes/base/images/zorticon.ico" type="image/x-icon" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
      <script src="/Scripts/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="/Scripts/jquery-1.7.2.js" type="text/javascript"></script>
    <script src="/Scripts/jquery-ui-1.8.11.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/Content/cssTemp/ionicons.min.css">
    <link rel="stylesheet" href="/Content/cssTemp/font-awesome.min.css">
    
    <link rel="stylesheet" href="/Content/cssTemp/bootstrap/css/bootstrap-select.css"  media="screen">
    <link rel="stylesheet" href="/Content/cssTemp/bootstrap.min.css"  media="screen">
    <link rel="stylesheet" href="/Content/cssTemp/css/bootstrap-datetimepicker.min.css"  media="screen">
    <link rel="stylesheet" href="/Content/cssTemp/style.css">

    <link href="/Content/loading.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/Content/jquery.tag-editor.css">
    <link rel="stylesheet" href="/Content/cssTemp/jquery.typeahead.css">
    <link rel="stylesheet" href="/Content/cssTemp/bootstrap-tagsinput.css">
    
    <script type="text/javascript" src="/Content/jsTemp/datetimepicker/bootstrap-datetimepicker.js"></script>
    

<div class="content">
    <div class="container-fluid">
        <h1 class="title">
สร้างรายการขาย</h1>
        
        <form class="form-horizontal">

            <div class="row">
                <div class="col-md-6">
                    <!-- <div class="z-form-block"> -->
                    <hr />
                    <div class="form-group">
                        <label for="" class="col-sm-3 col-md-4 control-label">ประเภท</label>
                        <div class="col-sm-9 col-md-8">
ขายสินค้าออก                                 <input type="hidden" id="subtransactiontype" value="0"/>
                           
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-3 col-md-4 control-label">รายการ <span style="color:red;">*</span></label>
                        <div class="col-sm-9 col-md-8">
                            <input type="text" class="form-control form-text" id="number" maxlength='128' value="IV-201701007" onkeyup="setNormalTextbox(this.id);" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 col-md-4 control-label">วันทำรายการ <span style="color: red;">*</span></label>
                        <div class="col-sm-9 col-md-8">
                            <div class="input-group date form_date" data-date="" data-date-format="d/m/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                <input class="form-control" type="text" name="transactiondate" value="25/1/2017" id="transactiondate" onkeyup="setNormalTextbox(this.id);" readonly/>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                        </div>
                    </div>
                    <div style="display:none;">
                        <div class="form-group">
                            <label for="" class="col-sm-3 col-md-4 control-label">วันหมดอายุ</label>
                            <div class="col-sm-9 col-md-8">
                                <div class="input-group date form_date" data-date="" data-date-format="d/m/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                    <input class="form-control" type="text" name="expiredate" value="" id="expiredate" readonly/>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-3 col-md-4 control-label">อ้างอิง</label>
                        <div class="col-sm-9 col-md-8">
                                    <div class="typeahead__container">
                                        <div class="typeahead__field">
                                        <span class="typeahead__query">
                                            <input class="js-typeahead-input refnametags"
                                                   name="q"
                                                   type="search"
                                                    id="refname" maxlength="128" value=""
                                                   autofocus
                                                   autocomplete="off">
                                        </span>
                                        </div>
                                    </div>
                        </div>
                    </div>
                        <div class="form-group" >
                            <label for="" class="col-sm-3 col-md-4 control-label">ช่องทางการขาย</label>
                            <div class="col-sm-9 col-md-8">
                                  <div class="typeahead__container">
                                        <div class="typeahead__field">
                                        <span class="typeahead__query">
                                            <input class="js-typeahead-input saleschanneltag"
                                                   name="q"
                                                   type="search"
                                                    id="saleschannel" maxlength="64" value=""
                                                   autofocus
                                                   autocomplete="off">
                                        </span>
                                        </div>
                                    </div>
                                 
                            </div>
                        </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 col-md-4 control-label">ประเภทภาษี</label>
                        <div class="col-sm-9 col-md-8">
                            <select class="form-control form-text form-select -half" id="vattypeid" onchange="changeVatType()">
                                            <option value="1:0:1">ไม่มีภาษี</option>
                                            <option value="2:7:0">แยกภาษีมูลค่าเพิ่ม 7%</option>
                                            <option value="3:7:1">รวมภาษีมูลค่าเพิ่ม 7%</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" id="agentname" value="" /><input type="hidden" id="agentemail" value="" /><input type="hidden" id="agentphone" value="" /><input type="hidden" id="agentaddress" value="" />
                            <div class="form-group">
                                <label for="" class="col-sm-3 col-md-4 control-label">ตัวแทนจำหน่าย </label>
                                <div class="col-sm-9 col-md-8">
                                    <span id="agentzone">ไม่มี <a href="javascript:showAllAgent();">เลือกตัวแทน</a></span>
                                </div>
                            </div>
                </div>

                <div class="col-md-6">
                    <hr />
                    <div class="form-group">
                        <label for="" class="col-sm-3 col-md-5 control-label">ชื่อลูกค้า</label>
                        <div class="col-sm-9 col-md-7">
                             <div class="typeahead__container">
                                        <div class="typeahead__field">
                                        <span class="typeahead__query">
                                            <input class="js-typeahead-input customernametags"
                                                   name="q"
                                                   type="search"
                                                    id="customername" maxlength="256" value=""
                                                   autofocus
                                                   autocomplete="off">
                                        </span>
      <span class="typeahead__button" style="padding-left:1px;">
                              
                                                                  <a href="javascript:showAllContact();" class="z-badge -info" style="cursor: pointer;"><i class="icon ion-android-apps"></i></a>
                                
                                                                    </span>
                                        </div>
                                    </div>
                            <input type="hidden" id="contactid"  value="0"/>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 col-md-5 control-label">เบอร์โทรศัพท์ลูกค้า</label>
                        <div class="col-sm-9 col-md-7">
                            <input type="text" class="form-control form-text" id="customerphone" maxlength='64' value=""  />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 col-md-5 control-label">อีเมลลูกค้า</label>
                        <div class="col-sm-9 col-md-7">
                            <input type="text" class="form-control form-text" id="customeremail" maxlength='128' value=""  />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 col-md-5 control-label">ที่อยู่ลูกค้า</label>
                        <div class="col-sm-9 col-md-7">
                            <textarea class="form-control form-text" rows="2" id="customeraddress" ></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-md-offset-5 col-sm-9 col-md-7 ">
                            <label>
                                <input type="checkbox" id="tmpmerchantstatus" onclick="setmerchantstatus();" >
                                <small>กำหนดเลขผู้เสียภาษี, ชื่อสาขา, เลขที่สาขา</small>
                            </label>
                        </div>
                    </div>

                    <div class="setarea" style="display:none;">
                        <div class="form-group">
                            <label for="" class="col-sm-3 col-md-5" style="text-align: right;">เลขประจำตัวผู้เสียภาษี</label>
                            <div class="col-sm-9 col-md-7">
                                <input type="text" class="form-control form-text" maxlength='32' id="customeridnumber" value=""  />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-3 col-md-5" style="text-align: right;">ชื่อสาขา</label>
                            <div class="col-sm-9 col-md-7">
                                <input type="text" class="form-control form-text" maxlength='256' id="customerbranchname" value=""/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-3 col-md-5" style="text-align: right;">เลขที่สาขา</label>
                            <div class="col-sm-9 col-md-7">
                                <input type="text" class="form-control form-text" maxlength='128' id="customerbranchno" value=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <hr />
                    <div class="z-block">
                        <div class="table-responsive">
                            <table class="table table-striped z-table z-product-form -thead" id="productrow">
                                <thead>
                                    <tr>
                                        <th class="col-xs-1 col-sm-1 col-md-1" style="padding-left: 62px;">#</th>
                                        <th class="col-xs-2 col-sm-2 col-md-2">รหัส</th>
                                        <th class="col-xs-3 col-sm-3 col-md-3">ชื่อสินค้า<span style="color: red;">*</span></th>
                                        <th class="col-xs-1 col-sm-1 col-md-1" style="text-align: right;">จำนวน<span style="color: red;">*</span></th>
                                        <th class="col-xs-1 col-sm-1 col-md-1" style="text-align: right; min-width:120px;">มูลค่าต่อหน่วย<span style="color: red;">*</span></th>
                                        <th class="col-xs-2 col-sm-2 col-md-2" style="padding-left: 24px;">ส่วนลดต่อหน่วย</th>
                                        <th class="col-xs-2 col-sm-2 col-md-2" style="text-align: right; padding-right:60px;">รวม</th>

                                    </tr>
                                </thead>
                                <tbody>
                                            <tr id="prow1">
                                                <td class="col-index index text-center">
                                                    <a class="z-badge" href="javascript:showAllProduct(1);" style="cursor: pointer;"><i class="icon ion-android-apps"></i></a>
                                                    <span id="productcount1">1</span>
                                                </td>
                                                <td>
                                                    <div class="typeahead__container">
                                                            <div class="typeahead__field">
                                                            <span class="typeahead__query">
                                                                <input class="js-typeahead-input codetags"
                                                                    name="q"
                                                                    type="search"
                                                                    id="productcode1" maxlength="32" value=""
                                                                    onfocus="autocompleteshow=false;" onkeyup="hideUnittext('unittext1');" onkeydown="gotoNext(1,'productcode',event.keyCode);"
                                                                    autofocus
                                                                    autocomplete="off">
                                                            </span>
                                                            </div>
                                                        </div>
                                                    <input type="hidden" id="productid1" />
                                                </td>
                                                <td id="tdproductname1">
                                                     <div class="typeahead__container">
                                                        <div class="typeahead__field">
                                                        <span class="typeahead__query">
                                                            <input class="js-typeahead-input nametags"
                                                                   name="q"
                                                                   type="text"
                                                                    id="productname1" maxlength="256" value=""
                                                                  onfocus="autocompleteshow=false;" onkeyup="setNormalTextbox(this.id);setNormalTextbox('td'+this.id);hideUnittext('unittext1');" onkeydown="gotoNext(1,'productname',event.keyCode);"
                                                                   autofocus
                                                                   autocomplete="off">
                                                        </span>      
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                          <div class="input-group spinner">
                                                            <input type="text" class="form-control" style="min-width: 60px;" id="productnumber1" maxlength="32" onfocus="removeComma(this.id);autocompleteshow=false;" onblur="updateTotalPrice(1)" value="" onkeyup="setNormalTextbox(this.id);" onkeydown="gotoNext(1,'productnumber',event.keyCode);">
                                                            <div class="input-group-btn-vertical">
                                                              <button class="btn btn-default" style="margin-top:0px !important;" type="button" onclick="plusNumber('productnumber1');updateTotalPrice(1);"><i class="fa fa-caret-up"></i></button>
                                                              <button class="btn btn-default" style="margin-top:-2px !important;" type="button" onclick="minusNumber('productnumber1');updateTotalPrice(1);"><i class="fa fa-caret-down"></i></button>
                                                            </div>
                                                          </div>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control form-text text-right" id="productpricepernumber1" maxlength="32" onfocus="removeComma(this.id);autocompleteshow=false;" onblur="updateTotalPrice(1)" onkeyup="setNormalTextbox(this.id);" onkeydown="gotoNext(1,'productpricepernumber',event.keyCode);" />
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control form-text -unit text-right" id="discountpernumber1" maxlength="32" onfocus="removeComma(this.id);autocompleteshow=false;" onblur="updateTotalPrice(1)" onkeydown="gotoNext(1,'discountpernumber',event.keyCode);" />
                                                    <span id='unittext1' class="unittextspan spantruncatenoblock" style="display: none;"></span>
                                                </td>
                                                <td class="rightClass">
                                                    <span id='totalprice1' class="-total"></span>
                                                    <input type="hidden" id="producttotalprice1" value="0" />
                                                    <a href="javascript:deleteRow(1);" style="cursor: pointer;"><span class="z-badge -transparent"><i class="icon ion-android-close"></i></span></a>
                                                    
                                                </td>
                                            </tr>
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="total-summary-section row">
                            <div class="col-md-7">
                                <a href="javascript:addRow()" style="cursor: pointer;">
                                    <span class="z-badge p-left -transparent"><i class="icon ion-android-add"></i></span>
                                    <span>เพิ่มสินค้า</span>
                                </a>
                                &nbsp;
                                <a class="z-badge" href="javascript:showMultiAllProduct();" style="cursor: pointer;"><i class="icon ion-android-apps"></i></a>
                            </div>
                            <div class="col-md-5">
                                <div class="total-summary">
                                    <div class="row">
                                        <div class="col-xs-4" style="text-align: right;">
                                            <p>ส่วนลด</p>
                                        </div>
                                        <div class="col-xs-6 ">
                                            <input type="text" class="form-control form-text" placeholder="จำนวนเงิน หรือ %" id="discounttext" onblur="autocalculate()" maxlength='32' style="width: 150px;" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-4" style="text-align: right;">
                                            <p>มูลค่ารวมก่อนภาษี</p>
                                        </div>
                                        <div class="col-xs-8">
                                            <p>
                                                <span id="amount2text"></span>
                                                <input type="hidden" style="width: 150px;" id="amount2" />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-4" style="text-align: right;">
                                            <p>ภาษีมูลค่าเพิ่ม (7%)</p>
                                        </div>
                                        <div class="col-xs-8">
                                            <p><span id="vatamounttext"></span>
                                                <input type="hidden" class="form-control form-text -half" id="vatamount" onblur="autocalculate()" maxlength='32' onfocus="removeComma(this.id);" />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-4" style="text-align: right;">
                                            <b><p>มูลค่ารวมสุทธิ</p></b>
                                        </div>
                                        <div class="col-xs-8">
                                            <p><b><span id="amounttext"></span></b>
                                                <input type="hidden" class="form-control form-text -half" style="width: 150px; float: left;" id="amount" maxlength='32' onfocus="removeComma(this.id);" onblur="isMoney(this.id);" />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-4" style="text-align: right;">
                                            <label>
                                                ภาษีหัก ณ ที่จ่าย
                                            </label>
                                        </div>
                                        <div class="col-xs-8">
                                            <input type="checkbox" id="whtcheck" onclick="changeWHTType();" />
                                            <select class="form-control form-text form-select -half whtarea" id="whtpercent" onchange="changeWHTType()" style=" display: none;">
                                                <option value="1">1%</option>
                                                <option value="2">2%</option>
                                                <option value="3" selected>3%</option>
                                                <option value="5">5%</option>
                                                <option value="10">10%</option>
                                                <option value="15">15%</option>
                                            </select>
                                            <input type="hidden" id="whtamount" onfocus="removeComma(this.id);" />
                                            <input type="hidden" id="paymentwhtamount" onfocus="removeComma(this.id);" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-4" style="text-align: right;">
                                            <p class="whtarea" style="display: none;"><strong>ยอดชำระรวม</strong></p>
                                        </div>
                                        <div class="col-xs-8">
                                            <p class="whtarea" style="display: none;"><strong><span id="paymentamounttext"></span></strong></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <input type="hidden" id="paymentamount" maxlength='32' value="0.00" /><input type="hidden" id="paymentname" maxlength='32' value="" /><input type="hidden" id="paymentdatetimestatus" value="0" /><input type="hidden" id="paymentdatetime" value="" />
                                    </div>
                                </div>
                            </div>
                            <!-- row -->
                        </div>
                    </div>

                </div>
            </div>
    <script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src="/Content/jsTemp/bootstrap-select.js"></script>
    <script type="text/javascript" src="/Content/jsTemp/jquery.typeahead.js"></script>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
    <script src="/Content/jsTemp/plugins.js"></script>
    <script src="/Content/jsTemp/main.js"></script>
    <script src="/Content/jsTemp/bootstrap.min.js"></script>
    <script src="/Content/jsTemp/bootstrap-tagsinput.min.js"></script>   
     
</body>
</html>
