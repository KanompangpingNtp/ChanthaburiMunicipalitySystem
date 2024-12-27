<style>
    .bg-page3 {
        background-image: url('{{ asset('images/pages/3/bg-3.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        /* ทำให้พื้นที่ขยายตามเนื้อหา */
        padding-bottom: 5rem;
        /* กันไม่ให้ขอบติดด้านล่าง */
    }

    .classroom-right {
        width: auto;
        height: 5rem;
        object-fit: contain;
    }

    .title-page3 {
        color: black;
        font-size: 5rem;
        display: flex;
        align-items: center;
        /* จัดข้อความให้อยู่กึ่งกลางตามแนวตั้ง */
        justify-content: center;
        padding: 5px 40px;
        /* ระยะห่างซ้ายขวา */
        position: relative;
        /* เพิ่มความหนาของตัวอักษร */

    }


    @media (min-width: 768px) {
        .title-page3 {
            color: black;
            font-size: 5rem;
            display: flex;
            align-items: center;
            /* จัดข้อความให้อยู่กึ่งกลางตามแนวตั้ง */
            justify-content: center;
            padding: 5px 40px;
            /* ระยะห่างซ้ายขวา */
            position: relative;
            /* เพิ่มความหนาของตัวอักษร */

        }

    }

    @media (min-width: 992px) {
        .classroom-right {
            width: auto;
            height: 8rem;
            object-fit: contain;
        }

        .title-page3 {
            color: black;
            font-size: 5rem;
            display: flex;
            align-items: center;
            /* จัดข้อความให้อยู่กึ่งกลางตามแนวตั้ง */
            justify-content: center;
            padding: 5px 40px;
            /* ระยะห่างซ้ายขวา */
            position: relative;
            /* เพิ่มความหนาของตัวอักษร */
        }
    }

    .bg-view-in-detail {
        background-color: rgb(245, 245, 245);
        height: auto;
        /* ปรับให้สูงตามเนื้อหา */
        border-radius: 20px;
        padding: 20px;
        overflow: hidden;
        /* ป้องกันเนื้อหาเกินขอบ */
    }

    .carousel-item img {
        object-fit: cover;
        /* หรือ "contain" ขึ้นอยู่กับว่าต้องการให้ภาพถูกตัดหรือไม่ */
        height: 100%;
        /* หรือกำหนดความสูงที่เหมาะสม */
        width: 100%;
    }
</style>
<!-- Content Section -->
<main class="d-flex align-items-center justify-content-center bg-page3">
    <div class="container d-flex flex-column justify-content-center align-items-center py-5 py-lg-0 px-0">
        <div class="d-flex justify-content-center align-items-center " style=" margin-top:3rem;">
            <div class="title-page3">ป้ายประกาศ</div>
            <img src="{{ asset('images/pages/3/mood-board.png') }}" alt="classroom"
                class="classroom-right pb-3 d-none d-md-block">
        </div>
        <!-- Carousel Section -->
        <div class="bg-view-in-detail shadow">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner rounded">
                    <!-- สไลด์แรก -->
                    <div class="carousel-item active">
                        <img src="{{ asset('images/pages/3/newyear.png') }}" class="d-block w-100" alt="Image 1">
                    </div>
                    <!-- สไลด์ที่สอง -->
                    <div class="carousel-item">
                        <img src="{{ asset('images/pages/3/plugin.png') }}" class="d-block w-100" alt="Image 2">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </div>
    </div>

</main>
