<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bio Medic Center</title>
    <link rel="icon" type="image/png" href="https://nizlinh18.github.io/baitap/tab.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php require_once __DIR__.'/includes/header.php'; ?>
<!-- HERO: banner full-width -->
<section class="hero">
  <div class="container-fluid px-0">
    <div id="heroCarousel" class="carousel slide carousel-fade bmc-hero"
         data-bs-ride="carousel" data-bs-interval="4200" data-bs-pause="hover">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://nganngan5905-tech.github.io/LTWEB/draft%201.png" alt="Banner 1" class="w-100 h-100 object-cover">
        </div>
        <div class="carousel-item">
          <img src="https://phien123.github.io/webPK/Banner2.png" alt="Banner 2" class="w-100 h-100 object-cover">
        </div>
        <div class="carousel-item">
          <img src="https://nganngan5905-tech.github.io/LTWEB/draft.png" alt="Banner 3" class="w-100 h-100 object-cover">
        </div>
        <div class="carousel-item">
          <img src="https://nganngan5905-tech.github.io/LTWEB/snapedit_1758634967670.jpeg" alt="Banner 3" class="w-100 h-100 object-cover">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span><span class="visually-hidden">Trước</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span><span class="visually-hidden">Sau</span>
      </button>
    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="features py-5">
  <div class="container">
    <h2 class="section-title">Tiện ích dành cho khách hàng</h2>
    <p class="section-subtitle">Các dịch vụ tiện ích hiện đại giúp khách hàng dễ dàng tiếp cận và sử dụng dịch vụ y tế chất lượng cao</p>
    <div class="row g-4 mt-2">
      <div class="col-md-6 col-lg-3">
        <div class="feature-card">
          <div class="icon"><i class="fa-solid fa-calendar-days"></i></div>
          <h5>Đặt lịch xét nghiệm</h5>
          <p>Đặt lịch lấy mẫu tại nhà hoặc tại cơ sở của Bio</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="feature-card">
          <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
          <h5>Tra cứu kết quả</h5>
          <p>Tra cứu kết quả dịch vụ y tế tại Hệ thống Y tế Bio</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="feature-card">
          <div class="icon"><i class="fa-solid fa-stamp"></i></div>
          <h5>Bảng giá dịch vụ</h5>
          <p>Tra cứu giá dịch vụ y tế tại Bio</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="feature-card">
          <div class="icon"><i class="fa-solid fa-message"></i></div>
          <h5>Hỏi đáp chuyên gia</h5>
          <p>Đặt câu hỏi, nhận hướng dẫn từ chuyên gia</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TEAM: slider ngang có nút ‹ › -->
