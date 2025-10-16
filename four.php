<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="utf-8">
        <title>bachelor page</title> 
        <link rel="stylesheet" href="style.css">
        
    </head>

    <body>
    <?php
        $servername = "localhost";
        $username = "root";        
        $password = "";            
        $dbname = "IEETdb"; 
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("❌ 連線失敗: " . $conn->connect_error);
        }
    ?>
        <div class="section" id="41">
            <h3 class="mb-1">認證規範1:教育目標</h3>
            <h4 class="mb-2">(1)宣導教育目標的宣傳品、資料或文件等</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload11">選擇要上傳的檔案：</label>
                <input type="file" name="Upload11" id="Upload11">
                <input type="submit" value="上傳" name="submit11">
                <input type="hidden" name="scrollTo" value="41">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist11");
            ?>
            <br>
            <h4 class="mb-2">(2)訂定教育目標的過程/會議記錄</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload12">Select file to upload:</label>
                <input type="file" name="Upload12" id="Upload12">
                <input type="submit" value="上傳" name="submit12">
                <input type="hidden" name="scrollTo" value="41">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist12");
            ?>
            <br>
            <h4 class="mb-2">(3)評估達成教育目標的相關文件，如校友(每3年約60份)、雇主(每3年約30份)等問卷、訪談紀錄等</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload13">Select file to upload:</label>
                <input type="file" name="Upload13" id="Upload13">
                <input type="submit" value="上傳" name="submit13">
                <input type="hidden" name="scrollTo" value="41">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist13");
            ?>
            <br>
            <h4 class="mb-2" id="414">(4)檢討教育目標執行成效的相關會議記錄</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload14">Select file to upload:</label>
                <input type="file" name="Upload14" id="Upload14">
                <input type="submit" value="上傳" name="submit14">
                <input type="hidden" name="scrollTo" value="41">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist14");
            ?>
        </div>
        <div class="section" id="42">
            <h3 class="mb-0">認證規範2:學生</h3>
            <h4 class="mb-2">(1)大學部入學招生及授予學位辦法</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload21">Select file to upload:</label>
                <input type="file" name="Upload21" id="Upload21">
                <input type="submit" value="上傳" name="submit21">
                <input type="hidden" name="scrollTo" value="414">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist21");
            ?>
            <br>
            <h4 class="mb-2">(2)學生休退學辦法、預警機制與執行紀錄</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload22">Select file to upload:</label>
                <input type="file" name="Upload22" id="Upload22">
                <input type="submit" value="上傳" name="submit22">
                <input type="hidden" name="scrollTo" value="42">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist22");
            ?>
            <br>
            <h4 class="mb-2" id="423">(3)轉入生的輔導辦法與執行紀錄</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload23">Select file to upload:</label>
                <input type="file" name="Upload23" id="Upload23">
                <input type="submit" value="上傳" name="submit23">
                <input type="hidden" name="scrollTo" value="42">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist23");
            ?>
            <br>
            <h4 class="mb-2" id="424">(4)學生畢業、升學及就業輔導辦法與執行紀錄</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload24">Select file to upload:</label>
                <input type="file" name="Upload24" id="Upload24">
                <input type="submit" value="上傳" name="submit24">
                <input type="hidden" name="scrollTo" value="423">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist24");
            ?>
            <br>
            <h4 class="mb-2" id="425">(5)學生參與社團活動、國內外學術研討會、交換學生、國內外實習等的輔導辦法與執行紀錄</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload25">Select file to upload:</label>
                <input type="file" name="Upload25" id="Upload25">
                <input type="submit" value="上傳" name="submit25">
                <input type="hidden" name="scrollTo" value="424">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist25");
            ?>
            <br>
            <h4 class="mb-2" id="426">(6)獎助績優學生辦法與清寒學生輔助與輔導辦法及執行紀錄</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload26">Select file to upload:</label>
                <input type="file" name="Upload26" id="Upload26">
                <input type="submit" value="上傳" name="submit26">
                <input type="hidden" name="scrollTo" value="424">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist26");
            ?>
            <br>
            <h4 class="mb-2" id="427">(7)學生畢業規定相關辦法</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload27">Select file to upload:</label>
                <input type="file" name="Upload27" id="Upload27">
                <input type="submit" value="上傳" name="submit27">
                <input type="hidden" name="scrollTo" value="425">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist27");
            ?>
            <br>
        </div>
        <div class="section" id="43">
            <h3 class="mb-0">認證規範3:應屆畢業生核心能力</h3>
            <h4 class="mb-2">(1)訂定/修訂畢業生核心能力的過程/會議紀錄</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload31">Select file to upload:</label>
                <input type="file" name="Upload31" id="Upload31">
                <input type="submit" value="上傳" name="submit31">
                <input type="hidden" name="scrollTo" value="426">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist31");
            ?>
            <br>
            <h4 class="mb-2" id="432">(2)每學年度整合工程設計能力的專題實作課程(Capstone)評量資料，包括每年每組學生團隊成績整理及分析及每年全班成績整理及分析(學生Capstone課程的成果於規範4呈現)</h4><br>
            <table>
                <thead>
                <tr>
                    <th scope="col">學年度</th>
                    <th scope="col">資料</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">108學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload32108">Select file to upload:</label>
                    <input type="file" name="Upload32108" id="Upload32108">
                    <input type="submit" value="上傳" name="submit32108">
                    <input type="hidden" name="scrollTo" value="43">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist32108");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">109學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload32109">Select file to upload:</label>
                    <input type="file" name="Upload32109" id="Upload32109">
                    <input type="submit" value="上傳" name="submit32109">
                    <input type="hidden" name="scrollTo" value="43">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist32109");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">110學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload32110">Select file to upload:</label>
                    <input type="file" name="Upload32110" id="Upload32110">
                    <input type="submit" value="上傳" name="submit32110">
                    <input type="hidden" name="scrollTo" value="43">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist32110");
                    ?> 
                    </td>
                </tr>
                <tr>
                    <th scope="row">111學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload32111">Select file to upload:</label>
                    <input type="file" name="Upload32111" id="Upload32111">
                    <input type="submit" value="上傳" name="submit32111">
                    <input type="hidden" name="scrollTo" value="43">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist32111");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">112學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload32112">Select file to upload:</label>
                    <input type="file" name="Upload32112" id="Upload32112">
                    <input type="submit" value="上傳" name="submit32112">
                    <input type="hidden" name="scrollTo" value="43">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist32112");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">113學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload32113">Select file to upload:</label>
                    <input type="file" name="Upload32113" id="Upload32113">
                    <input type="submit" value="上傳" name="submit32113">
                    <input type="hidden" name="scrollTo" value="43">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist32113");
                    ?>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <h4 class="mb-2">(3)每學年度畢業生問卷</h4><br>
            <table>
                <thead>
                <tr>
                    <th scope="col">學年度</th>
                    <th scope="col">資料</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">108學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload33108">Select file to upload:</label>
                    <input type="file" name="Upload33108" id="Upload33108">
                    <input type="submit" value="上傳" name="submit33108">
                    <input type="hidden" name="scrollTo" value="432">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist33108");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">109學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload33109">Select file to upload:</label>
                    <input type="file" name="Upload33109" id="Upload33109">
                    <input type="submit" value="上傳" name="submit33109">
                    <input type="hidden" name="scrollTo" value="432">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist33109");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">110學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload33110">Select file to upload:</label>
                    <input type="file" name="Upload33110" id="Upload33110">
                    <input type="submit" value="上傳" name="submit33110">
                    <input type="hidden" name="scrollTo" value="432">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist33110");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">111學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload33111">Select file to upload:</label>
                    <input type="file" name="Upload33111" id="Upload33111">
                    <input type="submit" value="上傳" name="submit33111">
                    <input type="hidden" name="scrollTo" value="432">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist33111");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">112學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload33112">Select file to upload:</label>
                    <input type="file" name="Upload33112" id="Upload33112">
                    <input type="submit" value="上傳" name="submit33112">
                    <input type="hidden" name="scrollTo" value="432">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist33112");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">113學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload33113">Select file to upload:</label>
                    <input type="file" name="Upload33113" id="Upload33113">
                    <input type="submit" value="上傳" name="submit33113">
                    <input type="hidden" name="scrollTo" value="432">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist33113");
                    ?>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="section" id="44">
            <h3 class="mb-0">認證規範4:課程及教學</h3>
            <h4 class="mb-2">(1)每學年度必修專業課程資料夾，包括:<br></t>■課程大綱(需顯示對應之畢業生核心能力)■教師自編且具特色之講義■期中考、期末考考卷及答案卷依成績低、中、高個取樣本2份■重要之作業或報告依成績低、中、高個取樣本2份■課程分析及反思表</h4>
            <br>
            <table>
                <thead>
                <tr>
                    <th scope="col">科目</th>
                    <th scope="col">資料</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">微積分(一)</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4101">Select file to upload:</label>
                    <input type="file" name="Upload4101" id="Upload4101">
                    <input type="submit" value="上傳" name="submit4101">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4101");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">計算機程式設計</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4102">Select file to upload:</label>
                    <input type="file" name="Upload4102" id="Upload4102">
                    <input type="submit" value="上傳" name="submit4102">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4102");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">計算機程式設計實習</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4103">Select file to upload:</label>
                    <input type="file" name="Upload4103" id="Upload4103">
                    <input type="submit" value="上傳" name="submit4103">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4103");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">資訊工程導論</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4104">Select file to upload:</label>
                    <input type="file" name="Upload4104" id="Upload4104">
                    <input type="submit" value="上傳" name="submit4104">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4104");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">計算機概論</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4105">Select file to upload:</label>
                    <input type="file" name="Upload4105" id="Upload4105">
                    <input type="submit" value="上傳" name="submit4105">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4105");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Linux實務</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4106">Select file to upload:</label>
                    <input type="file" name="Upload4106" id="Upload4106">
                    <input type="submit" value="上傳" name="submit4106">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4106");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">微積分(二)</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4107">Select file to upload:</label>
                    <input type="file" name="Upload4107" id="Upload4107">
                    <input type="submit" value="上傳" name="submit4107">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4107");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">計算機網路概論</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4108">Select file to upload:</label>
                    <input type="file" name="Upload4108" id="Upload4108">
                    <input type="submit" value="上傳" name="submit4108">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4108");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">線性代數</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4109">Select file to upload:</label>
                    <input type="file" name="Upload4109" id="Upload4109">
                    <input type="submit" value="上傳" name="submit4109">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4109");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">程式語言</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4110">Select file to upload:</label>
                    <input type="file" name="Upload4110" id="Upload4110">
                    <input type="submit" value="上傳" name="submit4110">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4110");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">數位系統導論</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4111">Select file to upload:</label>
                    <input type="file" name="Upload4111" id="Upload4111">
                    <input type="submit" value="上傳" name="submit4111">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4111");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">數位系統實習</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4112">Select file to upload:</label>
                    <input type="file" name="Upload4112" id="Upload4112">
                    <input type="submit" value="上傳" name="submit4112">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4112");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">資料結構(一)</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4113">Select file to upload:</label>
                    <input type="file" name="Upload4113" id="Upload4113">
                    <input type="submit" value="上傳" name="submit4113">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4113");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">電子學實習(一)</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4114">Select file to upload:</label>
                    <input type="file" name="Upload4114" id="Upload4114">
                    <input type="submit" value="上傳" name="submit4114">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4114");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">機率與統計</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4115">Select file to upload:</label>
                    <input type="file" name="Upload4115" id="Upload4115">
                    <input type="submit" value="上傳" name="submit4115">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4115");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">離散數學</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4116">Select file to upload:</label>
                    <input type="file" name="Upload4116" id="Upload4116">
                    <input type="submit" value="上傳" name="submit4116">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4116");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">電子學(一)</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4117">Select file to upload:</label>
                    <input type="file" name="Upload4117" id="Upload4117">
                    <input type="submit" value="上傳" name="submit4117">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4117");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">資料結構(二)</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4118">Select file to upload:</label>
                    <input type="file" name="Upload4118" id="Upload4118">
                    <input type="submit" value="上傳" name="submit4118">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4118");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">計算機組織</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4119">Select file to upload:</label>
                    <input type="file" name="Upload4119" id="Upload4119">
                    <input type="submit" value="上傳" name="submit4119">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4119");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">工程數學(一)</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4120">Select file to upload:</label>
                    <input type="file" name="Upload4120" id="Upload4120">
                    <input type="submit" value="上傳" name="submit4120">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4120");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">科學計算</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4121">Select file to upload:</label>
                    <input type="file" name="Upload4121" id="Upload4121">
                    <input type="submit" value="上傳" name="submit4121">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4121");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">演算法</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4122">Select file to upload:</label>
                    <input type="file" name="Upload4122" id="Upload4122">
                    <input type="submit" value="上傳" name="submit4122">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4122");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">作業系統</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4123">Select file to upload:</label>
                    <input type="file" name="Upload4123" id="Upload4123">
                    <input type="submit" value="上傳" name="submit4123">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4123");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">微處理機</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4125">Select file to upload:</label>
                    <input type="file" name="Upload4125" id="Upload4125">
                    <input type="submit" value="上傳" name="submit4125">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4125");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">專業英文</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4126">Select file to upload:</label>
                    <input type="file" name="Upload4126" id="Upload4126">
                    <input type="submit" value="上傳" name="submit4126">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4126");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">資料庫系統</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4127">Select file to upload:</label>
                    <input type="file" name="Upload4127" id="Upload4127">
                    <input type="submit" value="上傳" name="submit4127">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4127");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">編譯程式</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4128">Select file to upload:</label>
                    <input type="file" name="Upload4128" id="Upload4128">
                    <input type="submit" value="上傳" name="submit4128">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4128");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">微處理機實習</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4129">Select file to upload:</label>
                    <input type="file" name="Upload4129" id="Upload4129">
                    <input type="submit" value="上傳" name="submit4129">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4129");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Capstone_實務專題(一)</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4124">Select file to upload:</label>
                    <input type="file" name="Upload4124" id="Upload4124">
                    <input type="submit" value="上傳" name="submit4124">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4124");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Capstone_實務專題(二)</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload4130">Select file to upload:</label>
                    <input type="file" name="Upload4130" id="Upload4130">
                    <input type="submit" value="上傳" name="submit4130">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist4130");
                    ?>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <h4 class="mb-2" id="442">(2)每學年整合工程設計能力的專題實作課程(Capstone)之所有學生分組成果展現(例如:期末成果報告Word或PDF檔及期末簡報PPT檔)</h4>
            <br>
            <table>
                <thead>
                <tr>
                    <th scope="col">學年度</th>
                    <th scope="col">資料</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">108學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload42108">Select file to upload:</label>
                    <input type="file" name="Upload42108" id="Upload42108">
                    <input type="submit" value="上傳" name="submit42108">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist42108");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">109學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload42109">Select file to upload:</label>
                    <input type="file" name="Upload42109" id="Upload42109">
                    <input type="submit" value="上傳" name="submit42109">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist42109");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">110學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload42110">Select file to upload:</label>
                    <input type="file" name="Upload42110" id="Upload42110">
                    <input type="submit" value="上傳" name="submit42110">
                    <input type="hidden" name="scrollTo" value="44">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist42110");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">111學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload42111">Select file to upload:</label>
                    <input type="file" name="Upload42111" id="Upload42111">
                    <input type="submit" value="上傳" name="submit42111">
                    <input type="hidden" name="scrollTo" value="442">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist42111");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">112學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload42112">Select file to upload:</label>
                    <input type="file" name="Upload42112" id="Upload42112">
                    <input type="submit" value="上傳" name="submit42112">
                    <input type="hidden" name="scrollTo" value="442">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist42112");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">113學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload42113">Select file to upload:</label>
                    <input type="file" name="Upload42113" id="Upload42113">
                    <input type="submit" value="上傳" name="submit42113">
                    <input type="hidden" name="scrollTo" value="442">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist42113");
                    ?>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <h4 id="443">(3)每學年度6份畢業生成績單(學分數)分析(依畢業生成績低、中、高排名抽樣各2份)</h4>
            <br>
            <table>
                <thead>
                <tr>
                    <th scope="col">學年度</th>
                    <th scope="col">資料</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">108學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload43108">Select file to upload:</label>
                    <input type="file" name="Upload43108" id="Upload43108">
                    <input type="submit" value="上傳" name="submit43108">
                    <input type="hidden" name="scrollTo" value="442">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist43108");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">109學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload43109">Select file to upload:</label>
                    <input type="file" name="Upload43109" id="Upload43109">
                    <input type="submit" value="上傳" name="submit43109">
                    <input type="hidden" name="scrollTo" value="442">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist43109");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">110學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload43110">Select file to upload:</label>
                    <input type="file" name="Upload43110" id="Upload43110">
                    <input type="submit" value="上傳" name="submit43110">
                    <input type="hidden" name="scrollTo" value="442">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist43110");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">111學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload43111">Select file to upload:</label>
                    <input type="file" name="Upload43111" id="Upload43111">
                    <input type="submit" value="上傳" name="submit43111">
                    <input type="hidden" name="scrollTo" value="443">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist43111");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">112學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload43112">Select file to upload:</label>
                    <input type="file" name="Upload43112" id="Upload43112">
                    <input type="submit" value="上傳" name="submit43112">
                    <input type="hidden" name="scrollTo" value="443">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist43112");
                    ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">113學年度</th>
                    <td>
                    <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                    <label for="Upload43113">Select file to upload:</label>
                    <input type="file" name="Upload43113" id="Upload43113">
                    <input type="submit" value="上傳" name="submit43113">
                    <input type="hidden" name="scrollTo" value="443">
                    </form>
                    <?php
                    include_once 'list_file.php'; 
                    renderList($conn, "filelist43113");
                    ?>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <h4 class="mb-2">(4)學生實習單位資料及實習紀錄</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload44">Select file to upload:</label>
                <input type="file" name="Upload44" id="Upload44">
                <input type="submit" value="上傳" name="submit44">
                <input type="hidden" name="scrollTo" value="443">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist44");
            ?>
            <br>
            <h4 class="mb-2">(5)學生體驗產業界情況的相關紀錄</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload45">Select file to upload:</label>
                <input type="file" name="Upload45" id="Upload45">
                <input type="submit" value="上傳" name="submit45">
                <input type="hidden" name="scrollTo" value="443">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist45");
            ?>
        </div>
        <div class="section" id="45">
            <h3 class="mb-0">認證規範5:教師</h3>
            <h4 class="mb-2">(1)教師授課鐘點名冊</h4>
            <div class="alert alert-primary" role="alert">
                **本項資料因四技、碩士班及五專內容一致，為避免重複提供相同之資料，故統一以四技為代表提供，請一併參酌適用。**
            </div>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload51">Select file to upload:</label>
                <input type="file" name="Upload51" id="Upload51">
                <input type="submit" value="上傳" name="submit51">
                <input type="hidden" name="scrollTo" value="45">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist51");
            ?>
            <br>
            <h4 class="mb-2">(2)教評會會議紀錄</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload52">Select file to upload:</label>
                <input type="file" name="Upload52" id="Upload52">
                <input type="submit" value="上傳" name="submit52">
                <input type="hidden" name="scrollTo" value="45">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist52");
            ?>
            <br>
            <h4 class="mb-2">(3)教師聘任、升等審查作業辦法與執行紀錄</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload53">Select file to upload:</label>
                <input type="file" name="Upload53" id="Upload53">
                <input type="submit" value="上傳" name="submit53">
                <input type="hidden" name="scrollTo" value="45">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist53");
            ?>
            <br>
            <h4 class="mb-2">(4)教師參與學程教育目標訂定及執行的紀錄</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload54">Select file to upload:</label>
                <input type="file" name="Upload54" id="Upload54">
                <input type="submit" value="上傳" name="submit54">
                <input type="hidden" name="scrollTo" value="45">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist54");
            ?>
            <br>
            <h4 class="mb-2">(5)教師課業輔導時間表及相關紀錄(含導生會議紀錄)</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload55">Select file to upload:</label>
                <input type="file" name="Upload55" id="Upload55">
                <input type="submit" value="上傳" name="submit55">
                <input type="hidden" name="scrollTo" value="45">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist55");
            ?>
            <br>
            <h4 class="mb-2">(6)教師參與建教合作或產學合作的紀錄資料</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload56">Select file to upload:</label>
                <input type="file" name="Upload56" id="Upload56">
                <input type="submit" value="上傳" name="submit56">
                <input type="hidden" name="scrollTo" value="45">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist56");
            ?>
            <br>
            <h4 class="mb-2">(7)鼓勵教師參與研習、進修、研究的措施</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload57">Select file to upload:</label>
                <input type="file" name="Upload57" id="Upload57">
                <input type="submit" value="上傳" name="submit57">
                <input type="hidden" name="scrollTo" value="45">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist57");
            ?>
            <br>
            <h4 class="mb-2">(8)鼓勵教師參與國內外學術及專業組織及其活動等辦法</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload58">Select file to upload:</label>
                <input type="file" name="Upload58" id="Upload58">
                <input type="submit" value="上傳" name="submit58">
                <input type="hidden" name="scrollTo" value="45">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist58");
            ?>
            <br>
        </div>
        <div class="section" id="46">
            <h3 class="mb-0">認證規範6:設備及空間</h3>
            <h4 class="mb-2">(1)設備及空間使用的規劃及紀錄</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload61">Select file to upload:</label>
                <input type="file" name="Upload61" id="Upload61">
                <input type="submit" value="上傳" name="submit61">
                <input type="hidden" name="scrollTo" value="46">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist61");
            ?>
            <br>
            <h4 class="mb-2">(2)實驗室及教學設備清單及其管理辦法</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload62">Select file to upload:</label>
                <input type="file" name="Upload62" id="Upload62">
                <input type="submit" value="上傳" name="submit62">
                <input type="hidden" name="scrollTo" value="46">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist62");
            ?>
            <br>
            <h4 class="mb-2">(3)實驗課程講義、實驗手冊或安全手冊</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload63">Select file to upload:</label>
                <input type="file" name="Upload63" id="Upload63">
                <input type="submit" value="上傳" name="submit63">
                <input type="hidden" name="scrollTo" value="46">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist63");
            ?>
            <br>
            <h4 class="mb-2">(4)衛生安全講習資料或會議記錄</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1"> 
                <label for="Upload64">Select file to upload:</label>
                <input type="file" name="Upload64" id="Upload64">
                <input type="submit" value="上傳" name="submit64">
                <input type="hidden" name="scrollTo" value="46">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist64");
            ?>
            <br>
        </div>
        <div class="section" id="47">
            <h3 class="mb-0">認證規範7:行政支援人力及經費</h3>
            <h4 class="mb-2">(1)學程主管遴選辦法及相關會議記錄</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload71">Select file to upload:</label>
                <input type="file" name="Upload71" id="Upload71">
                <input type="submit" value="上傳" name="submit71">
                <input type="hidden" name="scrollTo" value="47">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist71");
            ?>
            <br>
            <h4 class="mb-2">(2)支援師生專業成長(含教師訓練、進修、研究及參與國內外學術交流活動)的經費申請辦法與分配原則</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload72">Select file to upload:</label>
                <input type="file" name="Upload72" id="Upload72">
                <input type="submit" value="上傳" name="submit72">
                <input type="hidden" name="scrollTo" value="47">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist72");
            ?>
            <br>
            <h4 class="mb-2">(3)助教、行政人員、技術人員等名單及工作內容</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload73">Select file to upload:</label>
                <input type="file" name="Upload73" id="Upload73">
                <input type="submit" value="上傳" name="submit73">
                <input type="hidden" name="scrollTo" value="47">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist73");
            ?>
            <br>
            <h4 class="mb-2">(4)設備經費的申請辦法與分配原則</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload74">Select file to upload:</label>
                <input type="file" name="Upload74" id="Upload74">
                <input type="submit" value="上傳" name="submit74">
                <input type="hidden" name="scrollTo" value="47">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist74");
            ?>
            <br>
        </div>
        <div class="section" id="48">
            <h3 class="mb-0">認證規範8:持續改善</h3>
            <h4 class="mb-2">(1)內迴圈機制相關工作/會議紀錄</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload81">Select file to upload:</label>
                <input type="file" name="Upload81" id="Upload81">
                <input type="submit" value="上傳" name="submit81">
                <input type="hidden" name="scrollTo" value="48">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist81");
            ?>
            <br>
            <h4 class="mb-2">(2)外迴圈機制相關工作/會議紀錄</h4>
            <form action="upload_four.php" method="post" enctype="multipart/form-data" class="mb-1">
                <label for="Upload82">Select file to upload:</label>
                <input type="file" name="Upload82" id="Upload82">
                <input type="submit" value="上傳" name="submit82">
                <input type="hidden" name="scrollTo" value="48">
            </form>
            <?php
            include_once 'list_file.php'; 
            renderList($conn, "filelist82");
            ?>
            <br>
        </div>
    </body>
</html>