<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rental Lahenga Invoice</title>  
</head>   
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" style="text-align: center; font-family: Verdana, Geneva, sans-serif; font-weight: 600; font-size: 20px;">Invoice</td>
  </tr>  
  <tr>  
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>  
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>  
    <td colspan="2">&nbsp;</td>
  </tr> 
  <tr> 
    <td width="60%">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="font-family: Verdana, Geneva, sans-serif; font-weight: 600; font-size: 15px;">Rental Lahenga Receipt</td>  
          </tr>  
          <tr>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;">Order ID: {{ $order->order_id }}</td>  
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;">Delivery Address</td> 
          </tr> 
          <tr>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:14px;">{{ $address->first_name }} {{ $address->last_name }}</td>
          </tr>
          <tr>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;">
            {{ $address->street_address }} <br>
            {{ $address->city }}, {{ $address->postcode }} 
            </td> 
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr> 
          <tr>
            <td>&nbsp;</td>
          </tr>
          </table></td>
      </tr>
    </table>
    </td>
    <td width="40%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;" align="right"></td>
      </tr>
      <tr>
        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;"  align="right">&nbsp;</td>
      </tr>
      <tr>
        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;"  align="right">Order Date: {{ date('d M Y', strtotime($order->created_at)) }}</td>
      </tr>  
      <tr>
        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;"  align="right">Phone: {{ $address->phone }}</td> 
      </tr> 
      <tr>
        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;"  align="right">Email: {{ $address->email }}</td>
      </tr>   
    </table></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0"> 
      <tr>    
          <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333;" width="30%" height="32" align="center">Product</td>
          <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333;" width="10%" align="center">Price</td>   
          <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333;" width="10%" align="center">Quantity</td>  
          <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333;" width="10%" align="center">Total</td> 
      </tr>
      @foreach($orderProduct as $orderProduct) 
      <tr>
          <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333;" height="32" align="center">{{ $orderProduct->product_name }}</td>   
          <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px; border-bottom:1px solid #333; border-right:1px solid #333;" align="center">Rs.{{ $orderProduct->product_price }}</td>         
          <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px; border-bottom:1px solid #333; border-right:1px solid #333;" align="center">{{ $orderProduct->product_quantity }}</td>     
          <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333;" align="center">Rs.{{ $orderProduct->product_price * $orderProduct->product_quantity }}</td> 
      </tr> 
      @endforeach  
      </table>
    </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td> 
  </tr>
  <tr>
    <td colspan="2" style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:14px;" align="right">Total Amount: Rs.{{ $order->total_price }}</td>    
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:14px;" colspan="2">
      Payment Method: 
      {{ $order->pay_way }} 
    </td> 
  </tr>   
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr> 
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="position:fixed; bottom:100px"> 
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;" colspan="2" align="center">
    (This is computer generated receipt and does not require physical signature.)  
    <br/>Email: info@example.com
    <br/>Phone: +91 123 456 789</td>     
  </tr>    
</table>
</body>
</html>
  