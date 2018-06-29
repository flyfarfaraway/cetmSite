function CommonFunction() {
    this.popupRegister = function (headerText) {
        $('.register-demo').on('click', function () {
            let html = '<div id="myModal" class="modal fade modal-register mrw-pop" role="dialog"><div class="modal-dialog">' +
                         '<div class="modal-content">' +
                            '<div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button>' +
                            '<h4 class="modal-title">' + headerText + '</h4></div>' +
                        '<div class="modal-body"><p class="text-center">Gửi đăng ký demo giải pháp cho chúng tôi để được hỗ trợ về giải pháp và sản phẩm.</p>' +
                            '<form action="/wp-admin/api.php">' +
                            '<div class="form-group name"><input type="text" class="form-control" id="exampleInputEmail1" name="fullname" aria-describedby="emailHelp" placeholder="Họ và tên"></div>' +
                            '<div class="form-group phone"><input type="text" class="form-control" id="exampleInputPassword1" name="phone" placeholder="Số điện thoại"></div>' +
                            '<div class="form-group email"><input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Email"></div>' +
                            '<div class="form-group select-demo">' +
                            '<select class="form-control">' +
                                '<option value="0">Xếp hàng thông minh</option><option value="1">Quảng cáo thông minh</option><option value="2">Đặt chỗ thông minh</option><option value="3">Phản hồi thông minh</option><option value="4">Nhận diện thông minh</option><option value="5">Xếp hàng thông minh</option>' +
                            '</select></div>' +
                            '<div class="form-group content"><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" placeholder="Tin nhắn"></textarea></div>' +
                            '</form></div><div class="text-center group-submit"><button type="submit" class="btn btn-primary send-btn">Gửi đăng kí</button></div></div></div></div>'
            $('body').append(html)
            $('.modal-register').modal('show');
            $('.modal-register').on('hidden.bs.modal', function () {
                $('.modal-register').remove();
            });
        })
    }

}