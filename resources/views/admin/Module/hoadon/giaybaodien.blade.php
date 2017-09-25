@extends('admin.app')
@section('title','Thông tin hóa đơn')
@section('content')
  <div id="div_tbl">
    <table id="tbl" class="table table-hover" border="0">
    @foreach($abc as $value)
    @foreach($value["dienke"] as $value1)
    @foreach($abc1 as $item)
      <tbody >
      <tr>
      <td class="cl_td"><h5 class="h5" colspan="2">CÔNG TY ĐIỆN LỰC MIỀN NAM<BR/>CÔNG TY ĐIỆN LỰC LONG AN<br/>ĐIỆN LỰC : 
      <b class="cl_b">ĐIỆN LỰC CẦN ĐƯỚC</b></h5></td>
      </tr>
        <tr>
          <td class="cl_td">Mã số thuế :<b class="cl_b">0300942001</b>
          <td class="h5" class="cl_b" style="width: 320px">DTSC:0722213400</td>
          </td>
        </tr>
        <tr>
          <td class="cl_td">Ký hiệu :<b class="cl_b">AH/16E-0279517</b></td>
          <td class="h5" class="cl_b">SGCS:G0206</td>
        </tr>
        <tr>
          <td class="cl_td">Số nhảy :<b class="cl_b" style="color: red">3015234</b></td>
          <td class="cl_td"><b class="cl_b">DS:92-1456</b></td>
        </tr>
        <tr>
          <td class="td" colspan="2"><h5 style="font-size: 18px">GIẤY BÁO TIỀN ĐIỆN<BR/>(Không phải hóa đơn)</h5></td>
        </tr>
        <tr>
          <td class="cl_td">Kỳ <b class="cl_b">{{ $value["ky"] }}</b> tháng <b class="cl_b">3</b> năm <b class="cl_b">2017</b></td>
          <td class="cl_td"></td>
        </tr>
        <tr>
          <td class="cl_td">KH: <b class="cl_b">{{ $item["khachhang"]["tenkh"] }}</b></td>
          <td class="cl_td"></td>
        </tr>
         <tr>
          <td class="cl_td">Địa chỉ : <b class="cl_b">{{ $item["khachhang"]["diachi"] }}</b></td>
          <td class="cl_td"></td>
        </tr>
         <tr>
          <td class="cl_td">Mã KH:<b class="cl_b">PB{{ $item["khachhang"]["id"] }}</b></td>
          <td class="cl_td"></td>
        </tr>
         <tr>
          <td class="cl_td">CSM:<b class="cl_b">KT {{ $value["chisocuoi"] }}</b></td>
          <td class="cl_td"></td>
        </tr>
        <tr>
          <td class="cl_td">CSC:<b class="cl_b">KT {{ $value["chisodau"] }}</b></td>
          <td class="cl_td"></td>
        </tr>
        <tr>
          <td class="cl_td">HSN:<b class="cl_b">1</b></td>
          <td class="cl_td"></td>
        </tr>
        <tr>
          <td class="cl_td">ĐNTT:<b class="cl_b">{{ $value1["dntt"] }}</b></td>
          <td class="cl_td"></td>
        </tr>
        <tr>
          <td class="cl_td">Tiền điện:<b class="cl_b">{{ number_format($value["tongtien"],0,',','.') }}</b></td>
          <td class="cl_td"></td>
        </tr>
        <tr>
          <td class="cl_td">Tiền GTGT:<b class="cl_b">{{ number_format(($value["tongtien"] *10)/100,0,',','.')  }}</b></td>
          <td class="cl_td"></td>
        </tr>
        <tr>
          <td class="cl_td"></td>
          <td class="cl_td"><b class="cl_b">STT in:123</b>
          <p class="cl_td"><b class="cl_b">ID HD:2345</b></p></td>
        </tr>
        <tr>
          <td class="cl_td">cộng tiền:<b class="cl_b">{{ number_format($value["tongtien"] + (($value["tongtien"] *10)/100),0,',','.') }}</b></td>
          <td></td>
        </tr>
        <tr>
          <td class="td" colspan="2" class="cl_td">Đề nghị khách hàng thanh toán đúng thời hạn<br/>ký tên</td>
        </tr>
          <tr style="height: 70px"></tr>
      </tbody>
      @endforeach
       @endforeach
      @endforeach
    </table>
  </div>
@endsection