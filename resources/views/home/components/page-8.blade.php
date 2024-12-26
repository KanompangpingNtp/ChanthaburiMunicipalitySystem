<style>
    .bg-page5 {
        background-image: url('{{ asset('images/pages/6/bg-page6.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        /* ทำให้พื้นที่ขยายตามเนื้อหา */
        padding-bottom: 2rem;
        /* กันไม่ให้ขอบติดด้านล่าง */
    }

    .bg-view {
        background-color: rgb(56, 56, 213);
        height: 45rem;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 20px;
        border-radius: 3%;
        box-shadow: 4px 4px 6px rgba(0, 0, 0, 0.7);
    }

    .title-page5 {
        color: white;
        font-size: 5rem;
        padding-top: 10px;
        text-shadow:
            3px 3px 0px black,
            -3px -3px 0px black,
            3px -3px 0px black,
            -3px 3px 0px black;
    }

    .bg-view-in {
        background-color: rgb(139, 139, 232);
        height: 40rem;
        border-radius: 3%;
        padding-left: 10px;
        padding-right: 10px;
        padding-bottom: 5px;
        padding-top: 5px;
    }

    .card-view {
        width: 100%;
        background: white;
        border-radius: 10px;
        padding-left: 10px;
        padding-right: 10px;
        padding-bottom: 10px;
        padding-top: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.7);
        transition: transform 0.3s, box-shadow 0.3s, background 0.3s;
    }

    .card-view:hover {
        transform: translateY(-5px);
        /* ยกปุ่มขึ้นเล็กน้อย */
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        /* เงารอบๆ เมื่อโฮเวอร์ */
        background: #f7f7f7;
        /* เปลี่ยนพื้นหลังเมื่อโฮเวอร์ */
    }

    .card-view .title {
        font-size: 2rem;
        font-weight: bold;
        color: #333;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        /* กำหนดให้แสดงเพียง 2 บรรทัด (ประมาณ 25 คำ) */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        /* แสดง "..." เมื่อข้อความยาวเกิน */
    }


    .card-view .date {
        font-size: 1.5rem;
        color: #555;
    }

    .card-view .content {
        font-size: 1.25rem;
        color: #777;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        /* แสดงผลเพียง 2 บรรทัด */
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: normal;
        /* รองรับการตัดคำในหลายบรรทัด */
    }

    .pencil-button {
        display: flex;
        align-items: center;
        justify-content: center;
        padding-left: 5rem;
        width: 500px;
        height: 100px;
        background: linear-gradient(90deg, #000 0% 20%, #ffd700 20% 90%, #415dff 90% 100%);
        border: none;
        position: relative;
        color: black;
        text-shadow:
            2px 2px 0px rgb(255, 255, 255),
            -2px -2px 0px rgb(255, 255, 255),
            2px -2px 0px rgb(255, 255, 255),
            -2px 2px 0px rgb(255, 255, 255);
        font-size: 3rem;
        cursor: pointer;
        clip-path: polygon(3% 50%, 15% 0%, 100% 0%, 100% 100%, 15% 100%);
        border-top-right-radius: 35px;
        border-bottom-right-radius: 35px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
        transition: transform 0.2s, box-shadow 0.2s;
    }

    /* สำหรับหน้าจอขนาด lg หรือใหญ่กว่า (1200px ขึ้นไป) */
    @media (min-width: 1200px) {
        .pencil-button {
            width: 450px;
            height: 100px;
            font-size: 3rem;
            padding-left: 5rem;
            color: white;
            text-shadow:
                2px 2px 0px black,
                -2px -2px 0px black,
                2px -2px 0px black,
                -2px 2px 0px black;
        }
    }

    .pencil-button:hover {
        transform: translateY(-8px);
        transform: rotate(5deg) scale(1.05);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.7);
    }

    .pdf-item {
        margin-bottom: 8px;
    }

    .text-primary {
        color: #007bff;
        text-decoration: none;
    }

    .text-primary:hover {
        text-decoration: underline;
    }
