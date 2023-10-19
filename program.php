<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

</head>
<style>
    body {
        font-family: "Poppins", sans-serif;
        background-color: #f0f0f0;
        justify-content: center;
        align-items: center;
        margin: 0;
    }

    .card {
        width: 55vh;
        margin: 5%;
    }

    .card-btn {
        width: 100%;
    }

    .card {

        border-radius: 10px;
        box-shadow: 5px 5px 5px 0px rgba(0, 0, 0, 0.08);

    }

    .card-text {
        margin: 5px;
        margin-bottom: 10px;

    }

    .card-title {
        color: #000;
        margin-bottom: 10px;
    }

    .card-body {
        background-color: #0000;

    }
    .card-img-top{
       
        height: 400px;
    }
</style>

<body>

    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <!-- Card 1 -->
            <div class="col">
                <div class="card ">
                    <img src="https://static.trueplookpanya.com/tppy/member/m_525000_527500/525016/cms/images/%E0%B8%84%E0%B8%93%E0%B8%B0%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%AD%E0%B8%A2%E0%B8%B2%E0%B8%81%E0%B9%80%E0%B8%82%E0%B9%89%E0%B8%B2%20%E0%B8%AA%E0%B8%AD%E0%B8%9A%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2%E0%B8%AD%E0%B8%B0%E0%B9%84%E0%B8%A3%E0%B8%9A%E0%B9%89%E0%B8%B2%E0%B8%87%202023.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-arrow-up-right-square-fill"></i> ชื่อสาขา 1</h5>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 1</p>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 2</p>
                        <a href="#" class="btn btn-primary  card-btn rounded-pill">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col">
                <div class="card">
                    <img src="https://static.trueplookpanya.com/tppy/member/m_525000_527500/525016/cms/images/9%E0%B8%AA%E0%B8%B2%E0%B8%82%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%88%E0%B8%9A%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B8%95%E0%B8%81%E0%B8%87%E0%B8%B2%E0%B8%99-03.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-arrow-up-right-square-fill"></i> ชื่อสาขา 2</h5>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 1</p>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 2</p>
                        <a href="#" class="btn btn-primary  card-btn rounded-pill">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <div class="card">
                    <img src="https://static.trueplookpanya.com/tppy/member/m_525000_527500/525016/cms/images/9%E0%B8%AA%E0%B8%B2%E0%B8%82%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%88%E0%B8%9A%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B8%95%E0%B8%81%E0%B8%87%E0%B8%B2%E0%B8%99-03.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-arrow-up-right-square-fill"></i> ชื่อสาขา 3</h5>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 1</p>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 2</p>
                        <a href="#" class="btn btn-primary  card-btn rounded-pill">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col">
                <div class="card">
                    <img src="https://static.trueplookpanya.com/tppy/member/m_525000_527500/525016/cms/images/9%E0%B8%AA%E0%B8%B2%E0%B8%82%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%88%E0%B8%9A%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B8%95%E0%B8%81%E0%B8%87%E0%B8%B2%E0%B8%99-03.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-arrow-up-right-square-fill"></i> ชื่อสาขา 3</h5>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 1</p>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 2</p>
                        <a href="#" class="btn btn-primary  card-btn rounded-pill">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col">
                <div class="card">
                    <img src="https://static.trueplookpanya.com/tppy/member/m_525000_527500/525016/cms/images/9%E0%B8%AA%E0%B8%B2%E0%B8%82%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%88%E0%B8%9A%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B8%95%E0%B8%81%E0%B8%87%E0%B8%B2%E0%B8%99-03.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-arrow-up-right-square-fill"></i> ชื่อสาขา 3</h5>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 1</p>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 2</p>
                        <a href="#" class="btn btn-primary  card-btn rounded-pill">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col">
                <div class="card">
                    <img src="https://static.trueplookpanya.com/tppy/member/m_525000_527500/525016/cms/images/9%E0%B8%AA%E0%B8%B2%E0%B8%82%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%88%E0%B8%9A%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B8%95%E0%B8%81%E0%B8%87%E0%B8%B2%E0%B8%99-03.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-arrow-up-right-square-fill"></i> ชื่อสาขา 3</h5>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 1</p>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 2</p>
                        <a href="#" class="btn btn-primary  card-btn rounded-pill">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="col">
                <div class="card">
                    <img src="https://static.trueplookpanya.com/tppy/member/m_525000_527500/525016/cms/images/9%E0%B8%AA%E0%B8%B2%E0%B8%82%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%88%E0%B8%9A%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B8%95%E0%B8%81%E0%B8%87%E0%B8%B2%E0%B8%99-03.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-arrow-up-right-square-fill"></i> ชื่อสาขา 3</h5>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 1</p>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 2</p>
                        <a href="#" class="btn btn-primary  card-btn rounded-pill">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="col">
                <div class="card">
                    <img src="https://static.trueplookpanya.com/tppy/member/m_525000_527500/525016/cms/images/9%E0%B8%AA%E0%B8%B2%E0%B8%82%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%88%E0%B8%9A%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B8%95%E0%B8%81%E0%B8%87%E0%B8%B2%E0%B8%99-03.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-arrow-up-right-square-fill"></i> ชื่อสาขา 3</h5>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 1</p>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 2</p>
                        <a href="#" class="btn btn-primary  card-btn rounded-pill">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>


            <!-- Card 9 -->
            <div class="col">
                <div class="card">
                    <img src="https://static.trueplookpanya.com/tppy/member/m_525000_527500/525016/cms/images/9%E0%B8%AA%E0%B8%B2%E0%B8%82%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%88%E0%B8%9A%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B8%95%E0%B8%81%E0%B8%87%E0%B8%B2%E0%B8%99-03.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-arrow-up-right-square-fill"></i> ชื่อสาขา 3</h5>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 1</p>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 2</p>
                        <a href="#" class="btn btn-primary  card-btn rounded-pill">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>
            <!-- Card 10 -->
            <div class="col">
                <div class="card">
                    <img src="https://static.trueplookpanya.com/tppy/member/m_525000_527500/525016/cms/images/9%E0%B8%AA%E0%B8%B2%E0%B8%82%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%88%E0%B8%9A%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B8%95%E0%B8%81%E0%B8%87%E0%B8%B2%E0%B8%99-03.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-arrow-up-right-square-fill"></i> ชื่อสาขา 3</h5>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 1</p>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 2</p>
                        <a href="#" class="btn btn-primary  card-btn rounded-pill">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>


            <!-- Card 11 -->
            <div class="col">
                <div class="card">
                    <img src="https://static.trueplookpanya.com/tppy/member/m_525000_527500/525016/cms/images/9%E0%B8%AA%E0%B8%B2%E0%B8%82%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%88%E0%B8%9A%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B8%95%E0%B8%81%E0%B8%87%E0%B8%B2%E0%B8%99-03.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-arrow-up-right-square-fill"></i> ชื่อสาขา 3</h5>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 1</p>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 2</p>
                        <a href="#" class="btn btn-primary  card-btn rounded-pill ">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>


            <!-- Card 12 -->
            <div class="col">
                <div class="card">
                    <img src="https://static.trueplookpanya.com/tppy/member/m_525000_527500/525016/cms/images/9%E0%B8%AA%E0%B8%B2%E0%B8%82%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%88%E0%B8%9A%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B8%95%E0%B8%81%E0%B8%87%E0%B8%B2%E0%B8%99-03.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-arrow-up-right-square-fill"></i> ชื่อสาขา 3</h5>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 1</p>
                        <p class="card-text"> <i class="bi bi-arrow-right-circle-fill"></i> หัวข้อย่อย 2</p>
                        <a href="#" class="btn btn-primary  card-btn rounded-pill">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>