<section id="team" class="py-5 bg-light">
  <div class="container">
    <h2 class="section-title">Đội ngũ của chúng tôi</h2>
    <p class="section-subtitle">Đội ngũ bác sĩ, chuyên gia đầu ngành với nhiều năm kinh nghiệm trong lĩnh vực y tế</p>

    <div class="team-viewport">
      <div class="team-track">
        <div class="team-card card text-center">
          <div class="oval"><img src="https://tamanhhospital.vn/wp-content/uploads/2010/01/pgs-trieu-trieu-duong.png" alt="TTUT.PGS.TS TRIỆU TRIỀU DƯƠNG"></div>
          <div class="card-body">
            <h6 class="fw-bold">TTUT.PGS.TS TRIỆU TRIỀU DƯƠNG</h6>
            <p class="text-secondary small mb-0">Giám đốc Khối Ngoại</p>
          </div>
        </div>
        <div class="team-card card text-center">
          <div class="oval"><img src="https://tamanhhospital.vn/wp-content/uploads/2023/09/bs-tran-van-hinh-avt.png" alt="PGS.TS.BS.CKII TRẦN VĂN HINH"></div>
          <div class="card-body">
            <h6 class="fw-bold">PGS.TS.BS.CKII TRẦN VĂN HINH</h6>
            <p class="text-secondary small mb-0">Trưởng khoa Tiết niệu - Nam học</p>
          </div>
        </div>
        <div class="team-card card text-center">
          <div class="oval"><img src="https://tamanhhospital.vn/wp-content/uploads/2011/01/bac-pham-nguyen-vinh.png" alt="PGS.TS.BS PHẠM NGUYỄN VINH"></div>
          <div class="card-body">
            <h6 class="fw-bold">PGS.TS.BS PHẠM NGUYỄN VINH</h6>
            <p class="text-secondary small mb-0">Giám đốc Trung tâm Tim mạch</p>
          </div>
        </div>
        <div class="team-card card text-center">
          <div class="oval"><img src="https://tamanhhospital.vn/wp-content/uploads/2021/03/giao-su-tran-quan-anh.jpg" alt="NGND.GS.TS.BS TRẦN QUÁN ANH"></div>
          <div class="card-body">
            <h6 class="fw-bold">NGND.GS.TS.BS TRẦN QUÁN ANH</h6>
            <p class="text-secondary small mb-0">Cố vấn khoa Ngoại Tiết nhiệu - Nam học</p>
          </div>
        </div>
         <div class="team-card card text-center">
          <div class="oval"><img src="https://tamanhhospital.vn/wp-content/uploads/2021/03/bac-si-vu-le-chuyen.png" alt="TTUT.PGS.TS.BS VŨ LÊ CHUYÊN"></div>
          <div class="card-body">
            <h6 class="fw-bold">TTUT.PGS.TS.BS VŨ LÊ CHUYÊN</h6>
            <p class="text-secondary small mb-0">Giám đốc Trung tâm Tiết Niệu-Thận học- Nam khoa</p>
          </div>
        </div>
         <div class="team-card card text-center">
          <div class="oval"><img src="https://tamanhhospital.vn/wp-content/uploads/2011/01/bs-tran-quang-binh-avt.png" alt="TTUT.PGS.TS.BS TRẦN QUANG BÍNH"></div>
          <div class="card-body">
            <h6 class="fw-bold">TTUT.PGS.TS.BS TRẦN QUANG BÍNH</h6>
            <p class="text-secondary small mb-0">Giám đốc Trung tâm đào tạo và Nghiên cứu khoa học</p>
          </div>
        </div>
         <div class="team-card card text-center">
          <div class="oval"><img src="https://tamanhhospital.vn/wp-content/uploads/2011/01/bac-si-nguyen-ba-my-nhi-avt.png" alt="BS.CKII NGUYỄN BÁ MỸ NHI"></div>
          <div class="card-body">
            <h6 class="fw-bold">BS.CKII NGUYỄN BÁ MỸ NHI</h6>
            <p class="text-secondary small mb-0">Giám đốc Trung tâm Sản Phụ Khoa</p>
          </div>
        </div>
         <div class="team-card card text-center">
          <div class="oval"><img src="https://tamanhhospital.vn/wp-content/uploads/2011/01/bs-vu-truong-khanh.png" alt="TTUT.TS.BS VŨ TRƯỜNG KHANH"></div>
          <div class="card-body">
            <h6 class="fw-bold">TTUT.TS.BS VŨ TRƯỜNG KHANH</h6>
            <p class="text-secondary small mb-0">Trưởng khoa Khoa Tiêu hóa-Gan mật-Tụy</p>
          </div>
        </div>
         <div class="team-card card text-center">
          <div class="oval"><img src="https://tamanhhospital.vn/wp-content/uploads/2021/03/bac-si-do-minh-hung.png" alt="TS.BS ĐỖ MINH HÙNG"></div>
          <div class="card-body">
            <h6 class="fw-bold">TS.BS ĐỖ MINH HÙNG</h6>
            <p class="text-secondary small mb-0">Giám đốc Trung tâm nội soi và Phẫu thuật Nội soi Tiêu hóa</p>
          </div>
        </div>
         <div class="team-card card text-center">
          <div class="oval"><img src="https://tamanhhospital.vn/wp-content/uploads/2021/03/bac-si-cam-ngoc-phuong.png" alt="TS.BS CAM NGỌC PHƯỢNG"></div>
          <div class="card-body">
            <h6 class="fw-bold">TS.BS CAM NGỌC PHƯỢNG</h6>
            <p class="text-secondary small mb-0">Nguyên Trưởng khoa Truyền nhiễm, Bệnh viện Bạch Mai</p>
          </div>
        </div>
  <div class="team-card card text-center">
          <div class="oval"><img src="https://tamanhhospital.vn/wp-content/uploads/2020/12/avt-bac-si-the-truong-1.png" alt="TTUT.TS.BS NGUYỄN THẾ TRƯỜNG"></div>
          <div class="card-body">
            <h6 class="fw-bold">TTUT.TS.BS NGUYỄN THẾ TRƯỜNG</h6>
            <p class="text-secondary small mb-0">Phó khoa Tiết niệu-Nam học</p>
          </div>
        </div>
        
  <div class="team-card card text-center">
          <div class="oval"><img src="https://tamanhhospital.vn/wp-content/uploads/2022/11/vu-huy-tru.png" alt="PGS.TS.BS VŨ HUY TRỤ"></div>
          <div class="card-body">
            <h6 class="fw-bold">PGS.TS.BS VŨ HUY TRỤ</h6>
            <p class="text-secondary small mb-0">Trưởng khoa Nhi</p>
          </div>
        </div>
  <div class="team-card card text-center">
          <div class="oval"><img src="https://tamanhhospital.vn/wp-content/uploads/2011/01/bsi-tran-phan-chung-thuy.png" alt="GS.TS.BS TRẦN PHAN CHUNG THỦY"></div>
          <div class="card-body">
            <h6 class="fw-bold">GS.TS.BS TRẦN PHAN CHUNG THỦY</h6>
            <p class="text-secondary small mb-0">Giám đốc Trung Tâm Tai Mũi Họng</p>
          </div>
        </div>
  <div class="team-card card text-center">
          <div class="oval"><img src="https://tamanhhospital.vn/wp-content/uploads/2011/01/bs-le-minh-ky.png" alt="PGS.TS.BS lÊ MINH KỲ"></div>
          <div class="card-body">
            <h6 class="fw-bold">PGS.TS.BS lÊ MINH KỲ</h6>
            <p class="text-secondary small mb-0">Phụ trách chuyên môn Trung tâm Tai Mũi Họng</p>
          </div>
        </div>
  <div class="team-card card text-center">
          <div class="oval"><img src="https://tamanhhospital.vn/wp-content/uploads/2011/01/bs-tran-thi-thuy-hang.png" alt="THS.BS.CKII TRẦN THỊ THÚY HẰNG"></div>
          <div class="card-body">
            <h6 class="fw-bold">THS.BS.CKII TRẦN THỊ THÚY HẰNG</h6>
            <p class="text-secondary small mb-0">Trưởng khoa Tai Mũi Họng, Trung tâm Tai Mũi Họng</p>
          </div>
        </div>
        <div class="team-card card text-center">
          <div class="oval"><img src="https://tamanhhospital.vn/wp-content/uploads/2021/03/bac-si-le-hoang.png" alt="TTND.PGS.TS.BS LÊ HOÀNG"></div>
          <div class="card-body">
            <h6 class="fw-bold">TTND.PGS.TS.BS LÊ HOÀNG</h6>
            <p class="text-secondary small mb-0">Giám đốc Trung tâm Hỗ trợ sinh sản</p>
          </div>
        </div>
  <div class="team-card card text-center">
          <div class="oval"><img src="https://tamanhhospital.vn/wp-content/uploads/2021/10/avt-bac-si-giao-su-ngo-quy-chau.png" alt="GS.TS.BS NGÔ QUÝ CHÂU"></div>
          <div class="card-body">
            <h6 class="fw-bold">GS.TS.BS NGÔ QUÝ CHÂU</h6>
            <p class="text-secondary small mb-0">Phó Tổng Giám đốc chuyên môn</p>
          </div>
        </div>
   <div class="team-card card text-center">
          <div class="oval"><img src="https://tamanhhospital.vn/wp-content/uploads/2011/02/n2.png" alt="THS.BS GIANG HUỲNH NHƯ"></div>
          <div class="card-body">
            <h6 class="fw-bold">THS.BS GIANG HUỲNH NHƯ</h6>
            <p class="text-secondary small mb-0">Giám đốc Trung tâm Hỗ trợ sinh sản</p>
          </div>
        </div>
   <div class="team-card card text-center">
          <div class="oval"><img src="https://tamanhhospital.vn/wp-content/uploads/2021/03/bac-si-tran-vuong-thao-nghi.png" alt="BS TRÂN VƯƠNG THẢO NGHI"></div>
          <div class="card-body">
            <h6 class="fw-bold">BS TRÂN VƯƠNG THẢO NGHI</h6>
            <p class="text-secondary small mb-0">Trưởng khoa Khoa Ung bướu</p>
          </div>
        </div>
        </div>
      <button class="team-nav team-prev" aria-label="Trước"><i class="fa-solid fa-angle-left"></i></button>
      <button class="team-nav team-next" aria-label="Sau"><i class="fa-solid fa-angle-right"></i></button>
    </div>
  </div>

