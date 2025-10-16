<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="utf-8">
        <title>bachelor page</title> 
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
        <div class="section">
            <h3>入學招生即授予學位辦法</h3>
            <?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist0");
            ?>
        </div>
        <div class="section">
            <h3>認證規範1:教育目標</h3>
            <div class="alert alert-primary" role="alert">
                **本項(1)、(2)、(3)資料因四技、碩士班及五專內容一致，為避免重複提供相同之資料，故統一以四技為代表提供，請一併參酌適用。**
                <a href="Test.php?page=page1#41">點此前往查看</a>
            </div>
            <h4>(1)宣導教育目標的宣傳品、資料或文件等</h4>
            <!--<?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist11");
            ?>
            <br> -->
            <h4>(2)訂定教育目標的過程/會議記錄</h4>
            <!-- <?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist12");
            ?>
            <br> -->
            <h4>(3)檢討教育目標執行成效的相關會議記錄</h4>
            <!-- <?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist13");
            ?>
            <br> -->
            <h4>(4)評估達成教育目標的相關文件，如校友(每3年約60份)、雇主(每3年約30份)等問卷、訪談紀錄等</h4>
            <?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist14");
            ?>
            <br>
        </div>
        <div class="section">
            <h3>認證規範2:學生</h3>
            <div class="alert alert-primary" role="alert">
                **本項(1)、(4)、(5)資料因四技、碩士班及五專內容一致，為避免重複提供相同之資料，故統一以四技為代表提供，請一併參酌適用。**
                <a href="Test.php?page=page1#42">點此前往查看</a>
            </div>
            <h4>(1)研究生在學期間輔導及師生互動的紀錄</h4>
            <!-- <?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist21");
            ?>
            <br> -->
            <h4>(2)研究生休退學辦法、預警機制與執行紀錄</h4>
            <?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist22");
            ?>
            <br>
            <h4>(3)研究生畢業、升學及就業輔導辦法與執行紀錄</h4>
            <?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist23");
            ?>
            <br>
            <h4>(4)研究生參與國內外學術研討會、交換學生、國內外實習等的輔導辦法與執行紀錄</h4>
            <!-- <?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist24");
            ?>
            <br> -->
            <h4>(5)獎助績優學生辦法與清寒學生輔助與輔導辦法及執行紀錄</h4>
            <!-- <?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist25");
            ?>
            <br> -->
        </div>
        <div class="section">
            <h3>認證規範3:應屆畢業生核心能力</h3>
            <div class="alert alert-primary" role="alert">
                **本項(1)資料因四技、碩士班及五專內容一致，為避免重複提供相同之資料，故統一以四技為代表提供，請一併參酌適用。**
                <a href="Test.php?page=page1#43">點此前往查看</a>
            </div>
            <h4>(1)訂定/修訂畢業生核心能力的過程/會議記錄</h4>
            <!-- <?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist31");
            ?>
            <br> -->
            <h4>(2)每學年度畢業生論文</h4>
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
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist32108");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">109學年度</th>
                    <td>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist32109");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">110學年度</th>
                    <td>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist32110");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">111學年度</th>
                    <td>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist32111");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">112學年度</th>
                    <td>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist32112");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">113學年度</th>
                    <td>
                        <?php
                        include_once 'list_file_m.php'; 
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
                    <th scope="row">108學年度</th>
                    <td>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist33108");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">109學年度</th>
                    <td>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist33109");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">110學年度</th>
                    <td>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist33110");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">111學年度</th>
                    <td>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist33111");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">112學年度</th>
                    <td>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist33112");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">113學年度</th>
                    <td>
                        <?php
                        include_once 'list_file_m.php'; 
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
            <div class="alert alert-primary" role="alert">
                **本項(2)資料因四技、碩士班及五專內容一致，為避免重複提供相同之資料，故統一以四技為代表提供，請一併參酌適用。**
                <a href="Test.php?page=page1#44">點此前往查看</a>
            </div>
            <h4>(1)每學年度每門核心專業課程資料夾，包括:<br>
            ■課程大綱(需顯示對應之畢業生核心能力)■教師自編且具特色之講義■期中考、期末考考卷及答案卷依成績低、中、高個取樣本2份■重要之作業或報告依成績低、中、高個取樣本2份■課程分析及反思表</h4>
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
                    <th scope="row">專題研討(一)</th>
                    <td>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist4101");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">書報討論(一)</th>
                    <td>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist4102");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">科技論文寫作</th>
                    <td>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist4103");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">專題研討(二)</th>
                    <td>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist4104");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">書報討論(二)</th>
                    <td>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist4105");
                        ?>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <h4>(2)研究生體驗產業界情況的相關紀錄</h4>
            <!-- <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist42");
            ?> -->
        </div>
        <div class="section">
            <h3>認證規範5:教師</h3>
            <div class="alert alert-primary" role="alert">
                **本項資料因四技、碩士班及五專內容一致，為避免重複提供相同之資料，故統一以四技為代表提供，請一併參酌適用。**
                <a href="Test.php?page=page1#45">點此前往查看</a>
            </div>
            <h4>(1)教師授課鐘點名冊</h4>
            <!-- <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist51");
            ?>
            <br> -->
            <h4>(2)教師會會議記錄</h4>
            <!-- <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist52");
            ?>
            <br> -->
            <h4>(3)教師聘任、升等審查作業辦法與執行紀錄</h4>
            <!-- <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist53");
            ?>
            <br> -->
            <h4>(4)教師課業輔導時間表及相關紀錄</h4>
            <!-- <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist54");
            ?>
            <br> -->
            <h4>(5)教師參與建教合作或產學合作的紀錄資料</h4>
            <!-- <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist55");
            ?>
            <br> -->
            <h4>(6)鼓勵教師參與研習、進修、研究的措施</h4>
            <!-- <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist56");
            ?>
            <br> -->
            <h4>(7)鼓勵教師參與國內外學術及專業組織及其活動等辦法</h4>
            <!-- <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist57");
            ?> -->
        </div>
        <div class="section">
            <h3>認證規範6:設備及空間</h3>
            <div class="alert alert-primary" role="alert">
                **本項資料因四技、碩士班及五專內容一致，為避免重複提供相同之資料，故統一以四技為代表提供，請一併參酌適用。**
                <a href="Test.php?page=page1#46">點此前往查看</a>
            </div>
            <h4>(1)設備及空間使用的規劃及紀錄</h4>
            <!-- <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist61");
            ?>
            <br> -->
            <h4>(2)實驗室及教學設備清單及其管理辦法</h4>
            <!-- <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist62");
            ?>
            <br> -->
            <h4>(3)實驗課程講義、實驗手冊或安全手冊</h4>
            <!-- <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist63");
            ?>
            <br> -->
            <h4>(4)衛生安全講習資料或會議記錄</h4>
            <!-- <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist64");
            ?> -->
        </div>
        <div class="section">
            <h3>認證規範7:行政支援人力及經費</h3>
            <div class="alert alert-primary" role="alert">
                **本項資料因四技、碩士班及五專內容一致，為避免重複提供相同之資料，故統一以四技為代表提供，請一併參酌適用。**
                <a href="Test.php?page=page1#47">點此前往查看</a>
            </div>
            <h4>(1)研究所主管遴選辦法及相關會議記錄</h4>
            <!-- <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist71");
            ?>
            <br> -->
            <h4>(2)支援師生專業成長(含教師訓練、進修、研究及參與國內外學術交流活動)的經費申請辦法與分配原則</h4>
            <!-- <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist72");
            ?>
            <br> -->
            <h4>(3)助教、行政人員、技術人員等名單及工作內容</h4>
            <!-- <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist73");
            ?>
            <br> -->
            <h4>(4)設備經費的申請辦法與分配原則</h4>
            <!-- <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist74");
            ?> -->
        </div>
        <div class="section">
            <h3>認證規範8:持續改善</h3>
            <div class="alert alert-primary" role="alert">
                **本項資料因四技、碩士班及五專內容一致，為避免重複提供相同之資料，故統一以四技為代表提供，請一併參酌適用。**
                <a href="Test.php?page=page1#48">點此前往查看</a>
            </div>
            <h4>(1)內迴圈機制相關工作/會議記錄</h4>
            <!-- <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist81");
            ?>
            <br> -->
            <h4>(2)外迴圈機制相關工作/會議記錄</h4>
            <!-- <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist82");
            ?> -->
        </div>
    </body>
</html>