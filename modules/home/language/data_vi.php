<?php

/**
 * @Project TMS HOLDINGS
 * @Author TMS HOLDINGS <contact@tms.vn>
 * @Copyright (C) 2021 TMS HOLDINGS. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Thu, 12 Aug 2021 02:49:42 GMT
 */

if (!defined('NV_ADMIN'))
    die('Stop!!!');

try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider (bid, title, image, image2, description, weight, status) VALUES('1', 'Slider trang chủ kích thước 1920x600px', '', '', '', '1', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider (bid, title, image, image2, description, weight, status) VALUES('2', 'Đối tác', '', '', '', '2', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider (bid, title, image, image2, description, weight, status) VALUES('3', 'Khách hàng nói về chúng tôi', '', '', 'Chúng tôi trân trọng  những lời khen tặng cũng như đóng góp ý kiến từ những khách hàng đã sử dụng dịch vụ của chúng tôi. Đó chính là động lực để chúng tôi cố gắng hơn nữa,mang đến những  giá trị tốt nhất khi quý khách sử dụng dịch vụ tại Beyond Incorp', '3', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider (bid, title, image, image2, description, weight, status) VALUES('6', 'TẠI SAO CHỌN BEYOND INCORPORATION SERVICES', '', '', 'Luôn lấy uy tín, chất lượng hiệu quả cùa khách hàng làm yếu tố hàng đầu.<br />Tận tâm, chính xác, minh bạch, rõ ràng.<br />Đội ngũ tư vấn viên nhiệt tình, nhiều năm kinh nghiệp trong lĩnh vực Offshore.<br />Chi phí hợp lý,cạnh tranh nhất.<br />Bảo mật thông tin khách hàng tuyệt đối.', '4', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider (bid, title, image, image2, description, weight, status) VALUES('7', 'Qui trình thành lập doanh nghiệp', 'slider/about-img5-a6cccb5b8dfcd5da5d99b9d3b83a3991.png', '', '', '5', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider (bid, title, image, image2, description, weight, status) VALUES('8', 'DOANH NGHIỆP OFFSHORE', '', '', 'Doanh nghiệp Offshore được hiểu là một doanh nghiệp tư nhân được miễn thuế, phù hợp cho hầu hết bất kỳ hoạt động kinh doanh quốc tế, có một cơ cấu tổ chức linh hoạt, không bị đè nặng bởi các báo cáo thường niên và yêu cầu lưu giữ hồ sơ. Đồng thời, doanh nghiệp Offshore duy trì điều khoản bảo mật nghiêm ngặt, bảo mật danh tính của chủ sở hữu, giám đốc và cổ đông.', '6', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}

try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('1', '1', 'Thành lập doanh nghiệp ở nước ngoài chưa bao giờ đơn giản đến vậy', 'Uy tín - Nhanh chóng - Bảo mật -Tận tâm - Chi phí cạnh tranh nhất thị trường', '', '<p>Ngập tràn ưu đãi tháng 8 - Tiết kiệm lên đến 100 USD và hơn thế nữa cho gói thành lập doanh nghiệp</p>', '', 'slider/slider2.png', '', '1623383232', '1', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('28', '3', 'Quốc Hiệu', 'Nhà Nam Việt', '', 'Thái độ phục vụ khách hàng chu đáo, dịch vụ chuyên nghiệp, vô cùng nhanh chóng. Tôi rất hài lòng với đội ngũ tư vấn viên của Beyond Incorp và sẽ giới thiệu cho bạn bè khi có điều kiện.Cảm ơn các bạn', '', 'slider/quochieu.png', '', '1626373907', '4', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('29', '3', 'Anh Phan', 'Siêu Homes', '', '<p>Thay mặt công ty, tôi dành lời đánh giá cao cho sự chuyên nghiệp, &nbsp;nhiệt tình của toàn bộ đội ngũ tư vấn viên&nbsp;Beyond Incorp&nbsp;. Chúng tôi thực sự hài lòng với những kết quả mà hai bên đã đạt được và rất hy vọng vào những hợp tác trong tương lai.</p>

<p>&nbsp;</p>', '', 'slider/anhphan.png', '', '1626373947', '5', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('5', '3', 'Đình Tứ', 'CTY NAM LONG', '', 'Đội ngũ tư vấn viên nhiệt tình, tư vấn rõ ràng là điều tôi tâm đắc và hài lòng nhất.Chúc cho doanh nghiệp ngày càng phát triển và vươn xa', '', 'slider/dinhtu.png', '', '1623384338', '1', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('6', '3', 'Nhi Nguyễn', 'NV THU MUA', '', 'Dịch vụ hỗ trợ và đội ngũ tư vấn viên rất chuyên nghiệp. Chúng tôi hi vọng sẽ có dịp tiếp tục hợp tác trong những lĩnh vực khác của chúng tôi.Trân trọng cảm ơn', '', 'slider/nhinguyen.png', '', '1623384370', '2', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('7', '3', 'Phú Lê', 'XNK Phú Lê', '', 'Uy tín và chuyên nghiệp là điều khiến tôi hài lòng.Cảm ơn những hỗ trợ tuyệt vời của các bạn', '', 'slider/phule.png', '', '1623384396', '3', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('43', '8', 'IBC/BC', '', '', 'Belize, BVI, Bahamas, Samoa, Cayman, Seychelles', 'https://beyondincorp.com/vi/blog/cong-ty-offshore/', 'slider/1_2.png', '', '1626775071', '1', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('19', '2', 'visa', '', '', '', '', 'slider/visa_1.png', '', '1624024091', '1', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('20', '2', 'Mas', '', '', '', '', 'slider/mas.png', '', '1624024106', '2', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('22', '2', '4', '', '', '', '', 'slider/paypal.png', '', '1624024131', '4', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('23', '2', '5', '', '', '', '', 'slider/payoner-logo.png', '', '1624024150', '5', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('24', '6', 'Pick & Mix Service', '', '', 'Khách hàng có thể tùy chọn&nbsp; dịch vụ chính hoặc các gói dịch vụ đi kèm', '', 'slider/7.png', '', '1624025540', '1', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('25', '6', 'Quick Formation Time', '', '', '<div>Quy trình nhanh chóng, giúp tiết kiệm tối đa thời gian</div>', '', 'slider/1.png', '', '1624025560', '7', '0')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('26', '6', 'Ask Around', '', '', '<div>Chúng tôi được khách hàng tin tưởng và có những&nbsp;đánh giá tuyệt vời</div>', '', 'slider/2.png', '', '1624025591', '5', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('60', '2', '6', '', '', '', '', 'slider/standard-chartered-logo_300_116.png', '', '1627742751', '6', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('31', '6', 'Safety First', '', '', '<div>Trang web được bảo mật SSL, mang đến sự an toàn tuyệt đối</div>', '', 'slider/3.png', '', '1626378662', '6', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('32', '6', 'Fully Authorised', '', '', 'Chúng tôi được ủy quyền bởi những đối tác đáng tin cậy', '', 'slider/4.png', '', '1626402080', '2', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('33', '6', 'We Are Happy To Help You', '', '', 'Tư vấn tận tâm để đưa ra những giải pháp tối ưu nhất', '', 'slider/9.png', '', '1626402096', '3', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('34', '6', 'Transparent', '', '', '<div>No hidden charges</div>

<div>No hidden charges and no price increases for renewals.</div>', '', 'slider/6.png', '', '1626402110', '8', '0')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('35', '6', 'Quick and Simple', '', '', '<div>Quy trình cực kì đơn giản và nhanh chóng</div>', '', 'slider/5.png', '', '1626402124', '4', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('44', '8', 'LLC', '', 'https://beyondincorp.com/vi/blog/cong-ty-offshore/', 'Delaware, Saint Vincent , Belize, St.Kitt Nevis', '', 'slider/2_1.png', '', '1626775086', '2', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('36', '7', 'Tư vấn báo giá khách hàng', '', '', 'Bước đầu tiên cũng như là bước quan trọng nhất là lựa chọn quốc gia phù hợp với mong muốn và ý định của bạn để thành lập công ty offshore.', '', 'slider/money_back_guarantee.png', '', '1626684632', '1', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('37', '7', 'Chuẩn bị hồ sơ thành lập', '', '', 'Bước tiếp theo thì cũng tương tự như việc bạn thành lập công ty tại Singapore hay bất kỳ quốc gia nào khác chính là lựa chọn và đăng ký tên cho công ty offshore bạn dự định thành lập.', '', 'slider/money_back_guarantee.png', '', '1626684647', '2', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('38', '7', 'Thanh toán', '', '', 'Nội dung của điều lệ công ty (Articles of Association, viết tắt AOA) bao gồm những điều luật cơ bản trong việc quản lý &amp; điều hành công ty. Nếu mà bạn sử dụng dịch vụ thành lập công ty offshore từ nhà cung cấp dịch vụ thì bạn sẽ được họ hỗ trợ thực hiện soạn thảo điều lệ công ty.', '', 'slider/money_back_guarantee.png', '', '1626684662', '3', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('39', '7', 'Xét duyệt hồ sơ trong 1 ngày nếu không có vấn đề sẽ được nộp đến cơ quan đăng ký', '', '', 'ét duyệt hồ sơ trong 1 ngày nếu không có vấn đề sẽ được nộp đến cơ quan đăng ký', '', 'slider/money_back_guarantee.png', '', '1626684673', '4', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('40', '7', 'Bộ hồ sơ công ty điện tử sẽ được hoàn thành trong vòng 2-10 ngày làm việc tùy theo từng khu vực pháp lý', '', '', 'Đây là bước cuối cùng và khá quan trọng đó vì nếu sở hữu công ty offshore rồi mà lại không có tài khoản ngân hàng quốc tế thì làm sao có thể giúp doanh nghiệp thuận tiện thực hiện giao dịch buôn bán với đối tác và khách hàng quốc tế.', '', 'slider/money_back_guarantee.png', '', '1626684685', '5', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('41', '7', 'Chúng tôi sẽ gửi file qua email =&gt; quí khách ký và scan lại cho chúng tôi.', '', '', '', '', '', '', '1626764148', '6', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('42', '7', 'Bộ hồ sơ gốc sẽ được gửi về địa chỉ cư trú của quí khách sau khi đã hoàn tất.', '', '', '', '', '', '', '1626764159', '7', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('45', '8', 'Ltd', '', '', 'Hong Kong, Singapore, UK, Cyprus, Cayman', 'https://beyondincorp.com/vi/blog/cong-ty-offshore/', 'slider/3_1.png', '', '1626775101', '3', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('48', '2', 'unlimint', '', '', '', '', 'slider/unlimint-logo.png', '', '1626784362', '3', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_slider_rows (id, bid, title, title_extra, title_link, description, link, image, image_mobile, addtime, weight, status) VALUES('59', '1', 'CHÚNG TÔI CAM KẾT MANG ĐẾN BẠN GIÁ TRỊ VƯỢT NGOÀI MONG ĐỢI', 'Kỳ vọng của bạn là đam mê của chúng tôi - BeyondIncorp hợp tác để thành công', '', '', '', 'slider/slide-p2.jpg', '', '1627551342', '2', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}

try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_support (bid, title, description, weight, status) VALUES('1', 'Hỗ trợ online', '', '1', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}

try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_support_rows (id, bid, title, link, phone, facebook, zalo, skyper, email, image, addtime, weight, status) VALUES('1', '1', 'Tư vấn dịch vụ 24/7', '0813405565', '0813405565', 'https://www.facebook.com/BeyondIncorporationServices', '0813405565', '0813405565', 'support@beyondincorp.com', 'support/support_woman-512_150_150.png', '1615611586', '1', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_support_rows (id, bid, title, link, phone, facebook, zalo, skyper, email, image, addtime, weight, status) VALUES('2', '1', 'Phản ánh chất lượng 24/7', '0813405565', '0813405565', 'https://www.facebook.com/BeyondIncorporationServices', '0813405565', '0813405565', 'support@beyondincorp.com', 'support/support_man-512_150_150.png', '1622533675', '2', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
