<style>
    .bg-page8 {
        background-image: url('{{ asset('images/pages/8/bg-8.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;

    }

    .bg-view-page8 {
        background-color: rgb(208, 208, 208, 0.8);

        padding-left: 10px;
        padding-right: 10px;
        padding-bottom: 5px;
        border-radius: 3%;
        box-shadow: 4px 4px 6px rgba(0, 0, 0, 0.7);
    }

    .title-page8 {
        color: white;
        font-size: 3.5rem;
        padding-top: 5px;
        text-shadow:
            3px 3px 0px black,
            -3px -3px 0px black,
            3px -3px 0px black,
            -3px 3px 0px black;
    }

    .bg-view-in-page8 {
        background-color: rgb(235, 235, 235, 0.4);
        min-height: 36rem;
        border-radius: 3%;
        padding-left: 10px;
        padding-right: 10px;
    }

    .card-view-page8 {
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

    .card-view-page8:hover {
        transform: translateY(-5px);
        /* ยกปุ่มขึ้นเล็กน้อย */
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        /* เงารอบๆ เมื่อโฮเวอร์ */
        background: #f7f7f7;
        /* เปลี่ยนพื้นหลังเมื่อโฮเวอร์ */
    }

    .card-view-page8 .title {
        font-size: 1.5rem;
        color: #333;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        /* กำหนดให้แสดงเพียง 2 บรรทัด (ประมาณ 25 คำ) */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        /* แสดง "..." เมื่อข้อความยาวเกิน */
    }


    .card-view-page8 .date {
        font-size: 1.5rem;
        color: #555;
    }

    .card-view-page8 .content {
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

    .luxury-button {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px 10px;
        background: linear-gradient(to right, #003c56, #00b8b8);
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
        border-radius: 35px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
        transition: transform 0.2s, box-shadow 0.2s;
    }

    /* สำหรับหน้าจอขนาด lg หรือใหญ่กว่า (1200px ขึ้นไป) */
    @media (min-width: 1200px) {
        .luxury-button {
            width: 200px;
            padding: 10px 10px;
            font-size: 1.4rem;
            color: white;
            text-shadow:
                2px 2px 0px black,
                -2px -2px 0px black,
                2px -2px 0px black,
                -2px 2px 0px black;
        }
    }

    .luxury-button:hover {
        transform: translateY(-2px);
        transform: rotate(2deg) scale(1.05);
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

    .hover-effect {
        transition: transform 0.3s ease, opacity 0.3s ease;
        /* การเปลี่ยนแปลงของภาพ */
    }

    .hover-effect:hover {
        transform: scale(1.02);
        /* ขยายภาพเมื่อ hover */
        opacity: 0.8;
        /* ทำให้ภาพโปร่งแสง */
    }
</style>
<main class="d-flex align-items-center justify-content-center bg-page8">
    <div class="container d-flex flex-lg-row flex-column align-items-center justify-content-center gap-2">

        <div class="d-flex flex-column align-content-center justify-content-center w-100 gap-2">
            <div class="d-flex align-content-center justify-content-around gap-2">
                {{-- <div class="luxury-button" onclick="changeContent('EGP', {{ json_encode($procurement) }})">ประกาศ EGP</div> --}}
                <div class="luxury-button" onclick="changeContent('จัดซื้อจัดจ้าง', {{ json_encode($procurement) }})">
                    ประกาศจัดซื้อจัดจ้าง</div>
                <div class="luxury-button"
                    onclick="changeContent('ผลจัดซื้อจัดจ้าง', {{ json_encode($procurementResults) }})">ผลจัดซื้อจัดจ้าง
                </div>
                <div class="luxury-button" onclick="changeContent('ราคากลาง', {{ json_encode($average) }})">ประกาศราคากลาง
                </div>
                <div class="luxury-button" onclick="changeContent('เก็บรายได้', {{ json_encode($revenue) }})">
                    งานเก็บรายได้
                </div>
            </div>
            <div class="bg-view-page8">
                <div class="title-page8 font-sarabun-bold d-flex justify-content-center align-items-center"
                    id="titlePage">
                    ประกาศจัดซื้อจัดจ้าง
                </div>
                <div class="bg-view-in-page8 d-flex flex-column justify-content-center align-items-center gap-1 overflow-auto"
                    id="contentArea">
                    <!-- เนื้อหาที่จะถูกเปลี่ยนแปลงที่นี่ -->
                </div>
                <div id="pagination" class="d-flex justify-content-center mt-3">
                    <button id="prevBtn" class="btn btn-outline-dark me-2" style="display:none;">
                        <i class="fa-solid fa-chevron-left"></i> ก่อนหน้า
                    </button>
                    <button id="nextBtn" class="btn btn-outline-dark" style="display:none;">
                        ถัดไป <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column align-content-start justify-content-center gap-2">
            <a href="https://infocenter.oic.go.th/เทศบาลเมืองจันทบุรี/topic.php?gid=8729&mid=1021" class="hover-effect">
                <img src="{{ asset('images/pages/8/BN.png') }}" alt="bn" width="310px;">
            </a>
            <a href="https://infocenter.oic.go.th/เทศบาลเมืองจันทบุรี/topic.php?gid=8729&mid=1021" class="hover-effect">
                <img src="{{ asset('images/pages/8/btn-e-service.png') }}" alt="btn-e-service" width="310px;">
            </a>
            <!-- Facebook Page Plugin -->
            <div class="fb-page" data-href="https://www.facebook.com/chanthaburi.town.municipality" data-tabs="timeline"
                data-width="300" data-height="540" data-small-header="false" data-adapt-container-width="false"
                data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/chanthaburi.town.municipality" class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/chanthaburi.town.municipality">Facebook</a>
                </blockquote>
            </div>
        </div>
    </div>

</main>

<!-- สคริปต์ Facebook SDK -->
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0"
    nonce="A4Z4J6YV"></script>

<script>
    let currentPage = 1; // หน้าปัจจุบัน
    const itemsPerPage = 5; // จำนวนรายการที่แสดงในแต่ละหน้า
    let allItems = []; // ข้อมูลทั้งหมด (จะถูกโหลดจาก backend)

    // ฟังก์ชันที่ใช้แสดงเนื้อหา
    function changeContent(topic, data) {
        // เปลี่ยนหัวข้อ
        document.getElementById('titlePage').innerHTML = 'ประกาศ ' + topic;

        // เก็บข้อมูลทั้งหมด
        allItems = data;

        // เรียกใช้ฟังก์ชันเพื่อแสดงข้อมูลตามหน้า
        displayItems();
    }

    // ฟังก์ชันเพื่อแสดงข้อมูลในหน้าที่เลือก
    function displayItems() {
        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = currentPage * itemsPerPage;

        // เลือกข้อมูลในหน้าที่ต้องการแสดง
        const itemsToDisplay = allItems.slice(startIndex, endIndex);
        let contentArea = document.getElementById('contentArea');
        contentArea.innerHTML = ''; // ล้างเนื้อหาที่มีอยู่

        // ลูปผ่านข้อมูลเพื่อแสดงผล
        itemsToDisplay.forEach(item => {
            let newContent = document.createElement('div');
            newContent.className = 'card-view-page8';

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

            // ฟังก์ชันตัดข้อความ title_name ให้ไม่เกิน 40 ตัวอักษร
            const truncateTitle = (title) => {
                if (title.length > 40) {
                    return title.substring(0, 40) +
                    '...'; // ตัดข้อความให้เหลือแค่ 40 ตัวอักษรและเพิ่ม '...'
                }
                return title;
            };

            // สร้างเนื้อหาใหม่
            newContent.innerHTML = `
            <div class="d-flex justify-content-between align-content-center">
                <div class="title text-truncate d-flex justify-content-start align-items-center">
                    <img src="{{ asset('images/pages/8/bell.png') }}" alt="bell" width="25" height="25"> ${truncateTitle(item.title_name)}
                </div>
                <div class="date pt-1"><i class="fa-solid fa-calendar-days text-warning"></i> ${item.date}</div>
            </div>
            <div class="content">
                ${pdfContent} <!-- แสดงรายการ PDF ที่มี -->
            </div>
        `;

            contentArea.appendChild(newContent); // เพิ่มเนื้อหาลงในส่วนที่แสดงผล
        });

        // แสดงหรือซ่อนปุ่ม "ก่อนหน้า" และ "ถัดไป"
        document.getElementById('prevBtn').style.display = currentPage === 1 ? 'none' : 'inline-block';
        document.getElementById('nextBtn').style.display = currentPage * itemsPerPage >= allItems.length ? 'none' :
            'inline-block';
    }

    // ฟังก์ชันที่ใช้เมื่อคลิก "ก่อนหน้า"
    document.getElementById('prevBtn').addEventListener('click', function() {
        if (currentPage > 1) {
            currentPage--;
            displayItems();
        }
    });

    // ฟังก์ชันที่ใช้เมื่อคลิก "ถัดไป"
    document.getElementById('nextBtn').addEventListener('click', function() {
        if (currentPage * itemsPerPage < allItems.length) {
            currentPage++;
            displayItems();
        }
    });

    // เมื่อโหลดหน้าเว็บ เรียกฟังก์ชัน changeContent เพื่อเลือก "ประกาศ EGP"
    window.onload = function() {
        changeContent('จัดซื้อจัดจ้าง', @json($procurement)); // เปลี่ยนให้เหมาะสมกับข้อมูลของคุณ
    }
</script>
