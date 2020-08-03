{{--
<script>
    document.getElementById('select-city').onchange = function () {
        chooseCity()
    };

    function chooseCity() {
        var time_zone = document.getElementById("select-city");
        window.location.href = time_zone.value;
    }
</script>
<div class="main -content">
    <h1> Ứng dụng xem giờ hiện tại của các thành phố trên thế giới</h1>
    <label for="select-city"></label>
    <select id=="select-city">
        <option>Chọn thành phố</option>
        <option value="America-Chihuahua">Chihuahua, Mexico</option>
        <option value="America-Costa_Rica">Costa Rica</option>
        <option value="America-Havana">La Habana, Cuba</option>
        <option value="Asia-Hong_Kong">Hồng Kông</option>
        <option value="Asia-Ho_Chi_Minh">Hồ Chí Minh, Việt Nam</option>
    </select>
</div>
--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Danh sách khách hàng</h1>
<a href="{{route('customers.create')}}">Thêm</a>
<table border="1">
    <thead>
    <tr>
        <th>STT</th>
        <th>Họ và tên</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Nguyễn Văn A</td>
        <td>01234567890</td>
        <td>email.test@mail.com</td>
        <td>
            <a href="{{route('customers.show',1)}}">Xem</a> | <a href="{{route('customers.edit',1)}}">Sửa</a> | <a href="#">Xóa</a>
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>Nguyễn Văn B</td>
        <td>01234567890</td>
        <td>email.test@mail.com</td>
        <td>
            <a href="{{route('customers.show',2)}}">Xem</a> | <a href="{{route('customers.edit',2)}}">Sửa</a> | <a href="#">Xóa</a>
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td>Nguyễn Văn C</td>
        <td>01234567890</td>
        <td>email.test@mail.com</td>
        <td>
            <a href="{{route('customers.show',3)}}">Xem</a> | <a href="{{route('customers.edit',3)}}">Sửa</a> | <a href="#">Xóa</a>
        </td>
    </tr>
    <tr>
        <td>4</td>
        <td>Nguyễn Văn D</td>
        <td>01234567890</td>
        <td>email.test@mail.com</td>
        <td>
            <a href="{{route('customers.show',4)}}">Xem</a> | <a href="{{route('customers.edit',4)}}">Sửa</a> | <a href="#">Xóa</a>
        </td>
    </tr>
    <tr>
        <td>5</td>
        <td>Nguyễn Văn E</td>
        <td>01234567890</td>
        <td>email.test@mail.com</td>
        <td>
            <a href="{{route('customers.show',5)}}">Xem</a> | <a href="{{route('customers.edit',5)}}">Sửa</a> | <a href="#">Xóa</a>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
