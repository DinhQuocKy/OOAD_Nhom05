# OOAD_Nhom05

Phân tích và thiết kế hướng đối tượng là một kỹ thuật tiếp cận phổ biến dùng để phân tích, thiết kế một ứng dụng, hệ thống.
Nó dựa trên bộ các nguyên tắc chung, đó là một tập các hướng dẫn để giúp chúng ta tránh khỏi một thiết kế xấu.
5 nguyên tắc SOLID trong thiết kế hướng đối tượng:

- Một lớp chỉ nên có một lý do để thay đổi, tức là một lớp chỉ nên xử lý một chức năng đơn lẻ, duy nhất thôi. Nếu đặt nhiều chức năng vào trong một lớp sẽ dẫn đến sự phụ thuộc giữa các chức năng với nhau và mặc dù sau đó ta chỉ thay đổi ở một chức năng thì cũng phá vỡ các chức năng còn lại.
- Các lớp, module, chức năng nên dễ dàng Mở (Open) cho việc mở rộng (thêm chức năng mới) và Đóng (Close) cho việc thay đổi.
- Lớp dẫn xuất phải có khả năng thay thế được lớp cha của nó.
- Chương trình không nên buộc phải cài đặt một interface mà nó không sử dụng đến.
- Các module cấp cao không nên phụ thuộc vào các module cấp thấp. Cả hai nên phụ thuộc thông qua lớp trừu tượng. Lớp trừu tượng không nên phụ thuộc vào chi tiết. Chi tiết nên phụ thuộc vào trừu tượng
