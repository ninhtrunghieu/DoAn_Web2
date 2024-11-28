<style>
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
</style>
<div style="display:block;overflow:hidden;background:#f1f1f1;width:100%;max-width:640px;margin:auto">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-bottom:6px solid #fdd504" bgcolor="#ffffff">
    </table>
    <table width="100%" border="0" cellpadding="10" bgcolor="#ffffff" style="padding-bottom:10px">
        <tbody>
            <tr>
                <td style="font-size:13px;color:#333;padding:10px 10px 0 10px">Chào anh/chị <b>{{$email['name']}}</b>,Đơn hàng của anh/ chị đã được tiếp nhận</td>
            </tr>
        </tbody>
    </table>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <tbody>
            @foreach($email['data'] as $value)       
                <tr>
                    <td style="width:30%; text-align:center">{{$value['product_name']}}</td>
                    <td style="width:15%; text-align:center">{{$value['product_count']}}</td>
                    <td style="width:27.5%; text-align:center">{{number_format($value['product_price'])}} VNĐ</td>
                    <td style="width:27.5%; text-align:center">{{number_format((integer)$value['product_price']*(integer)$value['product_count'])}} VNĐ</td>
                </tr>   
            @endforeach     
            <!-- and so on... -->
        </tbody>
        <tfoot style="width: 100%">
            <b>Tổng thanh toán của anh/chị là: {{number_format($email['total'])}}</b>
        </tfoot>
    </table>
    <table bgcolor="#ffffff" width="100%" border="0">
        <tbody>
            <tr>
                <td style="font-size:13px;color:#333;padding:15px 10px 0 10px">Cảm ơn anh/chị <b>{{$email['name']}}</b> đã tin tưởng và mua hàng tại công ty của chúng tôi!</td>
            </tr>
        </tbody>
    </table>

    <table bgcolor="#ffffff" width="100%" border="0">
    </table>
    <table width="100%" border="0" cellspacing="0">
        <tbody>
            <tr>
                <td style="display:block;overflow:hidden;background:#333;color:#fff;font-size:13px;padding:10px 10px 10px 20px">
                    <b style="display:block">Kinh doanh đồ nội thất <a href="javascript::void(0)" style="color:#ffffff!important" target="_blank">FURNITICA.COM</a>- thuộc Công ty TNHH FURNITICA</b>
                    <p>Địa chỉ: Việt Nam</p>
                </td>
            </tr>
        </tbody>
    </table>
</div>