</section>

<!-- =============== REASONS (ảnh + bullet) =============== -->
<section class="py-5">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-lg-6 order-lg-1 order-2">
        <h3 class="fw-bold lh-base">Lý do nên chọn <span class="text-primary">BIO MEDIC CENTER</span> ?</h3>
        <ul class="bmc-check mt-3">
          <li>Lấy và trả kết quả xét nghiệm tiện lợi, nhanh chóng</li>
          <li>Đội ngũ chuyên gia y tế hàng đầu Việt Nam</li>
          <li>Chi phí xét nghiệm hợp lý</li>
          <li>Sẵn sàng hỗ trợ bệnh nhân từ chuyên gia y tế</li>
          <li>Máy móc xét nghiệm tiên tiến hàng đầu thế giới</li>
        </ul>
      </div>
      <div class="col-lg-6 order-lg-2 order-1">
        <img src="https://nganngan5905-tech.github.io/LTWEB/snapedit_1758437422060.jpeg" class="img-fluid rounded-4 w-100" alt="Lý do chọn">
      </div>
    </div>
  </div>
</section>

<!-- =============== STATS =============== -->
<section class="stats-strip py-5 text-white">
  <div class="container">
    <div class="row text-center">
      <div class="col-6 col-lg-3 mb-3 mb-lg-0">
        <div class="stat-num">100.000+</div>
        <div>Khách hàng mỗi năm</div>
      </div>
      <div class="col-6 col-lg-3 mb-3 mb-lg-0">
        <div class="stat-num">10+</div>
        <div>Chuyên gia y tế</div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="stat-num">30+</div>
        <div>Dịch vụ xét nghiệm</div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="stat-num">1</div>
        <div>Cơ sở khám chữa bệnh</div>
      </div>
    </div>
  </div>
