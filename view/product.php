<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!---->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Products</title>-->
<!--    <link href="css/reset.css" rel="stylesheet" type="text/css">-->
<!--    <link href="css/prductStyle.css" rel="stylesheet" type="text/css">-->
<!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<!--</head>-->
<!---->
<!--<body>-->
<!--    <div id="wrapper">-->
<!--        <h1>Име на Продукта</h1>-->

<?php
include_once "../view/header.php";
include_once '../controller/getAllProductDataService.php';
?>
    <div id="product-wrapper">
        <h1><?= $name; ?></h1>

        <div id="picture-wrapper">
            <div id="product-picture">
                <img src="http://www.technopolis.bg/medias/sys_master/hf7/h94/9753428197406.jpg" alt="tv">
            </div>
            <div id="product-fav-and-buy">
                <div>
                    <p> 1.559,<sup>00</sup> <span>лв.</span> </p>
<!--                     <p><span>В наличност</span></p> -->
                    <button type="submit" id="add-for-buy">Добави в количката</button>
                    <div class="whishlist-button-holder" data-display-type="default" data-product-id="5499268" data-offer-id="17426062">
                        <button type="button" id="add-to-fav">Добави в Любими</button>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="specifications">
            <section>
                <h2 class="page-section-title">Спецификации</h2>
                <div class="col-md-12">
                    <table class="table-specifications">
                        <tbody>
                            <tr>
                                <td class="col-xs-4 text-muted">н</td>
                                <td class="col-xs-8">Smartphone</td>
                            </tr>
                            <tr>
                                <td class="col-xs-4 text-muted">Sim слотове</td>
                                <td class="col-xs-8">Single Sim</td>
                            </tr>
                            <tr>
                                <td class="col-xs-4 text-muted">Устойчивост на</td>
                                <td class="col-xs-8">IP68 </td>
                            </tr>
                            <tr>
                                <td class="col-xs-4 text-muted">Touchscreen</td>
                                <td class="col-xs-8">Да</td>
                            </tr>
                            <tr>
                                <td>Модел процесор</td>
                                <td class="col-xs-8">Exynos 8895 Octa Core</td>
                            </tr>
                            <tr>
                                <td class="col-xs-4 text-muted">Операционна система</td>
                                <td class="col-xs-8">Android V7.0 (Nougat)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
        <div>
            <hr>
            <div class="comment_input">
                <form name="form">
                    <input type="text" name="name" placeholder="Name..." />
                    <br/>
                    <br/>
                    <textarea name="comments" placeholder="Leave Comments Here..." style="width:635px; height:100px;" id="queryText"></textarea>
                    <br/>
                    <br/>
                    <a href="#" onClick="commentSubmit()" class="button">Коментар</a>
                    <br/><br/>
                </form>
            </div>
            <br/>
            <hr><br/>
            <div id="comment_logs">
                Loading comments...
                <div>
                </div>
            </div>
        </div>
        <script src="../assets/js/mesege.js"></script>
    </div>
<?php
include_once "footer.php";
?>
