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
        <div class="section" id="30">
            <h3>入學招生及授予學位辦法</h3>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload0">Select file to upload:</label>
                <input type="file" name="Upload0" id="Upload0">
                <input type="submit" value="上傳" name="submit0">
                <input type="hidden" name="scrollTo" value="30">
            </form>
            <?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist0");
            ?>
        </div>
        <div class="section" id="31">
            <h3>認證規範1:教育目標</h3>
            <h4>(1)宣導教育目標的宣傳品、資料或文件等</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload11">Select file to upload:</label>
                <input type="file" name="Upload11" id="Upload11">
                <input type="submit" value="上傳" name="submit11">
                <input type="hidden" name="scrollTo" value="31">
            </form>
            <?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist11");
            ?>
            <br>
            <h4>(2)訂定教育目標的過程/會議記錄</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload12">Select file to upload:</label>
                <input type="file" name="Upload12" id="Upload12">
                <input type="submit" value="上傳" name="submit12">
                <input type="hidden" name="scrollTo" value="31">
            </form>
            <?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist12");
            ?>
            <br>
            <h4>(3)檢討教育目標執行成效的相關會議記錄</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload13">Select file to upload:</label>
                <input type="file" name="Upload13" id="Upload13">
                <input type="submit" value="上傳" name="submit13">
                <input type="hidden" name="scrollTo" value="31">
            </form>
            <?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist13");
            ?>
            <br>
            <h4>(4)評估達成教育目標的相關文件，如校友(每3年約60份)、雇主(每3年約30份)等問卷、訪談紀錄等</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload14">Select file to upload:</label>
                <input type="file" name="Upload14" id="Upload14">
                <input type="submit" value="上傳" name="submit14">
                <input type="hidden" name="scrollTo" value="31">
            </form>
            <?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist14");
            ?>
            <br>
        </div>
        <div class="section" id="32">
            <h3>認證規範2:學生</h3>
            <h4>(1)研究生在學期間輔導及師生互動的紀錄</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload21">Select file to upload:</label>
                <input type="file" name="Upload21" id="Upload21">
                <input type="submit" value="上傳" name="submit21">
                <input type="hidden" name="scrollTo" value="31">
            </form>
            <?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist21");
            ?>
            <br>
            <h4>(2)研究生休退學辦法、預警機制與執行紀錄</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload22">Select file to upload:</label>
                <input type="file" name="Upload22" id="Upload22">
                <input type="submit" value="上傳" name="submit22">
                <input type="hidden" name="scrollTo" value="32">
            </form>
            <?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist22");
            ?>
            <br>
            <h4>(3)研究生畢業、升學及就業輔導辦法與執行紀錄</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload23">Select file to upload:</label>
                <input type="file" name="Upload23" id="Upload23">
                <input type="submit" value="上傳" name="submit23">
                <input type="hidden" name="scrollTo" value="32">
            </form>
            <?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist23");
            ?>
            <br>
            <h4 id="324">(4)研究生參與國內外學術研討會、交換學生、國內外實習等的輔導辦法與執行紀錄</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload24">Select file to upload:</label>
                <input type="file" name="Upload24" id="Upload24">
                <input type="submit" value="上傳" name="submit24">
                <input type="hidden" name="scrollTo" value="32">
            </form>
            <?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist24");
            ?>
            <br>
            <h4>(5)獎助績優學生辦法與清寒學生輔助與輔導辦法及執行紀錄</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload25">Select file to upload:</label>
                <input type="file" name="Upload25" id="Upload25">
                <input type="submit" value="上傳" name="submit25">
                <input type="hidden" name="scrollTo" value="32">
            </form>
            <?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist25");
            ?>
            <br>
        </div>
        <div class="section" id="33">
            <h3>認證規範3:應屆畢業生核心能力</h3>
            <h4>(1)訂定/修訂畢業生核心能力的過程/會議記錄</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload31">Select file to upload:</label>
                <input type="file" name="Upload31" id="Upload31">
                <input type="submit" value="上傳" name="submit31">
                <input type="hidden" name="scrollTo" value="324">
            </form>
            <?php
            include_once 'list_file_m.php'; 
            renderList($conn, "filelist31");
            ?>
            <br>
            <h4 id="332">(2)每學年度畢業生論文</h4>
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
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload32108">Select file to upload:</label>
                            <input type="file" name="Upload32108" id="Upload32108">
                            <input type="submit" value="上傳" name="submit32108">
                            <input type="hidden" name="scrollTo" value="33">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist32108");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">109學年度</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload32109">Select file to upload:</label>
                            <input type="file" name="Upload32109" id="Upload32109">
                            <input type="submit" value="上傳" name="submit32109">
                            <input type="hidden" name="scrollTo" value="33">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist32109");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">110學年度</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload32110">Select file to upload:</label>
                            <input type="file" name="Upload32110" id="Upload32110">
                            <input type="submit" value="上傳" name="submit32110">
                            <input type="hidden" name="scrollTo" value="33">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist32110");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">111學年度</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload32111">Select file to upload:</label>
                            <input type="file" name="Upload32111" id="Upload32111">
                            <input type="submit" value="上傳" name="submit32111">
                            <input type="hidden" name="scrollTo" value="33">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist32111");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">112學年度</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload32112">Select file to upload:</label>
                            <input type="file" name="Upload32112" id="Upload32112">
                            <input type="submit" value="上傳" name="submit32112">
                            <input type="hidden" name="scrollTo" value="33">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist32112");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">113學年度</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload32113">Select file to upload:</label>
                            <input type="file" name="Upload32113" id="Upload32113">
                            <input type="submit" value="上傳" name="submit32113">
                            <input type="hidden" name="scrollTo" value="33">
                        </form>
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
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload33108">Select file to upload:</label>
                            <input type="file" name="Upload33108" id="Upload33108">
                            <input type="submit" value="上傳" name="submit33108">
                            <input type="hidden" name="scrollTo" value="33">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist33108");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">109學年度</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload33109">Select file to upload:</label>
                            <input type="file" name="Upload33109" id="Upload33109">
                            <input type="submit" value="上傳" name="submit33109">
                            <input type="hidden" name="scrollTo" value="33">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist33109");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">110學年度</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload33110">Select file to upload:</label>
                            <input type="file" name="Upload33110" id="Upload33110">
                            <input type="submit" value="上傳" name="submit33110">
                            <input type="hidden" name="scrollTo" value="332">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist33110");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">111學年度</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload33111">Select file to upload:</label>
                            <input type="file" name="Upload33111" id="Upload33111">
                            <input type="submit" value="上傳" name="submit33111">
                            <input type="hidden" name="scrollTo" value="332">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist33111");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">112學年度</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload33112">Select file to upload:</label>
                            <input type="file" name="Upload33112" id="Upload33112">
                            <input type="submit" value="上傳" name="submit33112">
                            <input type="hidden" name="scrollTo" value="332">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist33112");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">113學年度</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload33113">Select file to upload:</label>
                            <input type="file" name="Upload33113" id="Upload33113">
                            <input type="submit" value="上傳" name="submit33113">
                            <input type="hidden" name="scrollTo" value="332">
                        </form>
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
        <div class="section" id="34">
            <h3>認證規範4:課程及教學</h3>
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
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload4101">Select file to upload:</label>
                            <input type="file" name="Upload4101" id="Upload4101">
                            <input type="submit" value="上傳" name="submit4101">
                            <input type="hidden" name="scrollTo" value="34">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist4101");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">書報討論(一)</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload4102">Select file to upload:</label>
                            <input type="file" name="Upload4102" id="Upload4102">
                            <input type="submit" value="上傳" name="submit4102">
                            <input type="hidden" name="scrollTo" value="34">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist4102");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">科技論文寫作</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload4103">Select file to upload:</label>
                            <input type="file" name="Upload4103" id="Upload4103">
                            <input type="submit" value="上傳" name="submit4103">
                            <input type="hidden" name="scrollTo" value="34">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist4103");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">專題研討(二)</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload4104">Select file to upload:</label>
                            <input type="file" name="Upload4104" id="Upload4104">
                            <input type="submit" value="上傳" name="submit4104">
                            <input type="hidden" name="scrollTo" value="34">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist4104");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">書報討論(二)</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload4105">Select file to upload:</label>
                            <input type="file" name="Upload4105" id="Upload4105">
                            <input type="submit" value="上傳" name="submit4105">
                            <input type="hidden" name="scrollTo" value="34">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist4105");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">物聯網</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload4106">Select file to upload:</label>
                            <input type="file" name="Upload4106" id="Upload4106">
                            <input type="submit" value="上傳" name="submit4106">
                            <input type="hidden" name="scrollTo" value="34">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist4106");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">機器人作業系統</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload4107">Select file to upload:</label>
                            <input type="file" name="Upload4107" id="Upload4107">
                            <input type="submit" value="上傳" name="submit4107">
                            <input type="hidden" name="scrollTo" value="34">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist4107");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">下世代行動通訊網路</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload4108">Select file to upload:</label>
                            <input type="file" name="Upload4108" id="Upload4108">
                            <input type="submit" value="上傳" name="submit4108">
                            <input type="hidden" name="scrollTo" value="34">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist4108");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">機器學習</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload4109">Select file to upload:</label>
                            <input type="file" name="Upload4109" id="Upload4109">
                            <input type="submit" value="上傳" name="submit4109">
                            <input type="hidden" name="scrollTo" value="34">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist4109");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">智慧型最佳化演算法</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload4110">Select file to upload:</label>
                            <input type="file" name="Upload4110" id="Upload4110">
                            <input type="submit" value="上傳" name="submit4110">
                            <input type="hidden" name="scrollTo" value="34">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist4110");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">巨量資料分析</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload4111">Select file to upload:</label>
                            <input type="file" name="Upload4111" id="Upload4111">
                            <input type="submit" value="上傳" name="submit4111">
                            <input type="hidden" name="scrollTo" value="34">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist4111");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">新一代Web技術</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload4112">Select file to upload:</label>
                            <input type="file" name="Upload4112" id="Upload4112">
                            <input type="submit" value="上傳" name="submit4112">
                            <input type="hidden" name="scrollTo" value="34">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist4112");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">雲端大數據安全</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload4113">Select file to upload:</label>
                            <input type="file" name="Upload4113" id="Upload4113">
                            <input type="submit" value="上傳" name="submit4113">
                            <input type="hidden" name="scrollTo" value="34">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist4113");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">高等人工智慧</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload4114">Select file to upload:</label>
                            <input type="file" name="Upload4114" id="Upload4114">
                            <input type="submit" value="上傳" name="submit4114">
                            <input type="hidden" name="scrollTo" value="34">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist4114");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">雲端作業系統</th>
                    <td>
                        <form action="upload_master.php" method="post" enctype="multipart/form-data">
                            <label for="Upload4115">Select file to upload:</label>
                            <input type="file" name="Upload4115" id="Upload4115">
                            <input type="submit" value="上傳" name="submit4115">
                            <input type="hidden" name="scrollTo" value="34">
                        </form>
                        <?php
                        include_once 'list_file_m.php'; 
                        renderList($conn, "filelist4115");
                        ?>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <h4>(2)研究生體驗產業界情況的相關紀錄</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload42">Select file to upload:</label>
                <input type="file" name="Upload42" id="Upload42">
                <input type="submit" value="上傳" name="submit42">
                <input type="hidden" name="scrollTo" value="34">
            </form>
            <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist42");
            ?>
        </div>
        <div class="section" id="35">
            <h3>認證規範5:教師</h3>
            <h4>(1)教師授課鐘點名冊</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload51">Select file to upload:</label>
                <input type="file" name="Upload51" id="Upload51">
                <input type="submit" value="上傳" name="submit51">
                <input type="hidden" name="scrollTo" value="35">
            </form>
            <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist51");
            ?>
            <br>
            <h4>(2)教師會會議記錄</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload52">Select file to upload:</label>
                <input type="file" name="Upload52" id="Upload52">
                <input type="submit" value="上傳" name="submit52">
                <input type="hidden" name="scrollTo" value="35">
            </form>
            <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist52");
            ?>
            <br>
            <h4>(3)教師聘任、升等審查作業辦法與執行紀錄</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload53">Select file to upload:</label>
                <input type="file" name="Upload53" id="Upload53">
                <input type="submit" value="上傳" name="submit53">
                <input type="hidden" name="scrollTo" value="35">
            </form>
            <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist53");
            ?>
            <br>
            <h4>(4)教師課業輔導時間表及相關紀錄</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload54">Select file to upload:</label>
                <input type="file" name="Upload54" id="Upload54">
                <input type="submit" value="上傳" name="submit54">
                <input type="hidden" name="scrollTo" value="35">
            </form>
            <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist54");
            ?>
            <br>
            <h4>(5)教師參與建教合作或產學合作的紀錄資料</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload55">Select file to upload:</label>
                <input type="file" name="Upload55" id="Upload55">
                <input type="submit" value="上傳" name="submit55">
                <input type="hidden" name="scrollTo" value="35">
            </form>
            <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist55");
            ?>
            <br>
            <h4>(6)鼓勵教師參與研習、進修、研究的措施</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload56">Select file to upload:</label>
                <input type="file" name="Upload56" id="Upload56">
                <input type="submit" value="上傳" name="submit56">
                <input type="hidden" name="scrollTo" value="35">
            </form>
            <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist56");
            ?>
            <br>
            <h4>(7)鼓勵教師參與國內外學術及專業組織及其活動等辦法</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload57">Select file to upload:</label>
                <input type="file" name="Upload57" id="Upload57">
                <input type="submit" value="上傳" name="submit57">
                <input type="hidden" name="scrollTo" value="35">
            </form>
            <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist57");
            ?>
        </div>
        <div class="section" id="36">
            <h3>認證規範6:設備及空間</h3>
            <h4>(1)設備及空間使用的規劃及紀錄</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload61">Select file to upload:</label>
                <input type="file" name="Upload61" id="Upload61">
                <input type="submit" value="上傳" name="submit61">
                <input type="hidden" name="scrollTo" value="36">
            </form>
            <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist61");
            ?>
            <br>
            <h4>(2)實驗室及教學設備清單及其管理辦法</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload62">Select file to upload:</label>
                <input type="file" name="Upload62" id="Upload62">
                <input type="submit" value="上傳" name="submit62">
                <input type="hidden" name="scrollTo" value="36">
            </form>
            <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist62");
            ?>
            <br>
            <h4>(3)實驗課程講義、實驗手冊或安全手冊</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload63">Select file to upload:</label>
                <input type="file" name="Upload63" id="Upload63">
                <input type="submit" value="上傳" name="submit63">
                <input type="hidden" name="scrollTo" value="36">
            </form>
            <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist63");
            ?>
            <br>
            <h4>(4)衛生安全講習資料或會議記錄</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload64">Select file to upload:</label>
                <input type="file" name="Upload64" id="Upload64">
                <input type="submit" value="上傳" name="submit64">
                <input type="hidden" name="scrollTo" value="36">
            </form>
            <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist64");
            ?>
        </div>
        <div class="section" id="37"> 
            <h3>認證規範7:行政支援人力及經費</h3>
            <h4>(1)研究所主管遴選辦法及相關會議記錄</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload71">Select file to upload:</label>
                <input type="file" name="Upload71" id="Upload71">
                <input type="submit" value="上傳" name="submit71">
                <input type="hidden" name="scrollTo" value="37">
            </form>
            <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist71");
            ?>
            <br>
            <h4>(2)支援師生專業成長(含教師訓練、進修、研究及參與國內外學術交流活動)的經費申請辦法與分配原則</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload72">Select file to upload:</label>
                <input type="file" name="Upload72" id="Upload72">
                <input type="submit" value="上傳" name="submit72">
                <input type="hidden" name="scrollTo" value="37">
            </form>
            <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist72");
            ?>
            <br>
            <h4>(3)助教、行政人員、技術人員等名單及工作內容</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload73">Select file to upload:</label>
                <input type="file" name="Upload73" id="Upload73">
                <input type="submit" value="上傳" name="submit73">
                <input type="hidden" name="scrollTo" value="37">
            </form>
            <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist73");
            ?>
            <br>
            <h4>(4)設備經費的申請辦法與分配原則</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload74">Select file to upload:</label>
                <input type="file" name="Upload74" id="Upload74">
                <input type="submit" value="上傳" name="submit74">
                <input type="hidden" name="scrollTo" value="37">
            </form>
            <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist74");
            ?>
        </div>
        <div class="section" id="38">
            <h3>認證規範8:持續改善</h3>
            <h4>(1)內迴圈機制相關工作/會議記錄</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload81">Select file to upload:</label>
                <input type="file" name="Upload81" id="Upload81">
                <input type="submit" value="上傳" name="submit81">
                <input type="hidden" name="scrollTo" value="38">
            </form>
            <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist81");
            ?>
            <br>
            <h4>(2)外迴圈機制相關工作/會議記錄</h4>
            <form action="upload_master.php" method="post" enctype="multipart/form-data">
                <label for="Upload82">Select file to upload:</label>
                <input type="file" name="Upload82" id="Upload82">
                <input type="submit" value="上傳" name="submit82">
                <input type="hidden" name="scrollTo" value="38">
            </form>
            <?php
                include_once 'list_file_m.php'; 
                renderList($conn, "filelist82");
            ?>
        </div>
    </body>
</html>