</style>
<main class="d-flex align-items-center justify-content-center bg-page5">
    <div class="container d-flex flex-lg-row flex-column align-items-center justify-content-center gap-4">
        <div class="d-flex flex-column align-content-center justify-content-around gap-4">
            <div class="pencil-button" onclick="changeContent('EGP', {{ json_encode($procurement) }})">ประกาศ EGP</div>
            <div class="pencil-button" onclick="changeContent('จัดซื้อจัดจ้าง', {{ json_encode($procurement) }})">
                ประกาศจัดซื้อจัดจ้าง</div>
            <div class="pencil-button"
                onclick="changeContent('ผลจัดซื้อจัดจ้าง', {{ json_encode($procurementResults) }})">ผลจัดซื้อจัดจ้าง
            </div>
            <div class="pencil-button" onclick="changeContent('ราคากลาง', {{ json_encode($average) }})">ประกาศราคากลาง
            </div>
            <div class="pencil-button" onclick="changeContent('เก็บรายได้', {{ json_encode($revenue) }})">งานเก็บรายได้
            </div>
        </div>
        <div class="d-flex flex-column align-content-center justify-content-center border bg-view w-100">
            <div class="title-page5 font-sarabun-bold d-flex justify-content-center align-items-center" id="titlePage">
                ประกาศ EGP
            </div>
            <div class="bg-view-in d-flex flex-column justify-content-center align-items-center gap-3 overflow-auto"
                id="contentArea">
                <!-- เนื้อหาที่จะถูกเปลี่ยนแปลงที่นี่ -->
            </div>
        </div>
    </div>

</main>

<script>
    function changeContent(topic, data) {
        // เปลี่ยนหัวข้อ
        document.getElementById('titlePage').innerHTML = 'ประกาศ ' + topic;

        // เปลี่ยนเนื้อหาของการแสดงผล
        let contentArea = document.getElementById('contentArea');
        contentArea.innerHTML = ''; // ล้างเนื้อหาปัจจุบัน

        // ลูปข้อมูลจากตัวแปร data ที่ส่งมา
        data.forEach(item => {
            console.log(item);

            let newContent = document.createElement('div');
            newContent.className = 'card-view font-sarabun-bold';

            // ตรวจสอบและวนลูปผ่าน pdfs เพื่อสร้างรายการ PDF
            let pdfContent = '';
            if (item.pdfs && item.pdfs.length > 0) {
                pdfContent = item.pdfs.map(pdf => `
          <div class="pdf-item ms-3">
              <i class="fa-solid fa-file-pdf text-danger"></i>
              <a href="{{ asset('storage/${pdf.post_pdf_file}') }}" target="_blank" class="text-primary">
                          ${pdf.post_pdf_file.split('/').pop()}
                      </a>
          </div>
      `).join(''); // รวม HTML ของ PDF แต่ละไฟล์
            } else {
                pdfContent = '<div class="text-danger">ไม่มีข้อมูล PDF</div>';
            }

            // สร้างเนื้อหาใหม่
            newContent.innerHTML = `
      <div class="d-flex justify-content-between align-content-center">
          <div class="title text-truncate d-flex justify-content-start align-items-center">
              <img src="{{ asset('images/pages/5/arrow.png') }}" alt="arrow" width="25" height="25"> ${item.title_name}
          </div>
          <div class="date pt-1"><i class="fa-solid fa-calendar-days text-warning"></i> ${item.date}</div>
      </div>
      <div class="content">
          ${pdfContent} <!-- แสดงรายการ PDF ที่มี -->
      </div>
  `;

            contentArea.appendChild(newContent); // เพิ่มเนื้อหาลงในส่วนที่แสดงผล
        });

    }

    // เมื่อโหลดหน้าเว็บ เรียกฟังก์ชัน changeContent เพื่อเลือก "ประกาศ EGP"
    window.onload = function() {
        changeContent('EGP', @json($procurement));
    }
</script>