</section>

<!-- CERTIFICATE -->
<section class="py-5">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-lg-6">
        <h2 class="section-title text-start">Chứng chỉ</h2>
        <p class="lead">Sao Khuê là giải thưởng danh giá… Năm 2023, Bio Medic Center được vinh danh là giải pháp xuất sắc thuộc lĩnh vực y tế, chăm sóc sức khỏe.</p>
      </div>
      <div class="col-lg-6">
        <img src="https://nganngan5905-tech.github.io/LTWEB/snapedit_1758440530650.jpeg" class="img-fluid rounded-4" alt="Chứng chỉ">
      </div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section id="services" class="py-5 bg-light">
  <div class="container">
    <h2 class="section-title">Dịch vụ xét nghiệm của BIO Medic Center</h2>
    <p class="section-subtitle">Cung cấp đa dạng các loại xét nghiệm từ cơ bản đến chuyên sâu với độ chính xác cao</p>
    <div class="row g-4 mt-1">
      <div class="col-md-6 col-lg-4">
        <div class="card service h-100">
          <img src="https://www.vinmec.com/static/uploads/20190822_085457_758016_DNA_test_max_1800x1800_jpg_5dc92dd486.jpg" class="card-img-top" alt="Xét nghiệm ADN">
          <div class="card-body">
            <h6 class="fw-bold mb-1">Xét nghiệm ADN</h6>
            <p class="small text-secondary mb-2">Trong 1 ngày có kết quả</p>
            <div class="price"><span class="now">999,000đ</span> <span class="old">1,299,000đ</span></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card service h-100">
          <img src="https://medlatec.vn/media/14520/content/20200722_xet-nghiem-mau-01.jpg" class="card-img-top" alt="Xét nghiệm Máu">
          <div class="card-body">
            <h6 class="fw-bold mb-1">Xét nghiệm Máu</h6>
            <p class="small text-secondary mb-2">Xét nghiệm công thức máu toàn phần</p>
            <div class="price"><span class="now">299,000đ</span> <span class="old">450,000đ</span></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card service h-100">
          <img src="https://umcclinic.com.vn/Data/Sites/1/media/y-hoc-thuong-thuc/x%C3%A9t-nghi%E1%BB%87m/x%C3%A9t-nghi%E1%BB%87m-t%E1%BB%95ng-ph%C3%A2n-t%C3%ADch-n%C6%B0%E1%BB%9Bc-ti%E1%BB%83u/x%C3%A9t-nghi%E1%BB%87m-t%E1%BB%95ng-ph%C3%A2n-t%C3%ADch-n%C6%B0%E1%BB%9Bc-ti%E1%BB%83u-l%C3%A0-g%C3%AC/xet-nghiem-nuoc-tieu-danh-gia-chuc-nang-than.jpg" class="card-img-top" alt="Xét nghiệm Nước Tiểu">
          <div class="card-body">
            <h6 class="fw-bold mb-1">Xét nghiệm Nước Tiểu</h6>
            <p class="small text-secondary mb-2">Phát hiện các bệnh về thận và đường tiết niệu</p>
            <div class="price"><span class="now">199,000đ</span> <span class="old">300,000đ</span></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card service h-100">
          <img src="https://www.vinmec.com/static/uploads/20190822_085237_833968_xet_nghiem_gen_max_1800x1800_jpg_2ad6d792c1.jpg" class="card-img-top" alt="Xét nghiệm Sinh Học Phân Tử">
          <div class="card-body">
            <h6 class="fw-bold mb-1">Xét nghiệm Sinh Học Phân Tử</h6>
            <p class="small text-secondary mb-2">PCR, giải trình tự gen</p>
            <div class="price"><span class="now">2,500,000đ</span> <span class="old">3,200,000đ</span></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card service h-100">
          <img src="https://tamanhhospital.vn/wp-content/uploads/2022/01/chuan-bi-truoc-khi-xet-nghiem.jpg" class="card-img-top" alt="Xét nghiệm Dị Ứng">
          <div class="card-body">
            <h6 class="fw-bold mb-1">Xét nghiệm Dị Ứng</h6>
            <p class="small text-secondary mb-2">Xác định các tác nhân gây dị ứng</p>
            <div class="price"><span class="now">1,200,000đ</span> <span class="old">1,500,000đ</span></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card service h-100">
          <img src="https://benhvienphuongdong.vn/public/uploads/2024/thang-10/xet-nghiem-hormone-tuyen-giap/xet-nghiem-hormone-tuyen-giap-1.jpg" class="card-img-top" alt="Xét nghiệm Hormone">
          <div class="card-body">
            <h6 class="fw-bold mb-1">Xét nghiệm Hormone</h6>
            <p class="small text-secondary mb-2">Kiểm tra nội tiết tố toàn diện</p>
            <div class="price"><span class="now">1,800,000đ</span> <span class="old">2,200,000đ</span></div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-4"><a href="#" class="btn btn-primary">Xem thêm</a></div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="py-5">
  <div class="container">
    <h2 class="section-title">Khách hàng nói gì về Bio Medic Center</h2>
    <p class="section-subtitle">Những phản hồi chân thật từ khách hàng đã sử dụng dịch vụ của chúng tôi</p>
    <div class="row g-4 mt-1">
      <div class="col-md-4">
        <div class="card shadow-sm h-100 review">
          <div class="card-body">
            <div class="text-warning mb-2">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
            </div>
            <p class="mb-3">Mình ấn tượng với dịch vụ xét nghiệm mà Bio Medic Center cung cấp rất nhanh gọn và tiện lợi. Kết quả chính xác và được tư vấn tận tình.</p>
            <div class="d-flex align-items-center gap-3">
              <img src="https://placehold.co/50x50/0B63E5/FFFFFF/png?text=K" class="rounded-circle" width="36" height="36" alt="Khách hàng">
              <div class="small"><strong>Nguyễn Văn Khang</strong><br><span class="text-secondary">Giáo viên</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm h-100 review">
          <div class="card-body">
            <div class="text-warning mb-2">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
            </div>
            <p class="mb-3">Dịch vụ lấy mẫu tại nhà rất tiện lợi, tiết kiệm thời gian. Nhân viên lấy mẫu chuyên nghiệp, thân thiện. Rất hài lòng với chất lượng dịch vụ.</p>
            <div class="d-flex align-items-center gap-3">
              <img src="https://placehold.co/50x50/0B63E5/FFFFFF/png?text=L" class="rounded-circle" width="36" height="36" alt="Khách hàng">
              <div class="small"><strong>Trần Thị Lan</strong><br><span class="text-secondary">Kế toán</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm h-100 review">
          <div class="card-body">
            <div class="text-warning mb-2">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
            </div>
            <p class="mb-3">Tôi đã sử dụng dịch vụ xét nghiệm ADN tại Bio Medic Center. Quy trình nhanh chóng, bảo mật thông tin tốt. Kết quả được trả đúng hẹn và giải thích rõ ràng.</p>
            <div class="d-flex align-items-center gap-3">
              <img src="https://placehold.co/50x50/0B63E5/FFFFFF/png?text=M" class="rounded-circle" width="36" height="36" alt="Khách hàng">
              <div class="small"><strong>Phạm Văn Minh</strong><br><span class="text-secondary">Doanh nhân</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- NEWS -->
