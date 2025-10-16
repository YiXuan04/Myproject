<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="utf-8">
        <title>specialties page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname="IEETdb";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        ?>
        <?php
            $page=$_GET['page']??'home';
        ?>
        <div class="section">
            <h3>認證規範1:教育目標</h3>
            <h4>(1)宣導教育目標的宣傳品、資料或文件等</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist11");
            ?>
            <br>
            <h4>(2)訂定教育目標的過程/會議記錄</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist12");
            ?>
            <br>
            <h4>(3)評估達成教育目標的相關文件，如校友(每3年約60份)、雇主(每3年約30份)等問卷、訪談紀錄等</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist13");
            ?>
            <br>
            <h4>(4)檢討教育目標執行成效的相關會議記錄</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist14");
            ?>
        </div>
        <div class="section">
            <h3>認證規範2:學生</h3>
            <h4>(1)二專、三專或五專入學招生及授予學位辦法</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist21");
            ?>
            <br>
            <h4>(2)學生休退學辦法、預警機制與執行紀錄</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist22");
            ?>
            <br>
            <h4>(3)學生畢業、升學及就業輔導辦法與執行紀錄</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist23");
            ?>
            <br>
            <h4>(4)學生參與社團活動、國內外學術研討會、交換學生、國內外實習等的輔導辦法與執行紀錄</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist24");
            ?>
            <br>
            <h4>(5)獎助績優學生辦法與清寒學生輔助與輔導辦法及執行紀錄</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist25");
            ?>
            <br>
            <h4>(6)學生畢業規定相關辦法</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist26");
            ?>
        </div>
        <div class="section">
            <h3>認證規範3:應屆畢業生核心能力</h3>
            <h4>(1)訂定/修訂畢業生核心能力的過程/會議記錄</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist31");
            ?>
            <br>
            <h4>(2)每學年度整合工程實務技術能力的專題或實作課程(Capstone)評量資料，包括每年每組學生團隊成績整理及分析及每年全班成績整理及分析(學生Capstone課程的成果於規範4呈現)</h4>
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
                    <th scope="row">112學年度</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist32112");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">113學年度</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist32113");
                        ?>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <h4>(3)每學年度畢業生問卷</h4>
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
                    <th scope="row">112學年度</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist33112");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">113學年度</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist33113");
                        ?>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
        </div>
        <div class="section">
            <h3>認證規範4:課程及教學</h3>
            <h4>(1)每學年度每門必修專業與實務課程資料夾，包括:<br>
            ■課程大綱■教師自編且具特色之講義■期中考、期末考考卷及答案卷依成績低、中、高各取樣本2份■課程分析及反思表</h4>
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
                    <th scope="row">基本電學(一)</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4100");
                        ?>
                    </td>
                </tr>    
                <tr>
                    <th scope="row">基本電學(一)</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4101");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">計算機概論</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4102");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Scratch程式設計</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4103");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">基本電學實習</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4104");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">資訊倫理</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4105");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">計算機程式實習(一)</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4106");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">電腦軟體應用</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4107");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">基本電學(二)</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4108");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">多媒體導論</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4144");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">多媒體導論實習</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4109");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">電腦網路概論</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4110");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">電腦網路實習</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4111");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">電子學(一)</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4112");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">電子學實習(一)</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4113");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">電腦硬體裝修</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4114");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">計算機程式實習(二)</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4115");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">電子學(二)</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4116");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">電子學實習(二)</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4117");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">數位邏輯</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4118");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">數位邏輯實習</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4119");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">微積分(一)</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4120");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">物件導向程式設計實務(一)</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4121");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">資料結構(一)</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4122");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">微積分(二)</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4123");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Linux實務</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4124");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">資訊安全導論</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4125");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">物件導向程式設計實務(二)</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4126");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">介面技術實務</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4127");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">資料結構(二)</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4128");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">科學計算應用</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4129");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">資料庫概論</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4130");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">微處理機(一)</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4131");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">微處理機實習(一)</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4132");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">系統分析與設計</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4133");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">微處理機(二)</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4134");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">微處理機實習(二)</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4135");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">離散數學</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4137");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">作業系統</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4138");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">計算機組織</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4140");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">演算法</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4141");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">線性代數</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4142");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">伺服器架設與管理</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4143");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Capstone_專題製作(一)</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4136");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Capstone_專題製作(二)</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist4139");
                        ?>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <h4>(2)每學年度整合工程實務技術能力的專題或實作課程(Capstone)之所有學生分組成果展現(例如:期末成果報告Word或PDF檔及期末簡報PPT檔)</h4>
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
                    <th scope="row">112學年度</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist42112");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">113學年度</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist42113");
                        ?>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <h4>(3)每學年度6份畢業生成績單(學分數)分析(依畢業生成績低、中、高排名抽樣各2份)</h4>
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
                    <th scope="row">112學年度</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist43112");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">113學年度</th>
                    <td>
                        <?php
                        include_once 'list_file_f.php'; 
                        renderList($conn, "filelist43113");
                        ?>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <h4>(4)學生實習單位資料及實習紀錄</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist44");
            ?>
            <br>
            <h4>(5)學生體驗產業界情況的相關紀錄</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist45");
            ?>            
        </div>
        <div class="section">
            <h3>認證規範5:教師</h3>
            <h4>(1)教師授課鐘點名冊</h4>
            <div class="alert alert-primary" role="alert">
                **本項資料因四技、碩士班及五專內容一致，為避免重複提供相同之資料，故統一以四技為代表提供，請一併參酌適用。**
                <a href="Test.php?page=page1#45">點此前往查看</a>
            </div>
            <!-- <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist51");
            ?> -->
            <br>
            <h4>(2)教師會會議記錄</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist52");
            ?>
            <br>
            <h4>(3)教師聘任、升等審查作業辦法與執行紀錄</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist53");
            ?>
            <br>
            <h4>(4)教師參與學程教育目標訂定及執行的紀錄</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist54");
            ?>
            <br>
            <h4>(5)教師課業輔導時間表及相關紀錄(含導生會議紀錄)</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist55");
            ?>
            <br>
            <h4>(6)教師參與建教合作或產學合作的紀錄資料</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist56");
            ?>
            <br>
            <h4>(7)鼓勵教師參與研習、進修、研究的措施</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist57");
            ?>
            <br>
            <h4>(8)鼓勵教師參與國內外學術及專業組織及其活動等辦法</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist58");
            ?>
        </div>
        <div class="section">
            <h3>認證規範6:設備及空間</h3>
            <h4>(1)設備及空間使用的規劃及紀錄</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist61");
            ?>
            <br>
            <h4>(2)實驗室及教學設備清單及其管理辦法</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist62");
            ?>
            <br>
            <h4>(3)實驗課程講義、實驗手冊或安全手冊</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist63");
            ?>
            <br>
            <h4>(4)衛生安全講習資料或會議記錄</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist64");
            ?>
        </div>
        <div class="section">
            <h3>認證規範7:行政支援人力及經費</h3>
            <h4>(1)學程主管遴選辦法及相關會議記錄</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist71");
            ?>
            <br>
            <h4>(2)支援師生專業成長(含教師訓練、進修、研究及參與國內外學術交流活動)的經費申請辦法與分配原則</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist72");
            ?>
            <br>
            <h4>(3)助教、行政人員、技術人員等名單及工作內容</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist73");
            ?>
            <br>
            <h4>(4)設備經費的申請辦法與分配原則</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist74");
            ?>
        </div>
        <div class="section">
            <h3>認證規範8:持續改善</h3>
            <h4>(1)內迴圈機制相關工作</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist81");
            ?>
            <br>
            <h4>(2)外迴圈機制相關工作</h4>
            <?php
            include_once 'list_file_f.php'; 
            renderList($conn, "filelist82");
            ?>
        </div>
    </body>
</html>