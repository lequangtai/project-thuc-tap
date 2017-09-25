@extends('user.master')
@section('title','Đăng kí mua điện')
@section('content')
<div id="content-left">
			<div id="thongtin" style="width: 750px"> 
        <div class="TTCCD" style="width: 243px">
            <a href="{!! route('getXTTKH') !!}"><div class="panel panel-primary" id="pannel-TTCCD">
              <div class="panel-heading">
                <h3 class="panel-title" id="panel-TTCCD">THÔNG TIN KHÁCH HÀNG</h3>
              </div>
              <div class="panel-body">
                <img id="img_CCD" src="{!! asset('public/tt13_user/image/logo_outage.gif')!!}" width="220px" height="100px">
              </div>
            </div></a>
          </div>
      </div>
      <div class="TTTT">
            <a href="{!! route('getTT') !!}"><div class="panel panel-primary" id="pannel-TTTT">
              <div class="panel-heading">
                <h3 class="panel-title" id="panel-TTTT">THANH TOÁN TRỰC TUYẾN</h3>
              </div>
              <div class="panel-body">
                <img id="img-TTTT" src="{!! asset('public/tt13_user/image/logo_paying.gif')!!}" width="235px" height="100px">
              </div>
            </div></a>
          </div>
          <div class="HDDT">
            <a href="{!! route('getHD') !!}"><div class="panel panel-primary" id="pannel-HDDT">
              <div class="panel-heading">
                <h3 class="panel-title" id="panel-HDDT">HÓA ĐƠN ĐIỆN TỬ</h3>
              </div>
              <div class="panel-body">
                <img src="{!! asset('public/tt13_user/image/logo_invoice.gif')!!}" width="220px" height="100px" id="img-HDDT">
              </div>
            </div></a>
          </div>
		  		<div class="xoa"></div>
		  		<!-- <div class="box-right"> -->
                   <div class="panel panel-primary" id="tin-HD">
                        <div class="panel-heading">
                            <h3 class="panel-title">ĐĂNG KÝ MUA ĐIỆN</h3>
                        </div>
                            <form name="frm_dangky" method="post" id="form-DKMD">
                    <table id="DKMD">
                        <tbody><tr>
                            <td width="236" height="35">Họ tên:<i class="red">*</i> </td>
                          <td width="494"><input type="text" name="hoten" class="hoten"></td>
                        </tr>
                        <tr>
                            <td height="35">Điện thoại:<i class="red">*</i> </td>
                          <td><input type="text" name="sdt" maxlength="11" class="hoten"></td>
                        </tr>
                        <tr>
                            <td height="35">Email: <i class="red">*</i></td>
                          <td><input name="email" type="text" class="hoten"></td>
                        </tr>
                        <tr>
                            <td height="35">Quận:<i class="red">*</i> </td>
                            <td>
                                <select name="quan" class="quan">
                                    
                                    <option value="79760">Quận 1</option>
                                    
                                    <option value="79769">Quận 2</option>
                                    
                                    <option value="79770">Quận 3</option>
                                    
                                </select> 
                            </td>
                        </tr>
                        <tr>
                            <td height="35">Phường: </td>
                            <td id="phuong">
                  <select name="phuong" class="quan">
                        
                        <option value="7976026740">Bến Nghé</option>
                        
                        <option value="7976026743">Bến Thành</option>
                        
                        <option value="7976026761">Cầu Kho</option>
                        
                    </select>
                </td>
                        </tr>
                        <tr>
                            <td height="35">Địa chỉ:<i class="red">*</i> </td>
                          <td><input type="text" name="diachi" class="hoten"></td>
                        </tr>
                    
                        <tr>
                            <td height="35">Mục đích sử dụng:<i class="red">*</i> </td>
                            <td>
                                <select name="mucdich" class="quan">
                                    
                                    <option value="sinhhoat">Sinh hoạt</option>
                                    
                                    <option value="ngoaisinhhoat">Ngoài sinh hoạt</option>
                                    
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td height="99">Nội dung:<i class="red">*</i></td>
                          <td><textarea name="noidung" class="hoten" rows="5"></textarea></td>
                        </tr>
                        
                        <!-- <tr><td height="35" colspan="2"><hr></td></tr>
                        <tr>
                          <td colspan="2" class="align_left">
                              <b>GIẤY TỜ HIỆN CÓ (đánh dấu vào ô tương ứng)</b><br>
                              
                              <label><input type="checkbox" name="giayto[]" value="Giấy chứng nhận đăng ký kinh doanh hoặc quyết định thành lập hoặc giấy chứng nhận đầu tư..."> Giấy chứng nhận đăng ký kinh doanh hoặc quyết định thành lập hoặc giấy chứng nhận đầu tư...</label><br>
                                
                              <label><input type="checkbox" name="giayto[]" value="Giấy chứng nhận quyền sở hữu sử dụng nhà ở"> Giấy chứng nhận quyền sở hữu sử dụng nhà ở</label><br>
                                
                              <label><input type="checkbox" name="giayto[]" value="Giấy chứng nhận sử dụng đất"> Giấy chứng nhận sử dụng đất</label><br>
                                
                              <label><input type="checkbox" name="giayto[]" value="Hợp đồng thuê nhà"> Hợp đồng thuê nhà</label><br>
                                
                              <label><input type="checkbox" name="giayto[]" value="Sổ hộ khẩu hoặc giấy đăng ký tạm trú"> Sổ hộ khẩu hoặc giấy đăng ký tạm trú</label><br>
                                
                              <label><input type="checkbox" name="giayto[]" value="Quyết định cấp đất,cấp nhà, thông báo tạm cấp số nhà"> Quyết định cấp đất,cấp nhà, thông báo tạm cấp số nhà</label><br>
                                
                              <label><input type="checkbox" name="giayto[]" value="Hợp động mua bán, chuyển nhượng nhà, đất ở"> Hợp động mua bán, chuyển nhượng nhà, đất ở</label><br>
                                
                            </td>
                        </tr> -->
                        <tr>
                        <td></td>
                        <td>
                          <input type="hidden" name="ma_kh" value="">
                          <button type="button" class="btn btn-primary" id="btn">Đăng ký</button>
                        </td></tr>
                    </tbody></table>
                    </form>
                 </div>
	</div>
</div>
  @endsection
	