<section id="news" class="py-5 bg-light">
  <div class="container">
    <h2 class="section-title">Tin tức y khoa</h2>
    <p class="section-subtitle">Cập nhật những thông tin mới nhất về y tế, sức khỏe và các nghiên cứu khoa học</p>
    <div class="row g-4 mt-1">
      <div class="col-md-4">
        <div class="card shadow-sm h-100 news">
          <img src="https://placehold.co/400x300/0B63E5/FFFFFF/png?text=Tin+Tức+Y+Khoa" class="card-img-top" alt="Thổi bay u dưới niêm mạc không cần phẫu thuật">
          <div class="card-body">
            <h6 class="fw-bold">Thổi bay u dưới niêm mạc không cần phẫu thuật</h6>
            <p class="small text-secondary mb-0">Xuất hiện khối u dưới niêm mạc… điều trị thành công bằng phương pháp nội soi tiên tiến.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm h-100 news">
          <img src="https://placehold.co/400x300/0B63E5/FFFFFF/png?text=Tin+Tức+Y+Khoa" class="card-img-top" alt="Phương pháp mới điều trị ung thư">
          <div class="card-body">
            <h6 class="fw-bold">Phương pháp mới điều trị ung thư</h6>
            <p class="small text-secondary mb-0">Các nhà khoa học vừa công bố phương pháp điều trị ung thư mới với tỷ lệ thành công cao.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm h-100 news">
          <img src="https://placehold.co/400x300/0B63E5/FFFFFF/png?text=Tin+Tức+Y+Khoa" class="card-img-top" alt="Cách phòng ngừa bệnh tim mạch">
          <div class="card-body">
            <h6 class="fw-bold">Cách phòng ngừa bệnh tim mạch</h6>
            <p class="small text-secondary mb-0">Những thói quen sống lành mạnh giúp giảm nguy cơ mắc các bệnh tim mạch hiệu quả.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact" class="contact py-5">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-lg-6">
        <div class="card p-4 shadow-sm contact-card">
          <h3 class="fw-bold text-primary">Liên hệ với chúng tôi!</h3>
          <p class="text-secondary">Để lại thông tin, chúng tôi sẽ liên hệ tư vấn miễn phí cho bạn</p>
          <form class="mt-3">
            <div class="mb-3">
              <label class="form-label">Họ và tên</label>
              <input type="text" class="form-control form-control-lg" placeholder="Nhập họ và tên">
            </div>
            <div class="mb-3">
              <label class="form-label">Số điện thoại</label>
              <input type="text" class="form-control form-control-lg" placeholder="Nhập số điện thoại">
            </div>
            <div class="mb-3">
              <label class="form-label">Dịch vụ quan tâm</label>
              <select class="form-select form-control-lg">
                <option selected>Chọn dịch vụ</option>
                <option value="1">Xét nghiệm ADN</option>
                <option value="2">Xét nghiệm máu</option>
                <option value="3">Xét nghiệm nước tiểu</option>
  
              </select>
            </div>
            <button class="btn btn-primary w-100 py-2 fw-semibold">Gửi thông tin</button>
          </form>
        </div>
      </div>
      <div class="col-lg-6 text-center">
        <img src="https://nganngan5905-tech.github.io/LTWEB/snapedit_1758442364049-removebg-preview.png" class="img-fluid rounded-4" alt="Liên hệ">
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__.'/includes/footer.php'; ?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    
    // JS slider đội ngũ
    (() => {
        const viewport = document.querySelector('.team-viewport');
        if (!viewport) return;
        const track = viewport.querySelector('.team-track');
        const prev = viewport.querySelector('.team-prev');
        const next = viewport.querySelector('.team-next');
        if (!track || !prev || !next) return;

        const step = () => {
            const card = track.querySelector('.team-card');
            return card ? card.getBoundingClientRect().width + 24 : 320;
        };

        prev.addEventListener('click', () => track.scrollBy({ left: -step(), behavior: 'smooth' }));
        next.addEventListener('click', () => track.scrollBy({ left: step(), behavior: 'smooth' }));
    })();

    // JS tự động đóng menu mobile khi nhấn vào link
    (() => {
        const nav = document.getElementById('mainNav'); 
        if (!nav) return;

        nav.addEventListener('click', function(e) {
            if (e.target.closest('.nav-link:not(.dropdown-toggle), .dropdown-item')) {
                // Đảm bảo bootstrap đã được tải
                if (typeof bootstrap !== 'undefined') {
                    const bsCollapse = bootstrap.Collapse.getInstance(nav);
                    if (bsCollapse && nav.classList.contains('show')) {
                        bsCollapse.hide();
                    }
                }
            }
        });
    })();
});
</script>

</body>
</html>